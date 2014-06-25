<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Description: This is for making nav above every page after loged in.
 * Date: 6/25/14
 * Time: 11:40 AM
 */

 ?>
</div>
<div class="container">
    <div class="row green_line">
        <div>
         <span>
            <ul class="nav nav-tabs  nav-justified col-lg-offset-0 col-lg-3 height_box_first ">
                <li <?php echo $isToday?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/dashboard">Today</a></li>
                <?php if (false){ ?>
                <li <?php echo $isLastDays?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/lastdays">Last Days</a></li>
                <li <?php echo $isProfile?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/profile">Profile</a></li>
                <li <?php echo $isMyUsers?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/myUsers">My Users</a></li>
                <?php  } ?>
                <li <?php echo $isRegisterUsers?'class="active"':"" ?>><a href="<?php echo base_url();?>/index.php/register">Register Users</a></li>

            </ul>
         </span>

        </div>
    </div>


