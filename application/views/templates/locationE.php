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
        var msg="<strong>Error !</strong> Please select where are you from.";
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
                <a href='<?php echo base_url().'index.php/welcome/backageGroup'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 40%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">40% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
               <a href='<?php echo base_url().'index.php/welcome/close'; ?>' style="font-size: 35px;text-decoration: none;">Close <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

            </div>
            </div>
    <div class="container">
        <div class="row">
            
            
            <div class="col-lg-12">
                <h1 class="top-head">I'm from</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/profession','id="test"'); ?>
                       
            <div class='col-lg-12' id="innerbody">
             <div class="col-lg-12">
                <div class='district'>
                <div class="panel panel-default text-center">
                     
                    <img src="<?php echo base_url().'content/images/chitwan.png' ?>" alt=""><br/>  
                 <input type="radio" name='district' value='chitwan'> Chitwan
                </div>
                </div>
       
                <div class='district'>
                    <div class="panel panel-default text-center">
                     
                        <img src="<?php echo base_url().'content/images/nawalparasi.png' ?>" alt="" >  <br/>
                 <input type="radio" name='district' value='nawalparasi'> Nawalparasi
                </div>
                </div>
                
                <div class='district'>
                <div class="panel panel-default text-center" id='district'>
                     
                 <img src="<?php echo base_url().'content/images/makwanpur.png' ?>" alt="">  <br/>
                 <input type="radio" name='district' value='makawanpur'> Makawanpur
                </div>
                </div>
             </div>
                <div class="col-lg-12">
               <div class='district'>
                    <div class="panel panel-default text-center">
                     
                 <img src="<?php echo base_url().'content/images/nepalmap.png' ?>" alt="">  
                 <input type="radio" name='district' value='other district'> Other District
                </div>
                </div>
                <div class='district'>
                    <div class="panel panel-default text-center">
                     
                 <img src="<?php echo base_url().'content/images/worldmap.png' ?>" alt="">  
                 <input type="radio" name='district' value='foreign'> Other Country
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
            
                <input type="submit" class="btn btn-primary btn-lg" value='Continue'>
            </div>
        </div>
    <?php echo form_close(); ?>
        </div>
    </div>
    

</section>