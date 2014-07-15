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
        $username = strtolower($username);
        $result = $con->get_where('users',array('username' => $username));
        if($result->num_rows>0)
            return true;
        else
            return false;
    }
    public static function check_email_register($email,$con)
    {
        $email = strtolower($email);
        $result = $con->get_where('users',array('email' => $email));
        if($result->num_rows>0)
            return true;
        else
            return false;
    }
    public static function add_Register($full_name, $username, $password, $email, $mobile, $birth_Date, $con)
    {
        $username = strtolower($username);
        $result = $con->get('users');
        $pid = $result->num_rows +1;
        $data = array(
            'personal_id' => $pid,
            'full_name' => $full_name,
            'username' => $username,
            'password' => $password,
            'birthdate' => $birth_Date,
            'mobile' => $mobile,
            'email' => $email
        );
        $result = $con->insert('users',$data);
        if($result)
            return true;
        else
            return false;
    }
}
