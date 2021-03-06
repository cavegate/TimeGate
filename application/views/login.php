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
<script>
    $(document).ready(function(){

        $("#login_btn").click(function(){

            var username = document.forms["login_form"]["username"].value;
            var password = document.forms["login_form"]["password"].value;
            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/login/checkLogin",
                type:"POST",
                data:{"username":username, "password":password},
                success:function(result){
                    if(result == "no")
                    {
                        notif({
                            type: "error",
                            msg: "Your Username/password is wrong. Please try again.",
                            position: "center",
                            width: 500,
                            height: 60
                        });
                    }
                    else{
                        notif({
                            type: "success",
                            msg: "Login successfully.",
                            position: "center",
                            width: 500,
                            height: 60
                        });
                        setTimeout(function(){
                            window.location.href = "<?php echo base_url(); ?>index.php/dashboard";
                        },2000)

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
        });
    });
</script>
</div>
<div class="jumbotron">
    <div class="row">
        <div class="middle-form col-sm-4 col-sm-offset-4">
            <p id="login_notif" style="color: #CC0000"></p>
            <form name="login_form" role="form" action="<?php echo base_url();?>index.php/login/checklogin/" method="POST">
                <div class="form-group">
                    <label for="inputUsername">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username goes here">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password goes here">
                </div>
                <button class="btn btn-warning btn-lg btn-border" id="login_btn"">Log me in please</button>
            </form>
        </div>
    </div>
</div>