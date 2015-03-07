<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<script type="text/javascript">
    $(document).ready( function() {
        $('div.panel').click(function() {
            $('.alert-message').css({'display':'none'});
            $(this).find('input:radio').prop('checked', true);
            $('div.panel').removeClass('checked11').addClass('jabat');
            $('div.panel').removeClass('checked11').addClass('jabit');
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
                var msg="<strong>साबधान !</strong> कुनै एक छान्नुहोस्  ।";
                $('#errmsg').html(msg);
                return false;
            }
        });

    });
</script>
<script>
window.setTimeout(function() {
    indow.location.href = '<?php echo base_url().'index.php/welcome/close'; ?>';
}, 10000);
</script>
<style>
    .checked11
    {
        background: #cccc2c;
    }
</style>

<section class='nextbody'>
    <div class="col-lg-12" style="background-color: #efffff;">
        <div class="col-lg-4" style="padding-top:5px;">
            <a href='<?php echo base_url().'index.php/welcome/close'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> पछाडी जानुहोस्  </i></a>

        </div>
        <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
            <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 20%;padding-top: 5px;">
                    <span class="sr-only" style="position: unset;">२०% पूर्ण </span>
                </div>
            </div>
        </div>
        <div class="col-lg-4" style="text-align: right;">
            <a href='<?php echo base_url().'index.php/welcome/close'; ?>' style="font-size: 35px;text-decoration: none;">बन्द गर्नुहोस्  <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

        </div>
    </div>
    <div class="container">
        <div class="row">


            <div class="col-lg-12">
                <h1 class="top-head">म </h1>
            </div>
            <!--top level completed-->
            <?php echo form_open_multipart('welcome/ageGroup','id="test"'); ?>

            <div class='col-lg-12' id="innerbody">

                <div class='gender'>
                    <div class="panel panel-default text-center" style="margin-bottom:0px;">

                        <div id="male"></div>
                        <input type="radio" name='gender' value='male'> पुरुष
                    </div>
                </div>



                <div class='gender'>
                    <div class="panel panel-default text-center" style="margin-bottom:0px;">

                        <div id="female"></div>
                        <input type="radio" name='gender' value='female'> महिला
                    </div>
                </div>
                
                <div class="genderAsd">
                    <div class='panel thumbnail btn btn-info btn-lg' id='purpose' style="min-height:710px; padding-top: 275px;">
                <div style="padding:20px;">
                    <input id="option" type='radio' name='gender' value='other'>
  <label for="it">&nbsp;अन्य </label>
</div>      
            </div>
                </div>
            </div>
            <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
                <div class="col-lg-4" style="padding-top:35px;">
                    <div class="alert-message error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong id="errmsg"></strong>
                    </div></div>
                <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>

                    <input type="submit" class="btn btn-primary btn-lg" value='जारी राख्नुहोस् '>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>


</section>