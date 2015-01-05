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

   
    $('.single-slider').jRange({
    from: 0,
    to: 5,
    step: 1,
    scale: [0,1,2,34,5],
    format: '%s',
    width: 500,
    showLabels: true
});

 });
</script>
<link rel="stylesheet" href="<?php echo base_url().'content/styles/range.css'; ?>">
<script src="<?php echo base_url().'content/scripts/range.js'; ?>"></script>
<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 style='text-align: center;'>How do you judge this mahotsav in summary? </h1>
            </div>
        </div>
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">Sachibalaya</button>
            </div>
        </div>
        
        <div class="col-lg-8" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other' style="padding-top: 60px;padding-bottom: 60px;padding-left: 20px;">
                <div class='single-slider'></div>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">Communication</button>
            </div>
        </div>
        
        <div class="col-lg-8" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">Drinking Water</button>
            </div>
        </div>
        
        <div class="col-lg-8" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                
            </div>
        </div>
        
       <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">Toilet</button>
            </div>
        </div>
        
        <div class="col-lg-8" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                <button type="button" id='clickable' class="btn btn-primary btn-lg">Over all</button>
            </div>
        </div>
        
        <div class="col-lg-8" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail' id='other'>
                
            </div>
        </div>
        
    </div>
    <div id="temp"></div> 
</section>