<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/22/14
 * Time: 12:27 PM
 */

class Register_model extends CI_Model
{
    public static function check_username_register($username,$con)
    {
        $queryString = "select * from users where username = ?";
        $result = $con->query($queryString,array($username));
        if($result->num_rows>0)
            return true;
        else
            return false;
    }
    public static function add_Register($full_name, $username, $password, $email, $mobile, $birthDate, $con)
    {
        $queryString = "insert into users (full_name,username,password,email,mobile,birth_date) values ($full_name,$username,$password,$email,$mobile,$birthDate)";
        $result = $con->query($queryString);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        return true;
    }
}
