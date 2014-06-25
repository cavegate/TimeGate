<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/22/14
 * Time: 12:27 PM
 */

class Dashboard_model extends CI_Model
{
    /*
     * Description:
     *
     * using the username, this function retrievs the last login status of the user and returns the time and status back in an array
     */
    public static function getLastLoginStatus($username)
    {
        //Todo: get the last login status from the database and returns it to the user
    }

    /*
     * Description:
     *
     * this function will recieve an associated array and insert it's data to the database as the last login time
     */
    public static function setNewStatusTime($insertArray)
    {
        //Todo: insert the login status to the database
    }
}
