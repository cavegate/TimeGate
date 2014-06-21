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
        echo "<pre>";
        echo $this->input->post();
        echo "</pre>";
    }
}

