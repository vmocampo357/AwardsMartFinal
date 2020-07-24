<?php

namespace AwardsMartBackend\CustomerBundle\Services;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\RequestStack;

class CartUploaderService
{
    /**
     * @var string
     */
    private $uploadsDir;

    /**
     * @var string
     */
    private $webDir;

    /**
     * @var null|\Symfony\Component\HttpFoundation\Request
     */
    private $request;

    /**
     * CartUploaderService constructor.
     * @param string $uploadsDir
     * @param RequestStack $requestStack
     * @param string $webDir
     */
    public function __construct($uploadsDir, $webDir, RequestStack $requestStack)
    {
        $this->uploadsDir = $uploadsDir;

        $this->webDir = $webDir;

        $this->request = $requestStack->getCurrentRequest();
    }

    /**
     * @param UploadedFile $file
     * @return string
     *
     * Used for testing only
     */
    public function testUpload(UploadedFile $file)
    {
        //TODO: Need to make sure this is a whitelistd file
        $name = $this->autoGenName( $file->getClientOriginalName() );

        $file->move($this->uploadsDir,$name);

        return sprintf("%s/%s", $this->webDir, $name);
    }

    /**
     * @param UploadedFile $file
     * @return string
     *
     * Uses the test upload
     */
    public function upload(UploadedFile $file)
    {
        return $this->testUpload($file);
    }

    /**
     * @param string $filename
     * @return string
     *
     * Used to generate a unique name we can save to the DB
     */
    public function autoGenName($filename="")
    {
        return substr( base64_encode(crypt(time() * rand(1,1000), rand(1,1000))) , 0 , 15) . "_uploaded_file_" . $filename;
    }
}