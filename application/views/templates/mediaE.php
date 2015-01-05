<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<script type="text/javascript">
    var base_url = "http://localhost/survey/";
    $(document).ready(function() {
            
        $(".thumbnail").click(function() {
            var gender = $(this).attr('id');
           
            $.ajax({
                type: "POST",
                url: base_url + "index.php/welcome/feed",
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

<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 style='text-align: center;'>Where did you heard about Mahotsav from? </h1>
            </div>
        </div>
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='newspaper' style="background-color: #428bca;">
                <h1>NEWSPAPER</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='television' style="background-color: #428bca;">
                <h1>TELEVISION</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='fmradio' style="background-color: #428bca;">
                <h1>F.M. RADIO</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='friends' style="background-color: #428bca;">
                <h1>FRIENDS</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='roadmic' style="background-color: #428bca;">
                <h1>ROAD MIC.</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>OTHER</h1>
            </div>
        </div>
        
    </div>
    <div id="temp"></div> 
</section>