<?php
/**
 * Created by PhpStorm.
 * User: Ehsanh
 * Date: 6/30/14
 * Time: 12:01 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller{
    public function index(){
        $this->load->helper('url');
        $this->load->library('session');
        $data = array(
            'username' => "",
            'full_name' => "",
            'email' => ""
        );
        $this->session->unset_userdata($data);
        redirect('/login/','refresh');
    }
}