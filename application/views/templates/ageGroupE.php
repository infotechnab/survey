<script type="text/javascript">
    $(document).ready( function() {
       $('div.panel').click(function() {
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
    });
</script>
<style>
    .checked11
    {
        background: #cccc2c;
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
      style="width: 30%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">30% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
               <a href='<?php echo base_url(); ?>' style="font-size: 35px;text-decoration: none;">Close <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>I'm....</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/location'); ?>
            <div class="col-lg-12" id="innerbody">
            <div class='agegroup'>
                    <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
                <input type="radio" name='age' value='0-14' required> 0-14 years
                </div>
                
            </div>
            
            <div class='agegroup'>
                    <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
         <input type="radio" name='age' value='15-24' required> 15-24 years
                </div>
                
            </div>
            
            <div class='agegroup'>
                    <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
         <input type="radio" name='age' value='25-54' required> 25-54 years
                </div>
                
            </div>
            
            <div class='agegroup'>
                    <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
         <input type="radio" name='age' value='55-64' required> 55-64 years
                </div>
                
            </div>
            
            <div class='agegroup'>
                     <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
         <input type="radio" name='age' value='65above' required> 65+ years
                </div>
                
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