<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/20/14
 * Time: 5:25 PM
 */
?>
</div>
<div class="green_line">
    <form  name= "registerForm" method="post" action="<?php echo base_url();?>index.php/register">
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" name="full_name"  class="form-control height_box_first" onblur="validateForm_fullname()" placeholder="Write full name">
            </div>
            <p class= "error_notif error_text_height_first" id="notification_fullname"></p>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" name="username" id = "username" class="form-control height_box" onblur="validateForm_username()"  placeholder="Write username">
            </div>

            <p class= "error_notif error_text_height" id="notification_username"></p>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="password" name="password" class="form-control height_box" onblur="validateForm_password()" placeholder="Write password">
                <input type="password" name="conf_password" class="form-control" onblur="validateForm_conf_password()" placeholder="Write confirmation password">
            </div>
            <p class= "error_notif error_text_height" id="notification_password"></p>
            <p class= "error_notif error_text_height" id="notification_conf_password"></p>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="email" name="email" class="form-control height_box"  onblur="validateForm_email()"placeholder="Write email">
            </div>
            <p class= "error_notif error_text_height" id="notification_email"></p>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="tel" name = "mobile" class="form-control height_box" onblur="validateForm_mobile()" placeholder="Write mobile">
            </div>
            <p class= "error_notif error_text_height" id="notification_mobile"></p>
        </div>

        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="date" name = "birth_date" class="form-control height_box" onblur="validateForm_date()" placeholder="Write birthday">
            </div>
            <p class= "error_notif error_text_height" id="notification_date"></p>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <div class="controls form-inline pad_bottom">
                    <button type="submit" class="btn btn-primary btn-lg " onclick="">Register</button>
                    <button type="button" class="btn btn-default btn-lg ">Cancel</button>
                </div>
            </div>
        </div>
        
    </form>
</div>