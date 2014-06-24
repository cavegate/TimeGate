/**
 * Created by AramJ on 6/23/14.
 */

function validateForm_fullname()
{
    var not_null = document.forms["registerForm"]["full_name"].value;
    if (not_null == null || not_null == "") {
        document.getElementById("notification_fullname").innerHTML = "این فیلد نباید خالی باشد";
    }
    else
    {
        document.getElementById("notification_fullname").innerHTML ="";
    }

}

function validateForm_username()
{
    var user = document.forms["registerForm"]["username"].value;
    if (user == null || user == "") {
        document.getElementById("notification_username").innerHTML = "این فیلد نباید خالی باشد";
    }
    else
    {
        document.getElementById("notification_username").innerHTML ="";
        $(document).ready(function(){
                request = $.ajax({
                    url:"<?php echo base_url();?>index.php/register/check_username",
                    type:"POST",
                    data:{"username":user},
                    success:function(result){
                        if(result == "no")
                        {
                            $("#notification_username").val = "نام کاربری تکراری میباشد";
                            alert("hi");
                        }
                        else{
                            $("#notification_username").val  = "";
                        }
                    },
                    beforeSend:function()
                    {
                    },
                    error: function(xhr, status, error) {
                        alert("hey");
                    }
                });
            return false;

        });

    }

}

function validateForm_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (pass == null || pass == ""){
        document.getElementById("notification_password").innerHTML = "این فیلد نباید خالی باشد";
    }
    else if (pass != conf_pass && conf_pass != null){
        document.getElementById("notification_password").innerHTML ="رمز و تایید رمز همخوانی ندارند";

    }
    else
    {
        document.getElementById("notification_password").innerHTML ="";
    }

}

function validateForm_conf_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (conf_pass== null || conf_pass== "") {
        document.getElementById("notification_conf_password").innerHTML = "این فیلد نباید خالی باشد";
    }
    else if(pass != conf_pass)
    {

        document.getElementById("notification_conf_password").innerHTML ="رمز و تایید رمز همخوانی ندارند";
    }
    else
    {
        document.getElementById("notification_conf_password").innerHTML ="";
    }

}
function validateForm_email()
{
    var not_null = document.forms["registerForm"]["email"].value;
    if (not_null == null || not_null == "") {
        document.getElementById("notification_email").innerHTML = "این فیلد نباید خالی باشد";
    }
    else
    {
        document.getElementById("notification_email").innerHTML ="";
    }
}

function validateForm_mobile()
{
    var number = document.forms["registerForm"]["mobile"].value;
    if(isNaN(number)== true)
    {
        document.getElementById("notification_mobile").innerHTML = "شماره موبایل اشتباه میباشد";
    }
    else
    {
        document.getElementById("notification_mobile").innerHTML ="";
    }

}
function validateForm_date()
{
    var birth_date = document.forms["registerForm"]["birth_date"].value;
    if(birth_date == null || birth_date == "")
    {
        document.getElementById("notification_date").innerHTML = "تاریخ وارد نشده است";
    }
    else
    {
        document.getElementById("notification_date").innerHTML ="";
    }

}
function validateForm_buttom()
{


}

