<?php

namespace AwardsMartBackend\AdminInterfaceBundle\Controller;

use AwardsMartBackend\AdminInterfaceBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="admin.login")
     */
    public function indexAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('@AdminInterface/Default/login.html.twig',[
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }

    /**
     * @Route("/register", name="admin.register")
     */
    public function testRegisterAction()
    {
        $encoder = $this->get('security.password_encoder');
        $password = 'pass12';
        $user = new User();
        $user->setUsername('brandon');
        $user->setFirstName("Brandon");
        $user->setPassword( $encoder->encodePassword($user, $password) );
        dump($user);
        return new Response("Hi");
    }

    /**
     * @Route("/logout", name="admin.logout")
     */
    public function logoutAction()
    {
        return $this->redirectToRoute("my_homepage");
    }
}
