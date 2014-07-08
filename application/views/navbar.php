<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Date: 6/28/14
 * Time: 3:39 PM
 */ ?>
</div>
<div class="col-xs-push-1 col-xs-10 bottom-line">
</div>

<div class="container">
    <div class="row header_bottom_border">
        <ul class="nav nav-tabs col-lg-3">
            <li <?php echo $isLogTime?'class="active"':"" ?>>
                <a href="<?php echo base_url();?>index.php/dashboard">Log Time</a>
            </li>
            <?php if (false){ ?>
            <li <?php echo $isLoggedTimes?'class="active"':"" ?>>
                <a href="<?php echo base_url();?>index.php/lastdays">Last Days</a>
            </li>
            <li <?php echo $isProfile?'class="active"':"" ?>>
                <a href="<?php echo base_url();?>index.php/profile">Profile</a>
            </li>
            <li <?php echo $isMyUsers?'class="active"':"" ?>>
                <a href="<?php echo base_url();?>index.php/myUsers">My Users</a>
            </li>
            <?php  } ?>
            <?php if ($isAdmin == true){ ?>
            <li <?php echo $isRegisterUsers?'class="active"':"" ?>>
                <a href="<?php echo base_url();?>index.php/register">Register Users</a>
            </li>
            <?php } ?>
        </ul>
    </div>