<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<script type="text/javascript">
    var base_url = "http://localhost/survey/";
    $(document).ready(function() {
            
        $(".thumbnail").click(function() {
            var gender = $(this).attr('id');

            $.ajax({
                type: "POST",
                url: base_url + "index.php/welcome/frequency",
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
                <h1 style='text-align: center;'>My purpose of visit is</h1>
            </div>
        </div>
        
         <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>PURCHASE</h1>
            </div>
        </div>

        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>INQUIRY</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>INFO OF AGRI.</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>INFO OF DAIRY</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>INFO OF IT</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>OTHER</h1>
            </div>
        </div>
        
    </div>
    
</section>