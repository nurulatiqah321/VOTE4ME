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
      <li class="header">MENU</li> 
      <li class=""><a href="home.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class=""><a href="castvote.php"><i class="fa fa-cube"></i> <span>Vote</span></a></li>
      <!-- <li class=""><a href="#"><i class="fa fa-cube"></i> <span>Result</span></a></li> -->

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<?php include 'config_modal.php'; ?>