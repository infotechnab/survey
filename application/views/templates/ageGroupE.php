<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>

<script type="text/javascript">
     var base_url = "http://localhost/survey/"; 
    $(document).ready(function() {
   $('.agegroup').on ("click",function () {
        var ageGroup = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: base_url + "index.php/welcome/location",
                data: {
                    'gender': ageGroup,
                    'language':'english'
                },
                success: function(msg)
                {
                     $("#body").html(msg);  

                }
            });
    });

        

    });
</script>
<style>
    .agegroup {
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    display: block;
    line-height: 1.42857;
    margin-bottom: 20px;
    padding: 4px;
    transition: all 0.2s ease-in-out 0s;
    float: left; width: 20%;
}
</style>
<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 style='text-align: center;'>My age group </h1>
            </div>
        </div>
        <div class="col-lg-12">
            <div class='agegroup' style="opacity: 1;" id='0-14'>
                     <h1 style="opacity: 1;position: absolute; left: 3.5%;top: 69%;">0-14 Years</h1>
                    <div id='agegroups'> </div>
                
            </div>
            
            <div class='agegroup' style="opacity: 1;" id='15-24'>
                     <h1 style="opacity: 1;position: absolute; left: 22.5%;top: 69%;">15-24 Years</h1>
                    <div id='agegroups'> </div>
                
            </div>
            
            <div class='agegroup' style="opacity: 1;" id='25-54'>
                     <h1 style="opacity: 1;position: absolute; left: 42%;top: 69%;">25-54 Years</h1>
                    <div id='agegroups'> </div>
                
            </div>
            
            <div class='agegroup' style="opacity: 1;" id='55-64'>
                     <h1 style="opacity: 1;position: absolute; left: 61.5%;top: 69%;">55-64 Years</h1>
                    <div id='agegroups'> </div>
                
            </div>
            
            <div class='agegroup' style="opacity: 1;" id='65above'>
                     <h1 style="opacity: 1;position: absolute; left: 83%;top: 69%;">65 Above</h1>
                    <div id='agegroups'> </div>
                
            </div>
            
            
            
            
        </div>
<!--        <div class="col-lg-12">
            <div class='thumbnail'>         
                <img src="<?php //echo base_url() . 'content/images/kiosk.jpg'; ?>" alt="image_kiosk" class="img-responsive" style="height: 175px;"/>
            </div>
        </div>-->

        
    </div>
    
</section>