<!--
<section class="container" style="height: 495px;">
    <div class="row">
        <div class="col-lg-12">
            <div class='thumbnail'>
                <h1 style='text-align: center;'>My profession </h1>
            </div>
        </div>
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='student' style="background-color: #428bca;">
                <h1>STUDENT</h1>
            </div>
        </div>

        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='business' style="background-color: #428bca;">
               <h1>BUSINESS</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='employee' style="background-color: #428bca;">
                <h1>EMPLOYEE</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='govofficer' style="background-color: #428bca;">
               <h1>GOV. OFFICER</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='teacher' style="background-color: #428bca;">
                <h1>TEACHER</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='other' style="background-color: #428bca;">
                <h1>OTHER</h1>
            </div>
        </div>
        
    </div>
    <div id="temp"></div> 
</section>-->




<section class='nextbody'>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12" style="background-color: #efffff;">
            <div class="col-lg-4">
                <a href='#'><i class="fa fa-chevron-circle-left" style="font-size: 35px;"> Back </i></a>

            </div>
            <div class="col-lg-4" style="text-align: center;padding-top: 7px;">
                <div class="progress progress-striped active" style="margin-bottom: 0px;">
   <div class="progress-bar progress-bar-success" role="progressbar" 
      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
      style="width: 50%;">
       <span class="sr-only" style="position: unset;">50% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
                <a href='#'><i class="fa fa-chevron-circle-right" style="font-size: 35px;"> Skip </i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>My profession is</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/purpose'); ?>
                       
            <div class='col-lg-12'>
             
                
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='student' style="background-color: #428bca;">
                <input type='checkbox' name='profession' value='student'><h1>STUDENT</h1>
            </div>
        </div>
       
          <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='business' style="background-color: #428bca;">
               <input type='checkbox' name='profession' value='student'><h1>BUSINESS</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='employee' style="background-color: #428bca;">
                <input type='checkbox' name='profession' value='student'><h1>EMPLOYEE</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='govofficer' style="background-color: #428bca;">
               <input type='checkbox' name='profession' value='student'><h1>GOV. OFFICER</h1>
            </div>
        </div>
        
        <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='teacher' style="background-color: #428bca;">
                <input type='checkbox' name='profession' value='student'><h1>TEACHER</h1>
            </div>
        </div>      
              
                <div class="col-lg-4" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class='thumbnail btn btn-primary btn-lg' id='teacher' style="background-color: #428bca;">
                <input type='checkbox' name='profession' value='student'><h1>OTHER</h1>
            </div>
        </div>
       
                

            </div>
    
            <div class="col-lg-12" style='text-align: center;margin: 0 auto 0 auto;'>
            <div class="col-lg-3" style='text-align: center;margin: 0 auto 0 auto;float: none;'>
            
                <input type="submit" class="btn btn-primary btn-lg" value='Continue'>
            </div>
        </div>
    <?php echo form_close(); ?>
        </div>
    </div>
    

</section>