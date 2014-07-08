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
    public static function getLastLoginStatus($username,$con,$in = false)
    {
        //Todo: get the last login status from the database and returns it to the user
        $result = $con->get_where('users',array('username' => $username));
        $pid = 0;
        foreach($result->result() as $res )
        {
            $pid = $res->personal_id;
        }
        $stringquery = "SELECT * FROM  times WHERE DATETIME = ( SELECT MAX( DATETIME ) FROM times WHERE personal_id = ? )";
        $result = $con->query($stringquery,array($pid));
        if($result->num_rows > 0)
        {
            $sadjad = $result->result_array();
            $in = $sadjad["0"]["out_or_in"];
        }
        // '1' == login, '0' == logout
        return $in;
    }

    /*
     * Description:
     *
     * this function will recieve an associated array and insert it's data to the database as the last login time
     */
    public static function setNewStatusTime($insertArray,$con)
    {
        //Todo: insert the login status to the database
        $res = $con->insert('times',$insertArray);
        return $res;
    }
}
