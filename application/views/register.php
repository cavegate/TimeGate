<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/20/14
 * Time: 5:25 PM
 */
?>
<script>
    $(document).ready(function(){
        /*
         * If click the register button
         */
        $("#register_button").click(function(){
            if(check_register_validity == 1)
            {
                /*
                * If complete the form correctly
                */
                var username = document.forms["registerForm"]["username"].value;
                var full_name = document.forms["registerForm"]["full_name"].value;
                var password = document.forms["registerForm"]["password"].value;
                var email = document.forms["registerForm"]["email"].value;
                var mobile = document.forms["registerForm"]["mobile"].value;
                var birth_date = document.forms["registerForm"]["birth_date"].value;

                request = $.ajax({

                    url:"<?php echo base_url(); ?>index.php/register/submited_form",
                    type:"POST",
                    data:{"username":username,"full_name":full_name,"password":password,"email":email,"mobile":mobile,"birth_date":birth_date},
                    success:function(result){
                        if(result == "yes")
                        {
                            notif({
                                type: "success",
                                msg: "Register is complete.",
                                position: "right",
                                fade: true
                            });
                            $("#registerForm").trigger("reset");
                        }
                        else{
                            notif({
                                type: "error",
                                msg: "Register is not complete, please try again.",
                                position: "center"
                            });
                            $("#registerForm").trigger("reset");
                        }
                    },
                    beforeSend:function()
                    {
                    },
                    error: function(xhr, status, error) {
                        alert("error");
                    }

                });

            }
            else
            {

            }
        });


        $("#email").blur(function(){

            var email = document.forms["registerForm"]["email"].value;
            if (email == null || email == "") {
                $("#email").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
                check_register_validity = 0;
            }
            else
            {
                request = $.ajax({
                    url:"<?php echo base_url(); ?>index.php/register/check_email_validity",
                    type:"POST",
                    data:{"email":email},
                    success:function(result){
                        if(result == "no")
                        {
                            $("#email").notify("this email was taken.",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
                            check_register_validity = 0;
                        }
                        else{
                            $("#email").notify("",{className:"success"});
                            check_register_validity = 0;
                        }
                    },
                    beforeSend:function()
                    {
                    },
                    error: function(xhr, status, error) {
                        alert("error");
                    }
                });
                return false;

            }
        });




        $("#username").blur(function(){

            var user = document.forms["registerForm"]["username"].value;
            if (user == null || user == "") {
                $("#username").notify("This field not be blank",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
                check_register_validity = 0;
            }
            else
            {
                request = $.ajax({
                    url:"<?php echo base_url(); ?>index.php/register/check_username_validity",
                    type:"POST",
                    data:{"username":user},
                    success:function(result){
                        if(result == "no")
                        {
                            $("#username").notify("This username was taken.",{position:"right",className:"warn",autoHide: false,clickToHide: false,gap: 5});
                            check_register_validity = 0;
                        }
                        else{
                            $("#username").notify("",{className:"success"});
                            check_register_validity = 0;
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

            }
        });
    });
</script>
</div>
<div class="row">
    <form  name= "registerForm" id="registerForm" class="tab-elements" method="post" action="<?php echo base_url();?>index.php/register">
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" id="full_name" name="full_name"  class="form-control height_box" onblur="validateForm_fullname()" placeholder="Write full name">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" name="username" id = "username" class="form-control height_box" placeholder="Write username">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="password" id="password" name="password" class="form-control height_box" onblur="validateForm_password()" placeholder="Write password">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="password" id = "conf_password" name="conf_password" class="form-control height_box" onblur="validateForm_conf_password()" placeholder="Write confirmation password">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="email" id="email" name="email" class="form-control height_box" placeholder="Write email">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input name = "mobile" id="mobile" class="form-control height_box" onblur="validateForm_mobile()" placeholder="Write mobile">
            </div>
        </div>

        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="date" id="birth_date" name = "birth_date" class="form-control height_box" onblur="validateForm_date()" placeholder="Write birthday">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <div class="controls form-inline pad_bottom">
                    <button type="button" id="register_button" class="btn btn-primary btn-lg ">Register</button>
                    <button type="button" id="cancel_button" class="btn btn-default btn-lg ">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>