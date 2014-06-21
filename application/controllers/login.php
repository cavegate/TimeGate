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
            $this->load->helper('url');
            if(LANGUAGE == "en")
                $this->lang->load('en','english');
            else if(LANGUAGE == "fa")
                $this->lang->load('fa','persian');
            $headerPassedArray = array(
                "header_meta_description" => $this->lang->line("login_header_meta_description"),
                "title" => $this->lang->line("login_title"),
                "website_header" => $this->lang->line("website_header"),
                "is_login" => TRUE,
                "LANGUAGE" => LANGUAGE
            );
            $this->load->view('header',$headerPassedArray);
            $this->load->view('login');
            $this->load->view('footer');
        }
        else
        {
            $this->load->helper('url');
            redirect('/welcome/','refresh');
        }
    }

    function checklogin()
    {
        $this->load->model('login_model');
        $this->load->library('encrypt');
        echo $this->input->post('password')."<br/>";
        $encryptedPassword = $this->encrypt->encode($this->input->post('password'));
        echo $encryptedPassword."<br/>";
        $decodedPassword = $this->encrypt->decode($encryptedPassword);
        echo $decodedPassword."<br/>";
        $sha1Password = $this->encrypt->sha1($encryptedPassword);
        echo $sha1Password."<br/>";
        $result = $this->login_model->checkLogin($this->input->post('username'),$sha1Password);
        print_r($result);
        die;
    }
}

