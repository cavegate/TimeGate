<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/22/14
 * Time: 12:27 PM
 */

class Register_model extends CI_Model
{
    public static function check_username_register($username)
    {
        $queryString = "select * from users where username = 'Aram'";
        $result = mysql_query($queryString);
        if(count($result)>0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    public static function add_Register($fullname, $username, $password, $email, $mobile, $birthDate)
    {

    }
}
