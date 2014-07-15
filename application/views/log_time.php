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
    $(function(){
        $('#datetime').combodate();
        $('#time').combodate({
            firstItem: 'name', //show 'hour' and 'minute' string at first item of dropdown
            minuteStep: 1
        });
        $('.inp').hide();
    });
    $(document).ready(function(){
        var i=0;
        <?php $this->load->helper('date');
            $time = date('d.m.Y H:i:s', strtotime('-1 hour')); ?>
        var time = new Date('<?php echo $time; ?>');
        $("#clock").flipcountdown({
            size: "xs",
            speedFlip: 160,
            tick: function(){
                return new Date(time.getTime()+((i++)*1000));
            }
        });
        $("#checkbox-forget").click(function(){
            var $this = $(this);
            if($this.is(':checked'))
                $('.inp').fadeIn();
            else
                $('.inp').fadeOut();
        });

        $("#settime_button").click(function(){
            if($("#checkbox-forget").is(':checked'))
            {
                var datetime = document.getElementById("datetime").value;
                var time = document.getElementById("time").value;
                if(time == "" || time == null)
                {
                    $(".inp2").notify("This field not be blank",{position:"left middle",className:"warn",autoHide: false,clickToHide: false,gap: 5});
                }
                else
                {
                    $(".inp2").notify("True",{className:"success",autohide:true clickToHide: true});
                    var year = datetime.charAt(0) + datetime.charAt(1) + datetime.charAt(2) + datetime.charAt(3);
                    var month = datetime.charAt(5) + datetime.charAt(6);
                    var day = datetime.charAt(8) + datetime.charAt(9);
                    var hour = time.charAt(0) + time.charAt(1);
                    var minute = time.charAt(3) + time.charAt(4);
                }

            }
            else
            {
                request = $.ajax({

                    url:"<?php echo base_url()?>index.php/dashboard/setChange?isManually=false",
                    type:"get",
                    data:{},
                    success:function(result){
                        if(result == "yes")
                        {
                            notif({
                                type: "success",
                                msg: "log time successfully",
                                position: "right",
                                time: 1000
                            });
                        }
                        else
                        {
                            notif({
                                type: "error",
                                msg: "log time unsuccessfully, please try again.",
                                position: "center",
                                width: 500,
                                height: 60
                            });
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

        })
    })

</script>
<div class="row tab-elements-log-time">
    <div class="center">
        <nav class="navbar navbar-default" style="margin: 15px; margin-top: 25px; background-color: #afd9ee; border-color: #003399">
            <div id="sayName">Hello <?php $this->load->library('session');
                echo $this->session->userdata('full_name');?>. Welcome to time gate.</div>
            <div id="clock" style="float: right;padding-right: 15px; padding-top: 12px"></div>
        </nav>
        <div class="navbar navbar-default main-logtime">
            <div>
                <p>
                    Please Press the button for automatically log time:
                </p>
            </div>
            <div class="lb-pos">
                <div class="btn-time"><button id="settime_button" type="submit" class="btn btn-danger btn-lg">LOG TIME!</button></div>
                <input type="checkbox" id="checkbox-forget" name="forget-log" value='true'> I have forgotten to log.
            </div>

            <div class="inp">
                <div class="inp1">
                    <input type="text" id="datetime" data-format="YYYY-MM-DD" data-template="YYYY - MM - DD" name="date" value="<?php $this->load->helper('date');
                    echo date('Y-m-d'); ?>">
                </div>
                <div class="inp2">
                    <input type="text" id="time" data-format="HH:mm" data-template="HH : mm" name="datetime">
                </div>
            </div>

        </div>
    </div>
</div>





