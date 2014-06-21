<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 4/3/14
 * Time: 8:54 PM
 *
 * Description:
 * The login page that gets the user info username and password + captcha
 */
?>
</div>
<div class="jumbotron">
    <div class="row">
        <div class="middleForm col-sm-4 col-sm-offset-4">
            <form role="form" action="<?php echo base_url();?>index.php/login/checklogin/" method="POST">
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username goes here">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password goes here">
                </div>
                <button type="submit" class="btn btn-warning btn-lg btn-border">Log me in please</button>
            </form>
        </div>
    </div>
</div>