<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 6/20/14
 * Time: 12:37 PM
 */

class Model_whois_checker extends CI_Model
{
    public static function checkLogin($username, $password)
    {
        $ok = "select * from users where username = \''$username'\' and password = \''$password'\'";
        echo $ok;
        die;
        $result = mysql_query("select * from users where username = \''$username'\' and password = \''$password'\'");
    }
} 