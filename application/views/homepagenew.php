

<?php include 'header.php'; ?>

<?php echo $statusHtml; ?>


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
          <label for="gender" class="col-sm-4 control-label">Gender</label>
            <div class="col-sm-8 " role="group">
            <label class="radio-inline"><input type="radio" value="M" name="gender">Male</label>
            <label class="radio-inline"><input type="radio" value="F" name="gender">Female</label>
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
            <label class="col-sm-4 control-label" for="fieldofstudy">Field of Study</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="fieldofstudy" name="fieldOfStudy" placeholder="e.g computer engineering" />
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
              <input type="text" class="form-control" value="02-16-2012" id="datepicker" name="DOB" placeholder="month-day-year">
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
        fieldofstudy: "required",
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
      fieldofstudy: "Please enter your Field Of Study",
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
        <form id="signupForm" method="post" class="form-horizontal" action="<?php echo site_url('/home/register_employer');?>">
          <div class="form-group">
            <label class="col-sm-4 control-label" for="company name">Company name</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company name" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="size">Size</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="size" name="size" placeholder="comapany size" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="company name">Website</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="website" name="website" placeholder="website" />
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label" for="Founded">Founded</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="founded" name="founded" placeholder="Year Founded" />
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
      size: "required",
      founded: "required",
      website: "required",
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
      size: "Please enter your Company size",
      website: "Please enter your Company website",
      found: "Please enter your Company Founded Year",
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
<!-- Container (Pricing Section) -->
<div id="" class="container-fluid">
  <div class="text-center">
    <h2>Features</h2>
    <h4>Here is what the system can do</h4>
  </div>
  <div class="row">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Search Jobs</h1>
        </div>
        <div class="panel-body">
          <p>Search jobs and filter according to</p>
          <p>Date posted</p>
          <p>Region posted</p>
          <p>Gender </p>

        </div>
        <div class="panel-footer">

          <h4>More than</h4>
          <h3>100 Jobs</h3>
          <h4>available</h4>

        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Recruitment</h1>
        </div>
        <div class="panel-body">
          <p>Get employees based on</p>
          <p>Age</p>
          <p>Gender</p>
          <p>CV</p>
        </div>
        <div class="panel-footer">
          <h4>More than</h4>
          <h3>50 Recruiters</h3>
          <h4>available</h4>

        </div>
      </div>
    </div>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Interview</h1>
        </div>
        <div class="panel-body">
          <p>Perform first level interview</p>
          <p>Reduce the number of interviewees to half</p>
          <p>Perform interview at your own space and time</p>
          <p>Reduce Cost for both parties</p>

        </div>
        <div class="panel-footer">
          <h4>More than</h4>
          <h3>100 Interviews</h3>
          <h4>simultaneously</h4>

        </div>
      </div>
    </div>
  </div>
</div>



<div id="" class="container-fluid text-center bg-grey">

  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <h4>"This company is the best. I am so happy with the result!"<br><span>Michael Roe, Vice President, Comment Box</span></h4>
      </div>
      <div class="item">
        <h4>"One word... WOW!!"<br><span>John Doe, Salesman, Rep Inc</span></h4>
      </div>
      <div class="item">
        <h4>"Could I... BE any more happy with this company?"<br><span>Chandler Bing, Actor, FriendsAlot</span></h4>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>










<?php include 'footer.php'; ?>
