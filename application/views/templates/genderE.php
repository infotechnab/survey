<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<script type="text/javascript">
    var base_url = "http://localhost/survey/";
    $(document).ready(function() {
            
        $(".thumbnail").click(function() {
            var gender = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: base_url + "index.php/welcome/ageGroup",
                data: {
                    'gender': gender,
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

<section class="container" style="min-height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 style='text-align: center;'>I'm </h1>
            </div>
        </div>
        <div class="col-lg-6">
           
                
                <div class='thumbnail' style="opacity: 1;">
                     <h1 style="opacity: 1; position: absolute; left: 34%;top: 69%;">Male</h1>
                    <div id='male'> </div>
                
            </div>
            
        </div>

        <div class="col-lg-6">
            <div class='thumbnail' style="opacity: 1;">
                <h1 style="opacity: 1;position: absolute; left: 34%;top: 69%;">Female</h1>
                    <div id='female'> </div>
            </div>

        </div>
        <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>OTHER</h1>
            </div>
            </div>
        </div>
    </div>
    <div id="temp"></div> 
</section>