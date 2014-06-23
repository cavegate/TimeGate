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
    <form  method="post" action="<?php echo base_url();?>index.php/register/submited_form">
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" name="full_name"  class="form-control height_box_first" placeholder="Write full name">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="name" name="username" class="form-control height_box" placeholder="Write username">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="password" name="password" class="form-control height_box" placeholder="Write password">
                <input type="password" name="conf_password" class="form-control" placeholder="Write confirmation password">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="email" name="email" class="form-control height_box" placeholder="Write email">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="tel" name = "mobile" class="form-control height_box" placeholder="Write mobile">
            </div>
        </div>
        <div class="row form-group">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <input type="date" name = "birth_date" class="form-control height_box" placeholder="Write birthday">
            </div>
        </div>
        <div class="row">
            <div class="col-xs-offset-1 col-md-offset-4 col-sm-offset-3 col-sm-6 col-lg-4 col-md-4 col-xs-10">
                <div class="controls form-inline pad_bottom">
                    <button type="submit" class="btn btn-primary btn-lg ">Register</button>
                    <button type="button" class="btn btn-default btn-lg ">Cancel</button>
                </div>
            </div>
        </div>
    </form>
</div>