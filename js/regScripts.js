
jQuery(document).ready(function() {

    $('.page-container form').submit(function(){
        var name = $(this).find('.name').val();
        var lastname = $(this).find('.lastname').val();
        var tel = $(this).find('.tel').val();
        var username = $(this).find('.email').val();
        var conf_username = $(this).find('.conf_email').val();
        var password = $(this).find('.password').val();
        var conf_password = $(this).find('.conf_password').val();

        if(name == '') {

            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '30px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.name').focus();
            });
            return false;
        }


        if(lastname == '') {

            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '95px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.lastname').focus();
            });
            return false;
        }



        if(tel == '') {

            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '160px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.tel').focus();
            });
            return false;
        }

        if(username == '') {

            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '230px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.email').focus();
            });
            return false;
        }


        if(conf_username == '' ) {

            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '300px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.conf_email').focus();
            });
            return false;
        }
        if(username!=conf_username)
        {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '300px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.conf_email').focus();
            });
            return false;
        }
        if(password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '370px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.password').focus();
            });
            return false;
        }

        if(conf_password == '') {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '440px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.conf_password').focus();
            });
            return false;
        }

        if(conf_password !=password) {
            $(this).find('.error').fadeOut('fast', function(){
                $(this).css('top', '440px');
            });
            $(this).find('.error').fadeIn('fast', function(){
                $(this).parent().find('.conf_password').focus();
            });
            return false;
        }




    });

    $('.username, .password').keyup(function(){
        $(this).parent().find('.error').fadeOut('fast');
    });

});
