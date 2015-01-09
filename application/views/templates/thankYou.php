<script>


var seconds_left = 6;
var interval = setInterval(function() {
    document.getElementById('timer_div').innerHTML = --seconds_left;

    if (seconds_left <= 0)
    {
       document.getElementById('timer_div').innerHTML = 'You are ready';
        clearInterval(interval);
    }
}, 1000);

function timeout_trigger() {
    window.alert('Hello!');  
}
 
function timeout_init() {
    setTimeout('timeout_trigger()', 15000);
}
</script>
<style>
    #textinput
    {
        width: 300px;
        padding: 10px;
    }
</style>
<section class='body'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #efffff;">
                <div class="col-lg-4" style="padding-top:5px;">
                <a href='<?php echo base_url().'index.php/welcome/backFeed'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 100%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">100% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
               <a href='<?php echo base_url().'index.php/welcome/close'; ?>' style="font-size: 35px;text-decoration: none;">Close <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                 <h1>Thank You for your time</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/index'); ?>
            <div class="col-lg-12" style="height: 710px;">
               
            <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>
            
                <div id="timer_div" style="font-size: 60px;"></div>
                
                <input id="textinput" type="email" placeholder="Your email (optional)" name="email" onclick="timeout_init()">
            </div>
                
           



            
            
            
               
            
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