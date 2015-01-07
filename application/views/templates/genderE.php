<script type="text/javascript">
    $(document).ready( function() {
$("div.panel").on("click",function(event) {
    var target = $(event.target);
    if (target.is('input:radio')) return;
    
    var radio = $(this).find("input[type='radio']");
    
    if( !radio.prop("checked") ){
        radio.prop("checked",true);
         $(this).css({'background-color':'#cccc2c'});
        // $(this).('div').css({'background-color':'#fff'});
    } else {
        radio.prop("checked",false);
         $(this).css({'background-color':'#fff'});
    }
    if( !radio.prop("checked") ){
        $(this).css({'background-color':'#fff'});
    } 
});

    });
</script>
<style>
    .checked11
    {
        background: red;
    }
</style>

<section class='nextbody'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #efffff;">
            <div class="col-lg-4">
                <a href='#'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 7px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 20%;">
       <span class="sr-only" style="position: unset;">20% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
                <a href='#'><i class="fa fa-chevron-circle-right" style="font-size: 35px;"> Skip </i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>I'm....</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/ageGroup'); ?>
                       
            <div class='col-lg-12' id="innerbody">
             
                <div class='gender'>
                <div class="panel panel-default text-center">
                     
                 <div id="male"></div>   
                 <input type="radio" name='gender' value='male' required> Male
                </div>
                </div>
                
                
                
                <div class='gender'>
                <div class="panel panel-default text-center">
                     
                 <div id="female"></div>   
                 <input type="radio" name='gender' value='female' required> Female
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