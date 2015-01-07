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
<style>
    .option
    {
       padding: 60px 15px; 
    }
    .value
    {
        padding: 60px 15px;
    }
    .optionval
    {
        padding: 60px 15px; font-size: 30px;
    }
</style>
<section class='nextbody'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #efffff;">
                <div class="col-lg-4" style="padding-top:5px;">
                <a href='#'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 90%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">90% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
               <a href='<?php echo base_url(); ?>' style="font-size: 35px;text-decoration: none;">Close <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>How do you evaluate our services?</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/thankYou'); ?>
            <div class="col-lg-12" id="innerbody">

      
                <table>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="sachibalaya">Sachibalaya</label>
                        </td>
                        <td class='optionval'> <input type="text" id="sachibalaya" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: -14px;left: 40.5%;">0</span>
                            <span id="number" style="position:absolute;top: -14px;left: 48.5%;">1</span>
                            <span id="number" style="position:absolute;top: -14px;left: 56.5%;">2</span>
                            <span id="number" style="position:absolute;top: -14px;left: 64.5%;">3</span>
                            <span id="number" style="position:absolute;top: -14px;left: 72.5%;">4</span> 
                            <span id="number" style="position:absolute;top: -14px;left: 80.5%;">5</span> 
                            <div id="slider"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="water">Water Supply</label>
                        </td>
                        <td class='optionval'><input type="text" id="water" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: 50px;left: 40.5%;">0</span>
                            <span id="number" style="position:absolute;top: 50px;left: 48.5%;">1</span>
                            <span id="number" style="position:absolute;top: 50px;left: 56.5%;">2</span>
                            <span id="number" style="position:absolute;top: 50px;left: 64.5%;">3</span>
                            <span id="number" style="position:absolute;top: 50px;left: 72.5%;">4</span> 
                            <span id="number" style="position:absolute;top: 50px;left: 80.5%;">5</span>
                            <div id="slider1"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="toilet">Toilet</label>
                        </td>
                        <td class='optionval'><input type="text" id="toilet" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: -14px;left: 40.5%;">0</span>
                            <span id="number" style="position:absolute;top: -14px;left: 48.5%;">1</span>
                            <span id="number" style="position:absolute;top: -14px;left: 56.5%;">2</span>
                            <span id="number" style="position:absolute;top: -14px;left: 64.5%;">3</span>
                            <span id="number" style="position:absolute;top: -14px;left: 72.5%;">4</span> 
                            <span id="number" style="position:absolute;top: -14px;left: 80.5%;">5</span>
                             <div id="slider2"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                            <label for="communication">Communication</label>
                        </td>
                        <td class='optionval'><input type="text" id="communication" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: -14px;left: 40.5%;">0</span>
                            <span id="number" style="position:absolute;top: -14px;left: 48.5%;">1</span>
                            <span id="number" style="position:absolute;top: -14px;left: 56.5%;">2</span>
                            <span id="number" style="position:absolute;top: -14px;left: 64.5%;">3</span>
                            <span id="number" style="position:absolute;top: -14px;left: 72.5%;">4</span> 
                            <span id="number" style="position:absolute;top: -14px;left: 80.5%;">5</span>
                             <div id="slider3"></div>
                        </td>
                    </tr>
                    <tr style="padding: 20px 0px 20px 0px;">
                        <td class='option'>
                           <label for="security">Security</label>
                        </td>
                        <td class='optionval'><input type="text" id="security" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                        <td class='value'>
                            <span id="number" style="position:absolute;top: -14px;left: 40.5%;">0</span>
                            <span id="number" style="position:absolute;top: -14px;left: 48.5%;">1</span>
                            <span id="number" style="position:absolute;top: -14px;left: 56.5%;">2</span>
                            <span id="number" style="position:absolute;top: -14px;left: 64.5%;">3</span>
                            <span id="number" style="position:absolute;top: -14px;left: 72.5%;">4</span> 
                            <span id="number" style="position:absolute;top: -14px;left: 80.5%;">5</span>
                             <div id="slider4"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'></td>
                        <td class='optionval'></td>
                        <td class='value'><input type="text" id="security" readonly style="border:0; color:#f6931f; font-weight:bold;"></td>
                    </tr>
                </table>
        
            
        </div>
    <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>
            
                <input type="submit" class="btn btn-primary btn-lg" value='Continue'>
            </div>
        </div>
    <?php echo form_close(); ?>
        </div>
    </div>
    

</section>

