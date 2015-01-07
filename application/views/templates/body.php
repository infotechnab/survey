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
            $("#allb").html(msg);  
            
        }
 });
});

});
</script>
<style>
</style>

<section class='body'>
    
    <div id="solgan-quote-wraper">
        <div  style=" background:rgba(0, 0, 0, 0.4); height: 565px;">
            <h1 style="margin: 0px;padding-top: 40px;">You are here to contribute Chitwan Mahotsav with your data.</h1>
        <p>Please Select the Language..............</P>
        <p lang="ne">भाषा छनोट गर्नुहोस्.................</p>
        
        <img src="<?php echo base_url().'content/images/favicon.jpg' ?>" style="width:220px; text-align: center;margin: 0 auto 0 auto;" class="img-responsive" alt=""/>
        
        <button type="button" id="english" class="btn btn-primary btn-lg">ENTER &#9654;</button>
        
        <button type="button" id="nepali" class="btn btn-primary btn-lg">सुरु गर्नुहोस् &#9654;</button>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For English Language &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       नेपाली भाषाकोलागि</p>
        
        </div>
    </div>

</section>