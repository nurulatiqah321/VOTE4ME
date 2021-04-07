<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Votes
      </h1>
      <ol class="breadcrumb">
        <li><a href="home.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Votes</li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
              <a href="#reset" data-toggle="modal" class="btn btn-danger btn-sm btn-flat"><i class="fa fa-refresh"></i> Reset</a>
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <!-- <th>Matric Number</th> -->
                  <th>Name</th>
                  <th>Candidate</th>
                </thead>
                <tbody>
                  <?php
                    $sql = "SELECT *, candidates.cname AS canname, voters.vname AS votname
                    FROM votes 
                    LEFT JOIN candidates ON candidates.id=votes.candidate_id 
                    LEFT JOIN voters ON voters.id=votes.matricno";
                    // GROUP BY votes.matricno";
                    
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          
                          <td>".$row['votname']."</td>
                          <td>".$row['canname']."</td>
                        </tr>
                      ";
                      
                    }
                    // <td>".$row['matricno']."</td>
                    // <td>".$row['canname']."</td>

                    // $sql = "SELECT *, candidates.cname AS canname, voters.vname AS votname
                    // FROM votes 
                    // LEFT JOIN positions ON positions.id=votes.position_id 
                    // LEFT JOIN candidates ON candidates.id=votes.candidate_id 
                    // LEFT JOIN voters ON voters.id=votes.matricno
                    // ORDER BY positions.priority ASC";

                    // $sql = "SELECT *, candidates.cname AS canname, voters.vname AS votname
                    // FROM votes 
                    // LEFT JOIN candidates ON candidates.id=votes.candidate_id 
                    // LEFT JOIN voters ON voters.id=votes.matricno
                    // GROUP BY votes.matricno";
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>   
  </div>
    
  <?php include 'includes/footer.php'; ?>
  <?php include 'includes/votes_modal.php'; ?>
</div>
<?php include 'includes/scripts.php'; ?>
</body>
</html>
