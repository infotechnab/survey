<script type="text/javascript">
    $(document).ready( function() {
$("td.option").on("click",function(event) {
     $('.alert-message').css({'display':'none'});
    var target = $(event.target);
    if (target.is('input:checkbox')) return;
    
    var checkbox = $(this).find("input[type='checkbox']");
    
    if( !checkbox.prop("checked") ){
        checkbox.prop("checked",true);
         $(this).css({'background-color':'#cccc2c'});
    } else {
        checkbox.prop("checked",false);
         $(this).css({'background-color':'#cdcdcd'});
    }
});

$('#test').submit(function(){
    if(!$('#test input[type="checkbox"]').is(':checked')){
        $('.alert-message').css({'display':'block'});
        var msg="<strong>Error !</strong> Please select atleast one option.";
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
	content: '\f096'; /*unchecked*/
}
label:after {
	content: '\f046'; /*checked*/
	/*checked icon will be hidden by default by using 0 max-width and overflow hidden*/
	max-width: 0;
	overflow: hidden;
	opacity: 0.5;
	/*CSS3 transitions for animated effect*/
	transition: all 0.35s;
}
input[type="checkbox"] {
	
    display: none;
}
/*when the user checks the checkbox the checked icon will animate in*/
input[type="checkbox"]:checked + label:after {
	max-width: 70px; /*an arbitratry number more than the icon's width*/
	opacity: 1; /*for fade in effect*/
}
.tables
{
    padding: 10px;
}
.option
{
    padding: 6px 10px 6px 100px;
}
tr:nth-child(even) {background: #cdcdcd}
tr:nth-child(odd) {background: #dcdcdc}
</style>
<section class='nextbody'>
    <div class="col-lg-12" style="background-color: #efffff;">
                <div class="col-lg-4" style="padding-top:5px;">
                <a href='<?php echo base_url().'index.php/welcome/backFrequency'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 80%;padding-top: 5px;">
       <span class="sr-only" style="position: unset;">80% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
               <a href='<?php echo base_url().'index.php/welcome/close'; ?>' style="font-size: 35px;text-decoration: none;">Close <i class="fa fa-times-circle" style="font-size: 35px;"></i></a>

            </div>
            </div>
    <div class="container">
        <div class="row">
            
            
            <div class="col-lg-12" style="text-align: center;">
                <h1 class="top-head">Where did you hear about Mahotsav from?</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/feed','id="test"'); ?>
            <div class="col-lg-12" id="innerbody">
                <table style="font-size: 45px; width: 100%;padding: 0% 10% 0% 10%;margin: 0 auto 0 auto; ">
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='newspaper'>
                            <label for="student">&nbsp;&nbsp;Newspaper and Magazine</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='television'>
                            <label for="student">&nbsp;&nbsp;Television</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='fm radio'>
                            <label for="student">&nbsp;&nbsp;F.M. Radio</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='social media'>
                            <label for="student">&nbsp;&nbsp;Social Media</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='road miking'>
                            <label for="student">&nbsp;&nbsp;Road Miking</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='friends'>
                            <label for="student">&nbsp;&nbsp;Friends/ Family/ Society</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='other' value='ccic member'>
                            <label for="student">&nbsp;&nbsp;CCIC Members</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='banner pamphlet'>
                            <label for="student">&nbsp;&nbsp;Banner and Pamphlet</label></td>   
                    </tr>
                    <tr class="tables">  
                        <td class='option'><input id="option" type='checkbox' name='media[]' value='other'>
                            <label for="student">&nbsp;&nbsp;Other</label></td>   
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
            
                <input type="submit" class="btn btn-primary btn-lg" value='Continue'>
            </div>
        </div>
    <?php echo form_close(); ?>
        </div>
    </div>
    

</section>