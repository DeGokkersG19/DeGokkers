<?php
/**
 * Created by PhpStorm.
 * User: Youri
 * Date: 3/21/2017
 * Time: 1:38 PM
 */

namespace website2;


class emails
{
    private $fileLocation;
    private $email;

    public function __construct($location)
    {
        $this->fileLocation = $location;
    }
    public function Save($email)
    {
        $this->email = $email;
        file_put_contents($this->fileLocation, $this->email . PHP_EOL, FILE_APPEND);
    }
}