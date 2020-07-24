<?php

namespace AwardsMartBackend\AdminInterfaceBundle\Controller;

use AwardsMartBackend\AdminInterfaceBundle\AdminInterfaceBundle;
use AwardsMartBackend\AdminInterfaceBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/administrator")
 */
class ManageUsersController extends Controller
{
    /**
     * @Route("/users/all", name="users.all")
     */
    public function usersAllAction()
    {
        $auth = $this->get('security.authorization_checker');

        $this->denyAccessUnlessGranted('ROLE_SUPER_ADMIN', null, 'Unable to access this page!');

        # Entity Manager
        $em = $this->getDoctrine()->getManager();

        # Repo for the users
        $userRepository = $em->getRepository('AdminInterfaceBundle:User');

        # Get all the users lmao
        $users = $userRepository->findAll();

        dump($this->getUser());

        # Send it back, yawn
        return $this->render('@AdminInterface/Default/all-users.html.twig',[
            'users' => $users,
            'total' => count($users)
        ]);
    }

    /**
     * @Route("/users/edit/{id}", defaults={"id"=0}, name="users.edit")
     */
    public function userEditAction($id, Request $request)
    {
        # load em
        $em = $this->getDoctrine()->getManager();

        # load auth checker for role checkboxes
        $repo = $em->getRepository('AdminInterfaceBundle:User');

        # default title
        $title = "Create User";

        # either load or not
        if($id){
            $title = "Update User";
            $user = $em->find('AdminInterfaceBundle:User', intval($id));
        }else{
            $user = new User();
        }

        # if the request is a POST, we're creating/updating an user
        if($request->getMethod() == "POST")
        {
            # loads the form data
            $formdata = $request->request->get('userform');

            # if the user is new, and no password is set, send an error -- otherwise, it's fine
            if($formdata['password'] == "" && $user->getId() == null)
            {
                # stop the submission at this point
                $this->get("session")->getFlashBag()->add('error', 'Please provide a password!');

            }else{

                $error = false;

                # assuming its an existing user, or the user is new and they set a password
                if( $formdata['password'] ){
                    $encrypt = $this->get('security.password_encoder');
                    $user->setPassword( $encrypt->encodePassword( $user, $formdata['password'] ) );
                }

                /**
                 * This will set all of the required fields, and throw an error if anything required is missing.
                 *
                 * Note: username cannot be changed
                 *
                 */
                if($user->getId() == null){
                    if( $formdata['username'] != "" ){
                        # Check for an existing username, otherwise allow
                        $userWithName = $repo->findOneBy(['username' => $formdata['username']] );
                        if(!$userWithName)
                        {
                            $user->setUsername($formdata['username']);
                        }else{
                            $error = true;
                            $this->get("session")->getFlashBag()->add('error', 'This username already exists!');
                        }
                    }else{
                        $error = true;
                        $this->get("session")->getFlashBag()->add('error', 'Please provide a username!');
                    }
                }

                if( $formdata['firstName'] != "" ){
                    $user->setFirstName($formdata['firstName']);
                }else{
                    $error = true;
                    $this->get("session")->getFlashBag()->add('error', 'Please provide a first name!');
                }

                # set non required fields now
                $user->setLastName( $formdata['lastName'] );

                # set a stupid default profile image
                $user->setProfileImage("");

                # now, set permissions (unless is_super_admin is set), then only one role is set!
                if( isset($formdata['is_super_admin']) && intval($formdata['is_super_admin']) == 1 )
                {
                    $roles = ["ROLE_SUPER_ADMIN"];
                }else
                {
                    $roles = $formdata['roles'];
                    array_push($roles, 'ROLE_USER');
                }

                # add permissions
                $user->setRoles( json_encode($roles) );

                # if we had an error, say it, otherwise, persist!
                if( !$error )
                {
                    $this->get('session')->getFlashBag()->add('success',"The user information has been saved!");
                    $em->persist($user);
                    $em->flush();
                    return $this->redirectToRoute('users.all');
                }
            }
        }

        # checkbox values for the user

        # now load the edit form
        return $this->render('@AdminInterface/Single/update-user.html.twig',[
            'user' => $user,
            'id' => $id,
            'title' => $title
        ]);
    }

    /**
     * @Route("/users/deactivate/{id}", name="users.delete")
     */
    public function deactivateUserAction($id)
    {
        if($id > 1){

            # get em
            $em = $this->getDoctrine()->getManager();

            # user
            $user = $em->find('AdminInterfaceBundle:User', intval($id));

            if($user){
                $em->remove($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','The user was deactivated!');
                return $this->redirectToRoute("users.all");
            }else{
                $this->get('session')->getFlashBag()->add('error','This user is already deactivated!');
            }
        }else{
            $this->get('session')->getFlashBag()->add('error','You cannot deactivate this user!');
            return $this->redirectToRoute("users.all");
        }
    }
}
