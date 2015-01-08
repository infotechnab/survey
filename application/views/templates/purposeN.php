<script type="text/javascript">
    $(document).ready( function() {
        $("div.btn").on("click",function(event) {
            $('.alert-message').css({'display':'none'});
            var target = $(event.target);
            if (target.is('input:checkbox')) return;

            var checkbox = $(this).find("input[type='checkbox']");

            if( !checkbox.prop("checked") ){
                checkbox.prop("checked",true);
                $(this).css({'background-color':'#cccc2c'});
            } else {
                checkbox.prop("checked",false);
                $(this).css({'background-color':'#42cc2c'});
            }
        });



        $('#test').submit(function(){
            if(!$('#test input[type="checkbox"]').is(':checked')){
                $('.alert-message').css({'display':'block'});
                var msg="<strong>  साबधान  !</strong>  कृपया ,कम्तीमा एउटा छान्नुहोस् ";
                $('#errmsg').html(msg);
                return false;
            }
        });



    });

</script>

<style>
    label {
        position: relative;
        padding-left: 30px;
        font-size: 40px;
        cursor: pointer;
    }
    label:before, label:after {
        font-family: FontAwesome;
        font-size: 35px;
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

    /*hiding the original checkboxes*/
    input[type="checkbox"] {

        display: none;
    }
    /*when the user checks the checkbox the checked icon will animate in*/
    input[type="checkbox"]:checked + label:after {
        max-width: 70px; /*an arbitratry number more than the icon's width*/
        opacity: 1; /*for fade in effect*/
    }

    #purpose {
        padding: 125px 25px;
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
    <div class="col-lg-12" style="background-color: #efffff;">
        <div class="col-lg-4" style="padding-top:5px;">
            <a href='<?php echo base_url().'index.php/welcome/backprofession'; ?>'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> पछाडी जानुहोस् </i></a>

        </div>
        <div class="col-lg-4" style="text-align: center;padding-top: 10px;">
            <div class="progress progress-striped active" style="margin-bottom: 0px;height: 30px;">
                <div class="progress-bar progress-bar-success" role="progressbar"
                     aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                     style="width: 60%;padding-top: 5px;">
                    <span class="sr-only" style="position: unset;">६०% पूर्ण </span>
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
                <h1 class="top-head">मेरो भ्रमणको उदेश्य </h1>
            </div>
            <!--top level completed-->
            <?php echo form_open_multipart('welcome/frequency','id="test"'); ?>

            <div class='col-lg-12' id="innerbody">


                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='agriculture'>
                            <label for="student">&nbsp;कृषि  </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='IT'>
                            <label for="it">&nbsp;सुचना प्रविधी  </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='entertainment'>
                            <label for="entertainment">&nbsp;मनोरन्जन  </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='dairy'>
                            <label for="dairy">&nbsp;डेरी   </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='purchase'>
                            <label for="purchase">&nbsp;खरीद  </label>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
                    <div class='thumbnail btn btn-info btn-lg' id='purpose'>
                        <div style="padding:20px;">
                            <input id="option" type='checkbox' name='purpose[]' value='other'>
                            <label for="other">&nbsp;अन्य </label>
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

                    <input type="submit" class="btn btn-primary btn-lg" value='  जारी राख्नुनोस '>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>


</section>