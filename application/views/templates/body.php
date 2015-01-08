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
        <div id="cover-home">
            <h1 style="margin-top: 0px;padding-top: 40px;">You are here to contribute Chitwan Mahotsav with your data.</h1>
       
        
        
        <div class="col-lg-12" style="padding-top:700px;">
             <p>Please Select the Language</P>
        <p lang="ne">भाषा छनोट गर्नुहोस्</p>
            <button type="button" id="english" class="btn btn-primary btn-lg">ENTER &#9654;<br/><span style="font-size: 14px;">For English Language</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            <button type="button" id="nepali" class="btn btn-primary btn-lg">सुरु गर्नुहोस् &#9654;<br/><span style="font-size: 14px;">नेपाली भाषाकोलागि</span></button>
        
        </div>
        </div>
    </div>

</section>