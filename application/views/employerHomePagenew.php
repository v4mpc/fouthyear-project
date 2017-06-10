
<?php include 'header.php'; ?>
<?php echo $status; ?>
<div class="container-fluid text-left">

  <div class="row content">

    <div class="col-sm-2 col-sm-offset-1">

              <div class="list-group">
               <a href="<?php echo site_url('userProfile/employerInfo/1');?>" class="list-group-item <?php echo $put_active1;?>"> <span class="glyphicon glyphicon-user"></span>  User Profile</a>
               <a href="<?php echo site_url('userProfile/showPostForm');?>" class="list-group-item <?php echo $put_active2;?>"> <span class="glyphicon glyphicon-share"></span>  Post Job</a>
               <a href="<?php echo site_url('userProfile/viewPostedJobs');?>" class="list-group-item <?php echo $put_active3;?>"> <span class="glyphicon glyphicon-th-list"></span>  Posted Jobs</a>
               <a href="<?php echo site_url('userProfile/applications');?>" class="list-group-item <?php echo $put_active5;?>"> <span class="glyphicon glyphicon-file"></span>  Applications</a>
               <a href="<?php echo site_url('userProfile/employerStatistics');?>" class="list-group-item <?php echo $put_active4;?>"> <span class="glyphicon glyphicon-dashboard"></span>  Statistics</a>


          
               <a href="<?php echo site_url('userProfile/logout');?>" class="list-group-item"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
             </div>

</div>
    <div class="col-sm-9 text-left">
      <!--<div class="panel-group">
          <div class="panel panel-default">
            <div class="panel-heading">User Info</div>
            <div class="panel-body"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p></div>
          </div>
        </div>-->
        <?php echo $employerinfos_html; ?>






  </div>
</div>
</div>

<?php include 'footer.php'; ?>
