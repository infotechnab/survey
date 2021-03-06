<link rel="stylesheet" href="<?php echo base_url().'content/styles/jquery-ui.css'; ?>">
<script src="<?php echo base_url().'content/scripts/jquery-ui.js'; ?>"></script>
<link rel="stylesheet" href="/resources/demos/style.css">
<script>
    $(function() {
        $( "#slider" ).slider({
            value:0,
            min: 0,
            max: 5,
            step: 1,
            slide: function( event, ui ) {
                $( "#sachibalaya" ).val( "" + ui.value );
            }
        });
        $( "#sachibalaya" ).val( "" + $( "#slider" ).slider( "value" ) );
    });


    $(function() {
        $( "#slider1" ).slider({
            value:0,
            min: 0,
            max: 5,
            step: 1,
            slide: function( event, ui ) {
                $( "#water" ).val( "" + ui.value );
            }
        });
        $( "#water" ).val( "" + $( "#slider1" ).slider( "value" ) );
    });

    $(function() {
        $( "#slider2" ).slider({
            value:0,
            min: 0,
            max: 5,
            step: 1,
            slide: function( event, ui ) {
                $( "#toilet" ).val( "" + ui.value );
            }
        });
        $( "#toilet" ).val( "" + $( "#slider2" ).slider( "value" ) );
    });

    $(function() {
        $( "#slider3" ).slider({
            value:0,
            min: 0,
            max: 5,
            step: 1,
            slide: function( event, ui ) {
                $( "#communication" ).val( "" + ui.value );
            }
        });
        $( "#communication" ).val( "" + $( "#slider3" ).slider( "value" ) );
    });

    $(function() {
        $( "#slider4" ).slider({
            value:0,
            min: 0,
            max: 5,
            step: 1,
            slide: function( event, ui ) {
                $( "#security" ).val( "" + ui.value );
            }
        });
        $( "#security" ).val( "" + $( "#slider4" ).slider( "value" ) );
    });

</script>
<script>
window.setTimeout(function() {
    indow.location.href = '<?php echo base_url().'index.php/welcome/close'; ?>';
}, 15000);
</script>
<script>
    $(document).ready( function() {
        $('#test').submit(function(){
            var security = $( "#security" ).val();
            var sachibalaya = $( "#sachibalaya" ).val();
            var water = $( "#water" ).val();
            var toilet = $( "#toilet" ).val();
            var communication = $( "#communication" ).val();

            if( security =='0' && sachibalaya =='0' && water =='0' && toilet =='0' && communication =='0'){
                $('.alert-message').css({'display':'block'});
                var msg="<strong>  साबधान  !</strong> कुनै एक छान्नुहोस्";
                $('#errmsg').html(msg);
                return false;
            }
        });
    });
</script>
<style>
    .option
    {
        padding: 54px 15px;
        font-size: 30px;
        width: 20%;
    }
    .value
    {
        padding: 54px 15px;
    }
    .optionval
    {
        font-size: 30px;
    }
</style>
<section class='nextbody'>
    <div class="col-lg-12" style="background-color: #efffff;">
        <div class="col-lg-4" style="padding-top:5px;">
            <a href='<?php echo base_url().'index.php/welcome/backMedia'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> पछाडी जानुहोस्  </i></a>

        </div>
        <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
            <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 90%;padding-top: 5px;">
                    <span class="sr-only" style="position: unset;">९०% पूर्ण </span>
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
                <h1 class="top-head">तपाईंले हाम्रो सेवाहरुलाई कस्तो मुल्याङ्कन गर्नुहुन्छ?</h1>
            </div>
            <!--top level completed-->
            <?php echo form_open_multipart('welcome/thankYou','id="test"'); ?>
            <div class="col-lg-12" id="innerbody">


                <table width="100%">
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="sachibalaya">सचिवालय </label>
                        </td>
                        <td class='optionval'> <input type="text" name="sachibalaya" id="sachibalaya" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 25px;left: 29%;">0</span>
                            <span id="number" style="position:absolute;top: 25px;left: 35%;">1</span>
                            <span id="number" style="position:absolute;top: 25px;left: 41%;">2</span>
                            <span id="number" style="position:absolute;top: 25px;left: 47%;">3</span>
                            <span id="number" style="position:absolute;top: 25px;left: 53%;">4</span>
                            <span id="number" style="position:absolute;top: 25px;left: 59%;">5</span>
                            <div id="slider"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="water">खानेपानी </label>
                        </td>
                        <td class='optionval'><input type="text" name="water" id="water" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 180px;left: 29%;">0</span>
                            <span id="number" style="position:absolute;top: 180px;left: 35%;">1</span>
                            <span id="number" style="position:absolute;top: 180px;left: 41%;">2</span>
                            <span id="number" style="position:absolute;top: 180px;left: 47%;">3</span>
                            <span id="number" style="position:absolute;top: 180px;left: 53%;">4</span>
                            <span id="number" style="position:absolute;top: 180px;left: 59%;">5</span>
                            <div id="slider1"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="toilet">शौचालय </label>
                        </td>
                        <td class='optionval'><input type="text" name="toilet" id="toilet" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 335px;left: 29%;">0</span>
                            <span id="number" style="position:absolute;top: 335px;left: 35%;">1</span>
                            <span id="number" style="position:absolute;top: 335px;left: 41%;">2</span>
                            <span id="number" style="position:absolute;top: 335px;left: 47%;">3</span>
                            <span id="number" style="position:absolute;top: 335px;left: 53%;">4</span>
                            <span id="number" style="position:absolute;top: 335px;left: 59%;">5</span>
                            <div id="slider2"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="communication">सञ्चार </label>
                        </td>
                        <td class='optionval'><input type="text" name="communication" id="communication" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 490px;left: 29%;">0</span>
                            <span id="number" style="position:absolute;top: 490px;left: 35%;">1</span>
                            <span id="number" style="position:absolute;top: 490px;left: 41%;">2</span>
                            <span id="number" style="position:absolute;top: 490px;left: 47%;">3</span>
                            <span id="number" style="position:absolute;top: 490px;left: 53%;">4</span>
                            <span id="number" style="position:absolute;top: 490px;left: 59%;">5</span>
                            <div id="slider3"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="security">सुरक्षा </label>
                        </td>
                        <td class='optionval'><input type="text" name="security" id="security" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 645px;left: 29%;">0</span>
                            <span id="number" style="position:absolute;top: 645px;left: 35%;">1</span>
                            <span id="number" style="position:absolute;top: 645px;left: 41%;">2</span>
                            <span id="number" style="position:absolute;top: 645px;left: 47%;">3</span>
                            <span id="number" style="position:absolute;top: 645px;left: 53%;">4</span>
                            <span id="number" style="position:absolute;top: 645px;left: 59%;">5</span>
                            <div id="slider4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'></td>
                        <td class='optionval'></td>
                        <td class='value'><input type="text" id="security" readonly style="border:0; color:#f6931f; font-weight:bold;width:60px;"></td>
                    </tr>
                </table>


            </div>
            <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
                <div class="col-lg-4" style="padding-top:35px;">
                    <div class="alert-message error">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong id="errmsg"></strong>
                    </div></div>
                <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>

                    <input type="submit" class="btn btn-primary btn-lg" value=' जारी राख्नुनोस '>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>


</section>

