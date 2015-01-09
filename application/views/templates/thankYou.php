<script>


var seconds_left = 6;
var interval = setInterval(function() {
    document.getElementById('timer_div').innerHTML = --seconds_left + ' seconds';

    if (seconds_left == 0)
    {
      // document.getElementById('timer_div').innerHTML = 'You are ready';
      clearInterval(interval);
    }
}, 1000);
window.setTimeout(function() {
    window.location.href = '<?php echo base_url().'index.php/welcome/close'; ?>';
}, 5500);
</script>

<section class='body'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #efffff;margin: 0 auto 0 auto;">
            
                <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 100%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">100% Complete</span>
   </div>
</div>
            

            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                 <h1>तपाईंको महत्वपूर्ण जानकारीकालागी धन्यवाद ! </h1>
                 <h3>Thank You for your valuable information</h3>
            
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/index'); ?>
            <div class="col-lg-12" style="height: 710px;">
               
            <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>
            
                <div >
                    <h1>Redirecting in </h1>
                    <div id="timer_div" style="font-size: 80px;"></div>
                </div>
                
                
            </div>
                
           



            
            
            
               
            
        </div>
    <?php echo form_close(); ?>
        </div>
    </div>
    

</section>