<?php include 'header.php'; ?>
<?php echo $status; ?>
<div class="container-fluid text-left">
  <div class="row content">
    <div class="col-sm-2 col-sm-offset-1">
              <div class="list-group">
                 <a href="<?php echo site_url('userProfile/getSeekerJobPost');?>" class="list-group-item  <?php echo $put_active4;?>"> <span class="glyphicon glyphicon-th-list"></span> Job Posts</a>
               <a href="<?php echo site_url('userProfile/jobseekerInfo/1');?>" class="list-group-item <?php echo $put_active1;?>"> <span class="glyphicon glyphicon-user"></span>  User Profile</a>
               <a href="<?php echo site_url('userProfile/appliedJobs');?>" class="list-group-item <?php echo $put_active3;?>"> <span class="glyphicon glyphicon-play"></span>  Applied Jobs</a>

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

<?php include 'footer.php'; ?>
