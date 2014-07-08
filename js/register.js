/**
 * Created by AramJ on 6/23/14.
 */
var check_register_validity = 0;
function validateForm_fullname()
{
    var not_null = document.forms["registerForm"]["full_name"].value;
    if (not_null == null || not_null == "") {
        $("#full_name").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else
    {
        $("#full_name").notify("",{position:"right",className:"success", autoHideDelay: 1000, gap: 5})
        check_register_validity = 1;
    }

}

function validateForm_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (pass == null || pass == ""){
        $("#password").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else
    {
        $("#password").notify("",{className:"success"});
        check_register_validity = 1;
    }

}

function validateForm_conf_password()
{
    var pass = document.forms["registerForm"]["password"].value;
    var conf_pass = document.forms["registerForm"]["conf_password"].value;
    if (conf_pass== null || conf_pass== "") {
        $("#conf_password").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else if(pass != conf_pass)
    {
        $("#conf_password").notify("password is not match",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else
    {
        $("#conf_password").notify("",{className:"success"});
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
        $("#mobile").notify("The mobile number is wrong",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else
    {
        $("#mobile").notify("",{className:"success"});
        check_register_validity = 1;
    }
}
function validateForm_date()
{
    var birth_date = document.forms["registerForm"]["birth_date"].value;
    if(birth_date == null || birth_date == "")
    {
        $("#birth_date").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
        check_register_validity = 0;
    }
    else
    {
        $("#birth_date").notify("",{className:"success"});
        check_register_validity = 1;
    }
}
