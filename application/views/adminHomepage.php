<!DOCTYPE html>
<html lang="en">
<head>
  <title>JPAI</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo $base."/".$bootstrapCss;?>">
  <script src="<?php echo $base."/".$jquery ?>"></script>
  <script src="<?php echo $base."/".$bootstrapJs; ?> "></script>
  <script src="<?php echo $base."/".$formValidateJs; ?> "></script>
  <link rel="stylesheet" href="<?php echo $base."/".$customeCss; ?>">
<script src="<?php echo $base."/".$datepickerJs; ?> "></script>
<link rel="stylesheet" href="<?php echo $base."/".$datepickerCss; ?>">
<link rel="stylesheet" href="<?php echo $base."/".$w3Css; ?>">
<script type="text/javascript"  src="<?php echo base_url($chartJs);?>"></script>



  <style>

  </style>

  <script>
  $(document).ready(function(){
  $('#datepicker').datepicker({
    format: 'mm-dd-yyyy'
});



$(document).on('click', '.browse', function(){
  var file = $(this).parent().parent().parent().find('.file');
  file.trigger('click');
});
$(document).on('change', '.file', function(){
  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
});




        } );




  </script>

</head>
<body>
<!--  <div class="container-fluid" style="background-color:#3E4551; color:#fff;height:200px;">
    <h1>Job Portal and Interviewing System</h1>
    <h3>Job recruitement made easy</h3>

  </div>
<nav class="navbar navbar-light">
  <div class="nav nav-justified navbar-nav">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">JPAI</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav nabar-left">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Contact</a></li>
           <li><a href="#">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

      <li>  <form class="navbar-form navbar-search" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <div class="input-group-btn">
                            <button type="button" class="btn btn-search btn-success">
                                <span class="glyphicon glyphicon-search"></span>
                                <span class="label-icon">Search</span>
                            </button>
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li>
                                    <a href="#">
                                        <span class="glyphicon glyphicon-user"></span>
                                        <span class="label-icon">Search By User</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                    <span class="glyphicon glyphicon-book"></span>
                                    <span class="label-icon">Search By Organization</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </form></li>
              </li>




      <li><p class="navbar-text navbar-right text-danger">Logged as Administrator  </p></li>
    </ul>

    </div>
  </div>
  </div>
</nav>
-->




































<div class="container-fluid" style="background-color: #00695c; color:#fff;height:200px;">

  <h1>Job Portal and Interviewing System</h1>
  <h3>Job recruitement made easy</h3>


</div>


<nav class="navbar navbar-default">
 <div class="container">
<div class="container-fluid">
  <!-- Brand and toggle get grouped for better mobile display -->
  <!-- Modal jobseeker -->
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












  <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">JPAIS</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <form class="navbar-form navbar-left">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search Job">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
    <ul class="nav navbar-nav navbar-right">

      <li class="navbar-text navbar-right text-info">Logged as <strong>Administrator</strong></li>



    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</div>
</nav>



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

<footer class="container-fluid text-center">
    <p>Copyright &copy;  COICT 2017</p>
</footer>
</body>
</html>
