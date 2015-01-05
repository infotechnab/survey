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
                    'language':'nepali'
                },
                success: function(msg)
                {
                     $("#body").html(msg);  

                }
            });
        });

    });
</script>

<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 lang="ne" style='text-align: center;'>म</h1>
                
            </div>
        </div>
        <div class="col-lg-6">
            <div class='thumbnail' id='male'>         
                <img src="<?php echo base_url() . 'content/images/kiosk.jpg'; ?>" alt="image_kiosk" class="img-responsive" style="width: 310px;"/>
            </div>
        </div>

        <div class="col-lg-6">
            <div class='thumbnail' id='female'>
                <img src="<?php echo base_url() . 'content/images/kiosk.jpg'; ?>" alt="image_kiosk" class="img-responsive" style="width: 310px;"/>
            </div>

        </div>
        <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">अन्य</button>
            </div>
        </div>
    </div>
    <div id="temp"></div> 
</section>