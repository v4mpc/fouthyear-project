
<?php include 'header.php'; ?>


































<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content jobseeker-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register Jobseeker</h4>
      </div>
      <div class="modal-body">
        <form id="signupForm1" method="post" class="form-horizontal" action="<?php echo site_url('/home/register_seeker');?>">
          <div class="form-group">
            <label class="col-sm-4 control-label" for="firstname">First name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First name" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="lastname1">Last name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last name" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="userName">Username</label>
            <div class="col-sm-5">

          <input type="text" class="form-control" class="username" onblur="myFunction()" name="userName" placeholder="Username" />
          <p id="d">
          </p>
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="email">Email</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="email" name="email" placeholder="Email" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="password">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="confirm_password">Confirm password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="district">Region</label>
            <div class="col-sm-5">
              <select class="form-control" id="" name="region">
                <option value="" selected disabled="">Select your region</option>
                <?php echo $region_html; ?>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-4 control-label" for="district">District</label>
            <div class="col-sm-5">
              <select class="form-control" id="" name="district">
                <option value="" selected disabled="">Select your district</option>
                <?php echo $district_html; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="DOB" class="col-sm-4 control-label">Date of Birth</label>
            <div class="col-md-5">
              <input type="text" value="02-16-2012" id="datepicker" name="DOB" placeholder="month-day-year">
            </div>
          </div>

          <div class="form-group">
            <label for="securot question" class="col-sm-4 control-label">Security Question</label>
            <div class="col-sm-6">
              <select class="form-control" name="securityQuestion">
                <option value="" selected disabled="">Select your security question</option>
                <?php echo $question_html; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="security answer" class="col-sm-4 control-label">Security Answer</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="securityAnswer" placeholder="Answer to Securiy Question">
            </div>
          </div>



          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-4">
              <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
/*$.validator.setDefaults( {
submitHandler: function () {
alert( "submitted!" );
}
} );*/

$( document ).ready( function () {

  $( "#signupForm1" ).validate( {
    rules: {
      firstName: "required",
      lastName: "required",
      userNdsfame: {
        required: true,
        minlength: 2
      },
      password: {
        required: true,
        minlength: 5
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: "#password"
      },
      email: {
        required: true,
        email: true
      },
      agree1: "required"
    },
    messages: {
      firstName: "Please enter your firstname",
      lastName: "Please enter your lastname",
      userName: {
        required: "Please enter a username",
        minlength: "Your username must consist of at least 2 characters"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      confirm_password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        equalTo: "Please enter the same password as above"
      },
      email: "Please enter a valid email address",
      agree1: "Please accept our policy"
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );

      // Add `has-feedback` class to the parent div.form-group
      // in order to add icons to inputs
      element.parents( ".col-sm-5" ).addClass( "has-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }

      // Add the span element, if doesn't exists, and apply the icon classes to it.
      if ( !element.next( "span" )[ 0 ] ) {
        $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
      }
    },
    success: function ( label, element ) {
      // Add the span element, if doesn't exists, and apply the icon classes to it.
      if ( !$( element ).next( "span" )[ 0 ] ) {
        $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
      $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
    },
    unhighlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
      $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
    }
  } );
} );
</script>

<!-- Modal employer -->
<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content employer-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register Employer</h4>
      </div>
      <div class="modal-body">
        <form id="signupForm" method="post" class="form-horizontal" action="home/register_employer">
          <div class="form-group">
            <label class="col-sm-4 control-label" for="company name">Company name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company name" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="username">username</label>
            <div class="col-sm-5" >
              <input type="text" class="form-control" onblur="myFunction()" class="username" name="userNameE" placeholder="username"/>
              <p id="d">
              </p>
<script type="text/javascript">


function myFunction() {
  var username=$("#username").val();

 $.post("<?php echo site_url('home/checkUsername');?>", {username:username},function(data){

    if(data=="taken"){




  //alert("taken");
       $("#d").html("<b class=\"text-danger\">Username already Taken</b>");


    }else {
  $("#d").html("<b class=\"text-info\">Username available</b>");
//alert("nottaken");
}

});




}











</script>




            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="emailE">Email</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="emailE" name="emailE" placeholder="Email" />
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-4 control-label" for="password">Password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="passwordE" name="passwordE" placeholder="Password" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="confirm_password">Confirm password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="confirm_passwordE" name="confirm_passwordE" placeholder="Confirm password" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="region">Region</label>
            <div class="col-sm-5">
              <select class="form-control" id="" name="regionE">
                <option value="" selected disabled="">Select your region</option>
                <?php echo $region_html; ?>
              </select>
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-4 control-label" for="district">District</label>
            <div class="col-sm-5">
              <select class="form-control" id="" name="districtE">
                <option value="" selected disabled="">Select your district</option>
                <?php echo $district_html; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="securot question" class="col-sm-4 control-label">Security Question</label>
            <div class="col-sm-6">
              <select class="form-control" name="securityQuestionE">
                <option value="" selected disabled="">Select your security question</option>
                <?php echo $question_html; ?>
              </select>
            </div>
          </div>

          <div class="form-group">
            <label for="security answer" class="col-sm-4 control-label">Security Answer</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="securityAnswerE" placeholder="Answer to Securiy Question">
            </div>
          </div>



          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-4">
              <button type="submit" class="btn btn-primary" name="signup1" value="Sign up">Sign up</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
/*$.validator.setDefaults( {
submitHandler: function () {
alert( "submitted!" );
}
} );*/

$( document ).ready( function () {

  $( "#signupForm" ).validate( {
    rules: {
      companyName: "required",
      lastName: "required",
      userNadfeE: {
        required: true,
        minlength: 2,

      },
      passwordE: {
        required: true,
        minlength: 5
      },
      confirm_passwordE: {
        required: true,
        minlength: 5,
        equalTo: "#passwordE"
      },
      emailE: {
        required: true,
        email: true
      },
      agree1: "required"
    },
    messages: {
      companyName: "Please enter your Company Name",
      lastName: "Please enter your lastname",
      userName: {
        required: "Please enter a username",
        minlength: "Your username must consist of at least 2 characters"
      },
      passwordE: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      confirm_passwordE: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long",
        equalTo: "Please enter the same password as above"
      },
      emailE: "Please enter a valid email address",
      agree1: "Please accept our policy"
    },
    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `help-block` class to the error element
      error.addClass( "help-block" );

      // Add `has-feedback` class to the parent div.form-group
      // in order to add icons to inputs
      element.parents( ".col-sm-5" ).addClass( "has-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.parent( "label" ) );
      } else {
        error.insertAfter( element );
      }

      // Add the span element, if doesn't exists, and apply the icon classes to it.
      if ( !element.next( "span" )[ 0 ] ) {
        $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
      }
    },
    success: function ( label, element ) {
      // Add the span element, if doesn't exists, and apply the icon classes to it.
      if ( !$( element ).next( "span" )[ 0 ] ) {
        $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
      $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
    },
    unhighlight: function ( element, errorClass, validClass ) {
      $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
      $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
    }
  } );
} );
</script>
















<div class="container-fluid text-left">
<div class="row content">
  <div class="col-sm-2 col-sm-offset-1">
            <div class="list-group">
               <a href="<?php echo site_url('userProfile/adminStatistics');?>" class="list-group-item <?php echo $put_active1;?> "> <span class="glyphicon glyphicon-stats"></span> Statistics</a>
             <a href="<?php echo site_url('userProfile/editEmployer');?>" class="list-group-item <?php echo $put_active2;?>"> <span class="glyphicon glyphicon-user"></span>  Employers</a>
<a href="<?php echo site_url('userProfile/editJobseeker');?>" class="list-group-item <?php echo $put_active3;?>"> <span class="glyphicon glyphicon-user"></span>  Job Seekers</a>
             <a href="<?php echo site_url('userProfile/editPostedJobs');?>" class="list-group-item"> <span class="glyphicon glyphicon-th-list<?php echo $put_active4;?>"></span> Posted Jobs</a>


              <a href="<?php echo site_url('userProfile/locationForm');?>" class="list-group-item <?php echo $put_active5;?>"><span class="glyphicon glyphicon-plus"></span>   Add New Job location</a>

<a href="<?php echo site_url('userProfile/showLogins');?>" class="list-group-item <?php echo $put_active6;?>"><span class="glyphicon glyphicon-folder-open"></span>   Login Report</a>
<a href="#" class="list-group-item"><span class="glyphicon glyphicon-cog"></span>   Settings</a>
             <a href="<?php echo site_url('userProfile/logout');?>" class="list-group-item"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
           </div>
           <script type="text/javascript">
          /* $('.list-group a').click(function(e) {
             $('.list-group a.active').removeClass('active');
              var $this = $(this);
                if (!$this.hasClass('active')) {
                    $this.addClass('active');
                    }
                      e.preventDefault();*/
});
           </script>
</div>
  <div class="col-sm-6 text-left">
    <!--<div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">User Info</div>
          <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
        </div>
      </div>-->
      <?php echo $adminHtml; ?>

</div>
</div>
</div>











<?php include 'footer.php'; ?>
