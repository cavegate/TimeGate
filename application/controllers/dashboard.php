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

    /*
     * Description:
     *
     * This controller is for interacting with the system after logging in
     *
     * -This controller must be restricted by not logged in users
     * -if the user has not yet logged in, redirect them to the login page
     * -show the name of the user at the top of the screen
     *
     * In "Log time" tab
     *      -Show the number of hours that the user is working if the last submit was login
     *      -Show the status that you are not currently working if the last submit was logout
     *      -Show a button that allows the user to work if the last submit was login and allows to stop work if the last submit was logout
     *      -Allow manual log outs if the user forgot to logout the last time
     *      -Allow manual log ins if the user forgot to login the last time
     *      -while logging out the user must be able to select one the projects specified in the system
     *      -the status change must be done without the page refresh
     * In "Time spend so far" tab
     * In "Who's working" tab
     * In "Edit Profile" tab
     */
    public function index()
    {
        //Todo: create a dashboard controller and show it here
        //Todo: Time spent so far
        //Todo: Who's working
        //Todo: Edit Profile

        $this->load->library('session');
        $username = $this->session->userdata('username');
        if($username == true)
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
                "isToday" => true,
                "isLastDays" => false,
                "isProfile" => false,
                "isMyUsers" => false,
                "isRegisterUsers" => false
            );
            $this->load->view('header',$headerPassedArray);
            $this->load->view('today',$dashboardPassedArray);
            $this->load->view('dashboard');
            $this->load->view('footer');
        }
        else
        {
            $this->load->helper('url');
            redirect('/login/','refresh');
        }
    }

    /**
     * Descriptions:
     * if push button take time.
     *
     */


    /*
     * Description:
     *
     * Checks the session to see if the user is allowed to see this page or not
     *
     * This functions are private in order to limit their accessibility from url request
     */
    private function calculateLoginStatus()
    {
        //Todo: check the session to see if the user has logged in or not

        $this->load->library('session');
        $username = $this->session->userdata('username');
        if($username == true)
            return true;
        else
            return false;
    }

    /*
     * Descritpion:
     *
     * If the user was last logged in, it should return the number of minutes that the user was logged in
     * If the user was last logged out, it should return false
     *
     * This functions are private in order to limit their accessibility from url request
     */
    private function calculateLastLoginStatus()
    {
        //Todo: check to see if the user was last logged in or logged out and return the proper result
        if($this->calculateLoginStatus())
        {
            $this->load->model('dashboard_model');
            $this->load->library('session');
            $username = $this->session->userdata('username');
            $in = $this->dashboard_model->getLastLoginStatus($username,$this->db);
            return $in;
            //'1' == login , '0' == logout
        }
        else
        {
            $this->load->helper('url');
            redirect('/login/','refresh');
        }
    }
    public function setChange()
    {
        $this->changeWorkingStatus(false);
    }

    /*
     * Description:
     *
     * This function log the status of the user using the model. if isManually is set then the the hour, minute and so
     * on are the base for inserting otherwise the system time and date are the base
     * this function checks whether the last status is login or logout and insert the other one
     * this functions passes the insert parameters as an associative array to the model
     *
     * This functions are private in order to limit their accessibility from url request
     */
    private function changeWorkingStatus($isManually, $hour = -1, $minute = -1, $second = -1, $day = -1, $month = -1, $year = -1)
    {
        //Todo: change the status of the the user from logged in to log out and from logged out to log in
        if($isManually == true)
        {

        }
        else
        {
            if($this->calculateLoginStatus())
            {
                $this->load->helper('date');
                $datestring = "%Y-%m-%d %H:%i:%s";
                $time = time();
                $datetime = mdate($datestring, $time);
                echo($datetime);
                $this->load->model('dashboard_model');
                $this->load->library('session');
                $personal_id = $this->session->userdata('personal_id');
                $out_or_in = $this->calculateLastLoginStatus();
                if($out_or_in == false)
                    $out_or_in = true;
                else
                    $out_or_in = false;

                $data = array('datetime' => $datetime,
                              'personal_id' => $personal_id,
                              'is_manually_entered' => $isManually,
                              'out_or_in' => $out_or_in);
                $this->load->model('dashboard_model');
                $res = $this->dashboard_model->setNewStatusTime($data,$this->db);

            }
            else
            {
                $this->load->helper('url');
                redirect('/login/','refresh');
            }
        }
    }
}

