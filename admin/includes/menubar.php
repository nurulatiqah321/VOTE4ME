<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <!-- <div class="user-panel">
      <div class="pull-left image">
        <img src="../images/icon.png" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p style="text-transform: uppercase;">< ?php echo $user['firstname'].' '.$user['lastname']; ?></p>
        <p style="font-size:12px;">< ?php echo $user['email']; ?></p>
        <a><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div> -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">REPORTS</li> 
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="votes.php"><i class="fa fa-cube"></i> <span>Votes</span></a></li>
      <li class="header">SETTINGS</li>
      <li class=""><a href="electionlist.php"><i class="fa fa-hashtag"></i> <span>Election List</span></a></li>
      <li class=""><a href="#config" data-toggle="modal"><i class="fa fa-cog"></i> <span>Election Title</span></a></li>
      <li class=""><a href="ballot.php"><i class="fa fa-file-text"></i> <span>Ballot Position</span></a></li>
      <li class="header">MANAGE</li>
      <?php 
         
          $query = "SELECT * FROM admin WHERE id = '".$_SESSION['admin']."'";
          $results = mysqli_query($conn, $query);
      
            $logged_in_user = mysqli_fetch_assoc($results);
            if ($logged_in_user['roles'] == "Super Admin") {
              
         ?>
          <li class=""><a href="admin.php"><i class="fa fa-users"></i> <span>Admin</span></a></li>
          <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span></a></li>
          <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions</span></a></li>
          <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates</span></a></li>

      <?php }else{ ?>
          <li class=""><a href="voters.php"><i class="fa fa-users"></i> <span>Voters</span></a></li>
          <li class=""><a href="positions.php"><i class="fa fa-tasks"></i> <span>Positions</span></a></li>
          <li class=""><a href="candidates.php"><i class="fa fa-black-tie"></i> <span>Candidates</span></a></li>
      <?php }; ?>
      
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>