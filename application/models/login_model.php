<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Login_model extends CI_Model
{
    /*
     * Checks for the login status whether the username password are valid or not
     * @param $Username
     * @param $Password
     * @return bool|resource
     */
    public static function checkLogin($username, $password,$con)
    {
        $result = $con->get_where('users',array('username' => $username , 'password' => $password));
        if($result->num_rows>0)
            return $result;
        else
            return false;
    }
} 