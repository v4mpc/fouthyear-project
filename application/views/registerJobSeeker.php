<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register Jobseeker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo $base."/".$bootstrapCss;?>">
  <script src="<?php echo $base."/".$jquery ?>"></script>
  <script src="<?php echo $base."/".$bootstrapJs; ?> "></script>
  <link rel="stylesheet" href="<?php echo $base."/".$customeCss; ?>">

  <script src="<?php echo $base."/".$datepickerJs; ?> "></script>
  <link rel="stylesheet" href="<?php echo $base."/".$datepickerCss;?>">  
  <script>
  $(document).ready(function(){
  $('#datepicker').datepicker({
    format: 'mm-dd-yyyy'
});
  
  //select handler
  
 $("#district_trigger").change(function(){
 
 
 
 //alert("hello");
 
     
    var str=$( "select option:selected" ).text();
   
 alert(str);
 
 
 });


  
  
  
  
  
  
  
  });
  
  </script>
  
  <style>
  
  </style>

<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Register Jobseeker</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form">
                                    
                            <div class="form-group">
                                    <label for="firstName" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstName" placeholder="First Name" required>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="SecondName" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="SecondName" placeholder="Second Name">
                                    </div>
                                 </div>
                                
                                <div class="form-group">
                                    <label for="userName" class="col-md-3 control-label">User name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="userName" placeholder="User Name">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="Email" class="col-md-3 control-label">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="region" class="col-md-3 control-label">Region</label>
                                    <div class="col-md-9">
                                        <select class="form-control" id="district_trigger">
                                        	
                                        	<?php echo $region_html ?>;
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="district" class="col-md-3 control-label">Disctirct</label>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                        	<?php echo $district_html ?>;
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="DOB" class="col-md-3 control-label">Date of Birth</label>
                                    <div class="col-md-9">
                                        <input type="text" value="02-16-2012" id="datepicker" name="DOB" placeholder="month-day-year">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="region" class="col-md-3 control-label">Security Question</label>
                                    <div class="col-md-9">
                                        <select class="form-control">
                                        	 <option value="" selected>Select your option</option>
                                        	<?php echo $question_html ?>;
                                        </select>
                                    </div>
                                </div>
                                    
                                    <div class="form-group">
                                    <label for="SecondName" class="col-md-3 control-label">Security Answer</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="SecurityAnswer" placeholder="Answer to Securiy Question">
                                    </div>                
                           </div>
                                
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                        <input type="Password" class="form-control" name="password" placeholder="Password">
                                    </div>
                                </div>
                          
                                
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="password" placeholder="Re enter password Password">
                                    </div>
                                </div>
                                    

                                
                            


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <a id="btn-login" href="#" class="btn btn-success">Register </a>
                                      

                                    </div>
                                </div>


                                
               
                
         </div> 
    </div>
    
