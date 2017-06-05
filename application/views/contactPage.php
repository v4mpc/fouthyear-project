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


  </script>






</head>
<body>


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
      <ul class="nav navbar-nav">
        <li ><a href="<?php echo site_url('/home/');?>">Home <span class="sr-only">(current)</span></a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Register <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#" data-toggle="modal" data-target="#myModal">Job Seeker</a></li>
            <li><a href="#" data-toggle="modal" data-target="#myModal1">Employer</a></li>

          </ul>
        </li>
          <li><a href="<?php echo site_url('/home/aboutPage');?>">About</a></li>
            <li class="active"><a href="<?php echo site_url('/home/contactPage');?>">Contact</a></li>
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




<!--content-->
<div class="container-fluid text-center">
  <div class="row content">

      <div class="col-sm-5 col-sm-offset-3 text-left">
        <div class="panel panel-default">
          <div class="panel-heading"><h4>Contact Us</h4></div>

      <div class="panel-body">
        <p><span class="glyphicon glyphicon-envelope"></span> Email: yona101992@gmail.com</p>
        <p><span class="glyphicon glyphicon-phone-alt"></span> Phone: +255719944100</p>
        <p><span class="glyphicon glyphicon-globe"></span> Location: COICT@Kijitonyama</p>


      </div>
    </div>















  </div>
</div>
</div>

<footer class="container-fluid text-center">
  <p>Copyright &copy;  COICT 2017</p>
</footer>

</body>
</html>
