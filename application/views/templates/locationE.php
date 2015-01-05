<script src="<?php echo base_url() . 'content/scripts/jquery.min.js'; ?>"></script>
<script type="text/javascript">
    var base_url = "http://localhost/survey/";
    $(document).ready(function() {
            
        $(".thumbnail").click(function() {
            var gender = $(this).attr('id');
            $.ajax({
                type: "POST",
                url: base_url + "index.php/welcome/profession",
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
                <h1 style='text-align: center;'>I'm from </h1>
            </div>
        </div>
        <div class="col-lg-6">
            <div class='thumbnail' id='Chitwan' style="opacity: 1;">
                     <h1 style="opacity: 1;position: absolute; left: 37%;top: 58%;">Chitwan</h1>
                    <div id='locchit'> </div>         
            </div>  
        </div>

        <div class="col-lg-6">
            <div class='thumbnail' id='Nawalparasi' style="opacity: 1;">
                     <h1 style="opacity: 1;position: absolute; left: 37%;top: 58%;">Nawalparasi</h1>
                    <div id='locnaw'> </div>         
            </div>  
        </div>
        
        <div class="col-lg-6">
            <div class='thumbnail' id='Makawanpur' style="opacity: 1;">
                     <h1 style="opacity: 1;position: absolute; left: 30%;top: 58%;">Makawanpur</h1>
                    <div id='locmak'> </div>         
            </div>  
        </div>
        
        
        
        
        <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='Nepal' style="background-color: #428bca;">
                <h1>NEPAL</h1>
            </div>
        </div>
        
        <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='Foreign' style="background-color: #428bca;">
                <h1>FOREIGN</h1>
            </div>
        </div>
       
    </div>
    <div id="temp"></div> 
</section>