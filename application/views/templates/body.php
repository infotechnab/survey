     <script src="<?php echo base_url().'content/scripts/jquery.min.js'; ?>"></script>
     <script type="text/javascript">
         var base_url = "http://localhost/survey/";
  $(document).ready(function(){
        $(".btn").click(function(){
            var lan = $(this).attr('id');
            
           $.ajax({
 type: "POST",
 url: base_url + "index.php/welcome/gender",
 data: {
     'language' : lan
        },
  success: function(msg) 
        {    
            $(".container").html(msg);  
            
        }
 });
});

});
</script>
<style>
    .btn-lg, .btn-group-lg > .btn {
    border-radius: 6px;
    font-size: 40px;
    line-height: 1.33;
    padding: 30px 48px;
}
</style>

<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-7">
        <h1>You are here to contribute Chitwan Mahotsav with your data.</h1>
        <p>Please Select the Language..............</P>
        <p lang="ne">भाषा छनोट गर्नुहोस्.................</p>
        
        <button type="button" id="english" class="btn btn-primary btn-lg">ENTER &#9654;</button>
        <button type="button" id="nepali" class="btn btn-primary btn-lg">सुरु गर्नुहोस् &#9654;</button>
        
    </div>
        
        <div class="col-lg-5">
       <img src="<?php echo base_url().'content/images/kiosk.jpg';?>" alt="image_kiosk" class="img-responsive" style="width: 600px;"/>
        
    </div>
        
        
        
    </div>
    <div id="temp"></div> 
        </section>