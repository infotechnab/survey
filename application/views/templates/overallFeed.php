<script type="text/javascript">
    $(document).ready(function() {
   
    $('.single-slider').jRange({
    from: 0,
    to: 5,
    step: 1,
    scale: [0,1,2,3,4,5],
    format: '%s',
    width: 1000,
    showLabels: true
});

 });
</script>

<style>
    .option
    {
       padding: 7px 15px; 
    }
    .value
    {
        padding: 7px 15px;
    }
    .optionval
    {
        padding: 7px 15px; font-size: 30px;
    }
</style>
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
      style="width: 90%;">
       <span class="sr-only" style="position: unset;">90% Complete</span>
   </div>
</div>
            </div>
            <div class="col-lg-4" style="text-align: right;">
                <a href='#'><i class="fa fa-chevron-circle-right" style="font-size: 35px;"> Skip </i></a>

            </div>
            </div>
            
            <div class="col-lg-12" style="text-align: center;">
                <h1>How do you evaluate our services?</h1>
            </div>
    <!--top level completed-->
    <?php echo form_open_multipart('welcome/thankYou'); ?>
            <div class="col-lg-12">
            
                <table>
                    <tr>
                        <td class='option'>
                            <h2>Sachibalaya</h2>
                        </td>
                        <td class='optionval'><span>5</span></td>
                        <td class='value'>
                             <div class='single-slider' value='5'></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'>
                            <h2>Water Supply</h2>
                        </td>
                        <td class='optionval'><span>3</span></td>
                        <td class='value'>
                             <div class='single-slider'></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'>
                            <h2>Toilet</h2>
                        </td>
                        <td class='optionval'><span>4</span></td>
                        <td class='value'>
                             <div class='single-slider'></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'>
                            <h2>Communication</h2>
                        </td>
                        <td class='optionval'><span>3</span></td>
                        <td class='value'>
                             <div class='single-slider'></div>
                        </td>
                    </tr>
                    <tr>
                        <td class='option'>
                            <h2>Security</h2>
                        </td>
                        <td class='optionval'><span>2</span></td>
                        <td class='value'>
                             <div class='single-slider'></div>
                        </td>
                    </tr>
                </table>
        
            
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

