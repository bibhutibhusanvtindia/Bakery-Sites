jQuery(document).ready(function($){

    $(document).on('click', '#vw-bakery-welcome-notice .notice-dismiss', function(){

        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: {
                action: 'vw_bakery_dismiss_notice'
            }
        });

    });

});