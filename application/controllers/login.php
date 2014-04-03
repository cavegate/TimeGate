<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 4/3/14
 * Time: 12:37 AM
 *
 * Description:
 * The login controller, if the session with the user is already created, then this page
 * is skipped
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index()
    {
        $this->load->library('session');
        $username = $this->session->userdata('username');
        if($username == FALSE)
        {
            $this->load->view('header');
            $this->load->view('login');
            $this->load->view('footer');
        }
        else
        {
            $this->load->helper('url');
            redirect('/welcome/','refresh');
        }
    }
}

