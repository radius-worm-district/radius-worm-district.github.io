<?php
/**
 * Created by PhpStorm.
 * User: Iwan
 * Date: 27-3-2017
 * Time: 10:21
 */

namespace app;
include_once("Validate.php");

class RegisterValidate extends Validate
{
    private $confirmedPassword;

    public function __construct($email, $password, $confirmedPassword )
    {
        parent::__construct($email, $password);
        $this->confirmedPassword = $confirmedPassword;
    }

    public function validatePassword( $password, $confirmedPassword )
    {
        if( $password == $confirmedPassword )
        {
            return true;
        }
        else
        {
            return false;
        }

    }
}