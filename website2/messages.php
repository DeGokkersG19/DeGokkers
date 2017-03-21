<?php
/**
 * Created by PhpStorm.
 * User: Youri
 * Date: 3/21/2017
 * Time: 1:43 PM
 */

namespace website2;


class messages
{
    private $fileLocation;
    private $message;

    public function __construct($location)
    {
        $this->fileLocation = $location;
    }
    public function Save($message)
    {
        $this->message = $message;
        file_put_contents($this->fileLocation, $this->message . PHP_EOL, FILE_APPEND);
    }
}