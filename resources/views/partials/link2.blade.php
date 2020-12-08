<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>

<script type="text/javascript" src="{{asset('js/js3.js')}}"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url": "\/wp-admin\/admin-ajax.php", "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type="text/javascript" src="{{asset('js/js4.js')}}"></script>

<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_0a1783b07f4e145ad773d45267e92259",
        "fragment_name": "wc_fragments_0a1783b07f4e145ad773d45267e92259"
    };
    /* ]]> */
</script>

<script type="text/javascript" src="{{asset('js/js5.js')}}"></script>

<script type='text/javascript' src='//maps.googleapis.com/maps/api/js?ver=4.9.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var mkdfGlobalVars = {
        "vars": {
            "mkdfAddForAdminBar": 0,
            "mkdfElementAppearAmount": -100,
            "mkdfAjaxUrl": "https:\/\/anwalt.mikado-themes.com\/wp-admin\/admin-ajax.php",
            "mkdfStickyHeaderHeight": 0,
            "mkdfStickyHeaderTransparencyHeight": 70,
            "mkdfTopBarHeight": 46,
            "mkdfLogoAreaHeight": 0,
            "mkdfMenuAreaHeight": 116,
            "mkdfMobileHeaderHeight": 70
        }
    };
    var mkdfPerPageVars = {
        "vars": {
            "mkdfMobileHeaderHeight": 70,
            "mkdfStickyScrollAmount": 890,
            "mkdfHeaderTransparencyHeight": 0,
            "mkdfHeaderVerticalWidth": 0
        }
    };
    /* ]]> */
</script>

<script type="text/javascript" src="{{asset('js/js6.js')}}"></script>

<script>
    jQuery('document').ready(function () {

        jQuery('#inviamail').on('click', function (ele) {
            ele.preventDefault();
            var urlmail =   jQuery(this).attr('href');

            jQuery.ajax(
                urlmail,
                {
                    method: 'POST',
                    dataType: 'json',
                    data : {
                        '_token' : jQuery('#_token').val(),
                        'title' : jQuery('#nomefrom').val(),
                        'mailfrom' : jQuery('#indirizzofrom').val(),
                        'content' : jQuery('#testofrom').val()
                    },
                    complete : function (resp) {
                        console.log(resp.responseText);
                        if(resp.responseText == 1){
                            jQuery('#consensofooter').prop('checked', false);
                            jQuery('#mess').fadeIn(2000);
                            jQuery('#mess').html("Messaggio inviato");
                            jQuery('#mess').fadeOut(4000);
                            jQuery('#testofrom').val("").attr("required", false);
                            jQuery('#indirizzofrom').val("").attr("required", false);
                            jQuery('#nomefrom').val("").attr("required", false);
                        } else {
                            var cc = JSON.parse(resp.responseText);
                            if(cc.errors.content){
                                jQuery('#mess').html(cc.errors.content + " <br> messaggio non inviato");
                            }
                            if(cc.errors.mailfrom){
                                jQuery('#mess').html(cc.errors.mailfrom + " <br> messaggio non inviato");
                            }
                            jQuery('#mess').css("height", 80);
                            jQuery('#mess').fadeIn(2000);
                            jQuery('#mess').fadeOut(3000);
                        }
                    }
                }
            )
        });
    });

    var windowWidth = jQuery(window).width();
    if (windowWidth < 650)
    {
        jQuery('#infofooter').css('margin-left',2);
    }
</script>

<script>

    $("#consensofooter").change(function() {
        if(this.checked) {
            $("#inviamail").removeClass('not-active');
        }else{
            $("#inviamail").addClass('not-active');
        }
    });

</script>