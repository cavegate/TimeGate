<?php
/**
 * Created by PhpStorm.
 * User: AramJ
 * Description: This is for making nav above every page after loged in.
 * Date: 6/25/14
 * Time: 11:40 AM
 */

 ?>
<script>
    $(document).ready(function(){
        $('.inp').hide();
        $("#checkbox-forget").click(function(){
            var $this = $(this);
            if($this.is(':checked'))
            {
                console.log("sdsds");
                $('#btn-time').fadeOut();
                $('.inp').fadeIn();

            }
            else
            {
                console.log("hoy");
                $('#btn-time').fadeIn();
                $('.inp').fadeOut();
            }

        });

    });
</script>
<div class="row">
    <div class="center tab-elements-log-time">
        <label id="lb-pos">
            <input type="checkbox" id="checkbox-forget" name="forget-log" value='true'> I have forgotten to log.
        </label>
        <button type="submit" id="btn-time" class="btn btn-danger btn-lg btn-time">LOG TIME!</button>
        <input class="inp input-lg inp-date input-sm" style="font-size: small;" placeholder="Day">
        <input class="inp input-lg inp-date-sec input-sm" style="font-size: x-small;" placeholder="Month">
        <input class="inp input-lg inp-date-sec" style="font-size: small;" placeholder="Year">
        <input class="inp input-lg inp-time" placeholder="set time">
    </div>
</div>





