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




      <li><p class="navbar-text navbar-right text-danger">Logged in: <?php echo $_SESSION['username']; ?>  </p></li>
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

      <li class="navbar-text navbar-right text-info">Logged as <?php echo $_SESSION['username']; ?> </li>



    </ul>
  </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</div>
</nav>



<div class="container-fluid text-left">
  <div class="row content">
    <div class="col-sm-2 col-sm-offset-1">
              <div class="list-group">
                 <a href="<? echo site_url('userProfile/getSeekerJobPost');?>" class="list-group-item  <?php echo $put_active4;?>"> <span class="glyphicon glyphicon-th-list"></span> Job Posts</a>
               <a href="<? echo site_url('userProfile/jobseekerInfo');?>" class="list-group-item <?php echo $put_active1;?>"> <span class="glyphicon glyphicon-user"></span>  User Profile</a>
               <a href="<? echo site_url('userProfile/appliedJobs');?>" class="list-group-item <?php echo $put_active3;?>"> <span class="glyphicon glyphicon-play"></span>  Applied Jobs</a>
               <a href="#" class="list-group-item"> <span class="glyphicon glyphicon-floppy-saved"></span>  Saved Jobs</a>
               <a href="#" class="list-group-item"><span class="glyphicon glyphicon-thumbs-up"></span>   Recommeded Jobs</a>
               <a href="<?php echo site_url('userProfile/myCv');?>" class="list-group-item <?php echo $put_active2;?>"> <span class="glyphicon glyphicon-list-alt"></span> My Resume</a>
                
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
        <?php echo $jobseekerinfos_html; ?>

  </div>
</div>
</div>

<footer class="container-fluid text-center">
    <p>Copyright &copy;  COICT 2017</p>
</footer>
</body>
</html>
