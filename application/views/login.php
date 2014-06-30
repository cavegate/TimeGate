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

        function ajaxLogin (username,password)
        {
            request = $.ajax({
                url:"<?php echo base_url(); ?>index.php/login/checkLogin",
                type:"POST",
                data:{"username":username, "password":password},
                success:function(result){
                    if(result == "no")
                    {
                        document.getElementById("notification_username").innerHTML = "نام کاربری تکراری میباشد";
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
        }
    });
</script>
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