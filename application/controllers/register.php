<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/20/14
 * Time: 5:20 PM
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {
/*
    var $full_name;
    var $username;
    var $password;
    var $confirmation_password;
    var $email;
    var $mobile;
    var $birthday;
*/
    public function index()
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
        $dashboardPassedArray = array(
            "isToday" => false,
            "isLastDays" => false,
            "isProfile" => false,
            "isMyUsers" => false,
            "isRegisterUsers" => true
        );
        $this->load->view('header',$headerPassedArray);
        $this->load->view('dashboard',$dashboardPassedArray);
        $this->load->view('register');
        $this->load->view('footer');
    }
    public function submited_form(){
        $this->load->model("register_model");
        $fullname =  $this->input->post('full_name');
        $username =  $this->input->post('username');
        $password = $this->input->post('password');
        $conf_password = $this->input->post('conf_password');
        $email = $this->input->post('email');
        $mobile = $this->input->post('mobile');
        $birthDate = $this->input->post('birth_date');




        
    }
    public  function check_username_validity(){

        $this->load->model("register_model");
        $username =  $this->input->post('username');
        $result = $this->register_model->check_username_register($username,$this->db);
        if( $result == false )
        {
            echo "yes";
        }
        else
            echo "no";
    }
}




?>