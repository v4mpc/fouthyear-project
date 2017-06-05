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
  <script src="<?php echo $base."/".$customeJs; ?> "></script>


  <style>
  .affix {
        top: 0;
        width: 100%;
    }

    .affix + .container-fluid {
        padding-top: 70px;
    }

    body { padding-top: 0px; }


ul.nav a:hover { color:#00695c !important; }



  </style>

  <script>
  $(document).ready(function(){
    $('#datepicker').datepicker({
      format: 'mm-dd-yyyy'
    });




    	$("#add_err").css('display', 'none', 'important');
    	 $("#login").click(function(){
    		  username=$("#name").val();
    		  password=$("#word").val();
    		  $.ajax({
    		   type: "POST",
    		   url: "<?php echo site_url('userProfile/login');?>",
    			data: "name="+username+"&pwd="+password,
    		   success: function(html){
    			if(html=='true')    {
    			 //$("#add_err").html("right username or password");
    			 window.location="<?php echo site_url('userProfile/jobseekerInfo');?>";
    			}
    			else    {
    			$("#add_err").css('display', 'inline', 'important');
    			 $("#add_err").html("<img src='images/alert.png' />Wrong username or password");
    			}
    		   }
    		   }
    		  });
    		return false;
    	});














  } );







  </script>






</head>
<body>


  <div class="container-fluid" style="background-color: #00695c; color:#fff;height:200px;">

    <h1 id="h1">Job Portal and Interviewing System</h1>
    <h3>Job recruitement made easy</h3>


</div>


<nav class="navbar navbar-default">
   <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display-->
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
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo site_url('/home/');?>">Home</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#myModal">Job Seeker</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal1">Employer</a></li>

          </ul>
        </li>
          <li><a href="<?php echo site_url('/home/aboutPage');?>">About</a></li>
            <li><a href="<?php echo site_url('home/contactPage');?>">Contact</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search Job">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">

          <li><a data-toggle="modal" data-target="#myModal2" href="<?php //echo "home/login"; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>




<!-- Modal login -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content login-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title" style="color=#00695c">Login</h4>

      </div>
      <div class="modal-body">



        <form id="signupForm2" method="post" class="form-horizontal" action="<?php echo site_url('/home/login');?>">






          <div class="form-group">
            <label class="col-sm-4 control-label" for="username">Username</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="name" name="username" placeholder="username" />
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label" for="password">password</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" id="word" name="password" placeholder="password" />
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-9 col-sm-offset-4">
              <button type="submit" id="login" class="btn btn-primary" name="login" value="login">Login</button>
            </div>

          <div class="err" id="add_err"></div>

          </div>
        </form>












      </div>





    </div>















  </div>
</div>




























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








<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-lg-2 sidenav">
    </div>
    <div class="col-md-8">
      <div class="col-sm-8 text-left">
        <h2>Job Posts</h2>
<?php ///echo $jobPost_html; ?>



<?php foreach ($jobPosts as $jobPost) {
$companyname=$jobPost->companyName;

$regione=$jobPost->regionE;
$districte=$jobPost->districtE;
$companylogo=$jobPost->logo;
$cwebsite=$jobPost->website;
$csize=$jobPost->size;
$industry=$jobPost->industryType;
$crevenue=$jobPost->revenue;
$cfounded=$jobPost->founded;
$jobtitle=$jobPost->jobTitle;
$jdiscription=$jobPost->discription;
$postdate=$jobPost->postDate;
$jsalary=$jobPost->salary;

$interview=$jobPost->onlineInterview;
?><div class="panel panel-default">
<div class="panel-body"><h2><?php echo $jobtitle?></h2>
  <div class="media">
    <div class="media-left media-top">
      <img src="<?php echo $base.'/'.$companylogo;?>" class="media-object" style="width:80px">
    </div>
    <div class="media-body">
      <h4 class="media-heading"><?php echo $companyname;?><small> -<?php echo $regione;?>, <?php echo $districte?></small></h4>
      <h4><small><i>posted <?php echo $postdate;?></i></small></h4>
    </div>
  </div>
  <div id="discription">
    <h4><b>Description</b></h4><hr>
    <?php echo $jdiscription;?>
  </div><br>
  <div class="row">
    <div class="col-sm-6">
      <h5><b>Estimated salary: </b><?php echo $jsalary;?> Tshs</h5>
    </div>

    <div class="col-sm-6">
      <h5 ><b>Online interview: </b><span class="text-info"><?php echo $interview;?></span></h5>
    </div>

  </div><br>
  <h4><b>Company Information</b></h4><hr>
  <div class="row">
    <div class="col-sm-6">
      <h5><b>Website: </b><a href=""><?php echo $cwebsite; ?></a></h5>
    </div>
    <div class="col-sm-6">
      <h5><b>Headquaters: </b><?php echo $regione?>, <?php echo $districte;?></h5>
    </div>

  </div>

  <div class="row">
    <div class="col-sm-6">
      <h5><b>Size: </b><?php  echo $csize;?> employees</h5>
    </div>
    <div class="col-sm-6">
      <h5><b>Revenue: </b><?php echo $crevenue;?> Millions Tshs per year</h5>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6">
      <h5><b>Industry: </b><?php echo $industry;?></h5>
    </div>
    <div class="col-sm-6">
      <h5><b>Founded: </b><?php echo $cfounded;?></h5>
      </div>
      </div>

      <hr>
      <div class="row">
      <div class="col-sm-2 col-sm-offset-8">
        <button type="button" class="btn btn-primary disabled" name="save" value="save"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
      </div>

      <div class="col-sm-2">
        <button type="button"  class="btn btn-primary disabled" name="apply" value="apply" ><span class="glyphicon glyphicon-play"></span> Apply</button>
      </div>
      </div>


      </div></div>







<?php } ?>





<?php echo $this->pagination->create_links(); ?>










      </div>
    </div>


    <div class="col-sm-2 sidenav">

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright &copy;  COICT 2017</p>
</footer>

</body>
</html>
