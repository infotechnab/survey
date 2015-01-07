<script type="text/javascript">
    $(document).ready( function() {
$("div.btn").on("click",function(event) {
    var target = $(event.target);
    if (target.is('input:radio')) return;
    
    var checkbox = $(this).find("input[type='radio']");
    
    if( !checkbox.prop("checked") ){
        checkbox.prop("checked",true);
         $(this).css({'background-color':'#cccc2c'});
    } else {
        checkbox.prop("checked",false);
         $(this).css({'background-color':'#42cc2c'});
    }
});

    });
    
</script>

<style>
  label {
	position: relative;
	padding-left: 30px;
	font-size: 45px;
	cursor: pointer;
}
label:before, label:after {
	font-family: FontAwesome;
	font-size: 40px;
	/*absolutely positioned*/
	position: absolute; top: 4px; left: 0;
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
    
#purpose {
    padding: 75px 25px;
} 
.thumbnail
{
   background-color:#42cc2c; 
}
.thumbnail:hover, .thumbnail:active, .thumbnail:visited
{
    background-color: #cccc2c;
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
      style="width: 50%;">
       <span class="sr-only" style="position: unset;">50% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
                <a href='#'><i class="fa fa-chevron-circle-right" style="font-size: 35px;"> Skip </i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>My profession</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/purpose'); ?>
                       
            <div class='col-lg-12' id="innerbody">
             
                
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='student' required>
  <label for="student">&nbsp;Student </label>
</div>      
            </div>
        </div>
       
          <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='business' required>
  <label for="it">&nbsp;Business </label>
</div>      
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='govofficer' required>
  <label for="entertainment">&nbsp;Gov. Officer </label>
</div>      
            </div>
        </div>
                
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='teacher' required>
  <label for="dairy">&nbsp;Teacher</label>
</div>      
            </div>
        </div>
                
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='engineer' required>
  <label for="dairy">&nbsp;Engineer</label>
</div>      
            </div>
        </div>
                
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='doctor' required>
  <label for="dairy">&nbsp;Doctor</label>
</div>      
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='employee' required>
  <label for="dairy">&nbsp;Employee</label>
</div>      
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='selfemployed' required>
  <label for="purchase">&nbsp;Self Employed</label>
</div>      
            </div>
        </div>      
              
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                <div style="padding:20px;">
                    <input id="option" type='radio' name='other' value='other' required>
  <label for="other">&nbsp;Other</label>
</div>      
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