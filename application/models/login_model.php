<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Login_model extends CI_Model
{
    public static function checkLogin($username, $password)
    {
        $queryString = "select * from users where username = '$username' and password = '$password'";
        echo $queryString."<br/>";
        $result = mysql_query($queryString);
        print_r($result);
        if(count($result)>0)
            return $result;
    }
} 