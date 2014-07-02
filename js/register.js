/**
 * Created by AramJ on 6/23/14.
 */
var check_register_validity = 0;
function validateForm_fullname()
{
    var not_null = document.forms["registerForm"]["full_name"].value;
    if (not_null == null || not_null == "") {
        document.getElementById("notification_fullname").innerHTML = "این فیلد نباید خالی باشد";
        check_register_validity = 0;
    }
    else
    {
        document.getElementById("notification_fullname").innerHTML ="";
        check_register_validity = 1;
    }

}

function validateForm_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (pass == null || pass == ""){
        document.getElementById("notification_password").innerHTML = "این فیلد نباید خالی باشد";
        check_register_validity = 0;
    }
    /*else if (pass != conf_pass && conf_pass != null){
     document.getElementById("notification_password").innerHTML ="رمز و تایید رمز همخوانی ندارند";
     check_register_validity = 0;
     }*/
    else
    {
        document.getElementById("notification_password").innerHTML ="";
        check_register_validity = 1;
    }

}

function validateForm_conf_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (conf_pass== null || conf_pass== "") {
        document.getElementById("notification_conf_password").innerHTML = "این فیلد نباید خالی باشد";
        check_register_validity = 0;
    }
    else if(pass != conf_pass)
    {
        document.getElementById("notification_conf_password").innerHTML ="رمز و تایید رمز همخوانی ندارند";
        check_register_validity = 0;
    }
    else
    {
        document.getElementById("notification_conf_password").innerHTML ="";
        check_register_validity = 1;
    }

}

function validateForm_mobile()
{
    var number = document.forms["registerForm"]["mobile"].value;
    var i;
    var result = true;
    for(i=0;i<number.length;i++)
    {
        var j;
        for(j='a';j<='z';j++)
        {
            if(number[i]==j)
                result = false;
        }
        for(j='A';j<='Z';j++)
        {
            if(number[i]==j)
                result = false;
        }
    }
    if(result == false)
    {
        document.getElementById("notification_mobile").innerHTML = "شماره موبایل اشتباه میباشد";
        check_register_validity = 0;
    }
    else
    {
        document.getElementById("notification_mobile").innerHTML ="";
        check_register_validity = 1;
    }
}
function validateForm_date()
{
    var birth_date = document.forms["registerForm"]["birth_date"].value;
    if(birth_date == null || birth_date == "")
    {
        document.getElementById("notification_date").innerHTML = "تاریخ وارد نشده است";
        check_register_validity = 0;
    }
    else
    {
        document.getElementById("notification_date").innerHTML ="";
        check_register_validity = 1;
    }
}
