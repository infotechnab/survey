<script type="text/javascript">
    $(document).ready( function() {
        $('div.circled-outer-image-programs').click(function() {
            $('.alert-message').css({'display':'none'});
            $(this).find('input:radio').prop('checked', true);
            $('div.circled-outer-image-programs').removeClass('checked11').addClass('jabat');
            $('div.circled-outer-image-programs').removeClass('checked11').addClass('jabit');
            if ($(this).hasClass("jabat")) {
                $(this).closest('div').removeClass('jabat').addClass('checked11');
            }
            if ($(this).hasClass("jabit")) {
                $(this).closest('div').removeClass('jabit').addClass('checked11');
            }
        });

        $('#test').submit(function(){
            if(!$('#test input[type="radio"]').is(':checked')){
                $('.alert-message').css({'display':'block'});
                var msg="<strong>  साबधान  !</strong> कृपया कुनै एउटा छान्नुहोस् ";
                $('#errmsg').html(msg);
                return false;
            }
        });
    });
</script>
<style>
    .checked11
    {
        background: #cccc2c;
    }
    label {
        position: relative;
        padding-left: 30px;
        font-size: 45px;
        cursor: pointer;
        top: 135px;
        left: 5%;
    }
    label:before, label:after {
        font-family: FontAwesome;
        font-size: 40px;
        /*absolutely positioned*/
        position: absolute; top: 0px; left: 0;
    }
    label:before {
        content: "\f10c";
    }
    label:after {
        content: "\f111"; /* circle */
        /*checked icon will be hidden by default by using 0 max-width and overflow hidden*/
        max-width: 0;
        overflow: hidden;
        opacity: 0.5;
        /*CSS3 transitions for animated effect*/
        transition: all 0.35s;
    }

    /*hiding the original checkboxes*/
    input[type="radio"] {

        display: none;
    }
    /*when the user checks the checkbox the checked icon will animate in*/
    input[type="radio"]:checked + label:after {
        max-width: 70px; /*an arbitratry number more than the icon's width*/
        opacity: 1; /*for fade in effect*/
    }
</style>
<section class='nextbody'>
    <div class="col-lg-12" style="background-color: #efffff;">
        <div class="col-lg-4" style="padding-top:5px;">
            <a href='<?php echo base_url().'index.php/welcome/backPurpose'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> पछाडी जानुहोस्  </i></a>

        </div>
        <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
            <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 70%;padding-top: 5px;">
                    <span class="sr-only" style="position: unset;">७०% पूर्ण </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="text-align: right;">
            <a href='<?php echo base_url().'index.php/welcome/close'; ?>' style="font-size: 35px;text-decoration: none;">बन्द गर्नुहोस्  <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

        </div>
    </div>
    <div class="container">
        <div class="row">


            <div class="col-lg-12" style="text-align: center;">
                <h1 class="top-head"> तपाईंले चितवन महोत्सव कती पटक भ्रमण गर्नुभएको छ ?  </h1>
            </div>
            <!--top level completed-->
            <?php echo form_open_multipart('welcome/media','id="test"'); ?>
            <div class="col-lg-12" id="innerbody">

                <div class="col-lg-6">
                    <div class="img-circle circled-outer-image-programs" id="" style="background-color:#42cc2c;">
                        <input id="option" type='radio' name='frequency' value='new commer'>
                        <label for="it" style="text-align:center;">&nbsp;नवआगन्तुक  </label>
                    </div></div>

                <div class="col-lg-6">
                    <div class="img-circle circled-outer-image-programs" id="" style="background-color:#42cc2c;">
                        <input id="option" type='radio' name='frequency' value='one time'>
                        <label for="it" style="text-align:center;">&nbsp;एक पटक  </label>
                    </div></div>

                <div class="col-lg-6">
                    <div class="img-circle circled-outer-image-programs" id="" style="background-color:#42cc2c;">
                        <input id="option" type='radio' name='frequency' value='two times'>
                        <label for="it">&nbsp;दुई पटक </label>
                    </div></div>

                <div class="col-lg-6">
                    <div class="img-circle circled-outer-image-programs" id="" style="background-color:#42cc2c;">
                        <input id="option" type='radio' name='frequency' value='frequently'>
                        <label for="it">&nbsp;धेरै  पटक  <br/>&nbsp;&nbsp; </label>
                    </div></div>








            </div>
            <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
                <div class="col-lg-4" style="padding-top:35px;">
                    <div class="alert-message error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong id="errmsg"></strong>
                    </div></div>
                <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>

                    <input type="submit" class="btn btn-primary btn-lg" value='  जारी राख्नुनोस '>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>


</section>