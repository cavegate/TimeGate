<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 6/19/14
 * Time: 3:30 PM
 *
 * Description:
 * The dashboard controller that is shown when the user loges in...
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        //Todo: create a dashboard controller and show it here
        /*
         * Description:
         * -This controller must be restricted by not logged in users
         * -Show the number of hours that the user is working
         * -If the user is not working allow them to work
         * -Allow manual log outs
         * -Allow manual log ins
         */
    }

    public function calculateLoginStatus()
    {}
}

