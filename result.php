<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div>

  <?php include 'includes/navbar.php'; ?> 
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        RESULT
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Result</li>
      </ol>
    </section>

    <!-- Main content -->
	      <section class="content">
	      	<?php
	      		$parse = parse_ini_file('admin/config.ini', FALSE, INI_SCANNER_RAW);
    			$title = $parse['election_title'];
	      	?>
	      	<h1 class="page-header text-center title"><b><?php echo strtoupper($title); ?></b></h1>
	        <div class="row">
	        	<div class="col-sm-10 col-sm-offset-1">
	        		<?php
				        if(isset($_SESSION['error'])){
				        	?>
				        	<div class="alert alert-danger alert-dismissible">
				        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					        	<ul>
					        		<?php
					        			foreach($_SESSION['error'] as $error){
					        				echo "
					        					<li>".$error."</li>
					        				";
					        			}
					        		?>
					        	</ul>
					        </div>
				        	<?php
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
 
				    <div class="alert alert-danger alert-dismissible" id="alert" style="display:none;">
		        		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			        	<span class="message"></span>
			        </div>

			    			<!-- Result Table -->
							<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header with-border">
            </div>
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th class="hidden"></th>
                  <!-- <th>Matric Number</th> -->
                  <th>Candidate</th>
                  <th>Total Result</th>
                </thead>
                <tbody>
                  <?php
                    $connect = mysqli_connect("localhost", "root", "", "vote4me");		
		    		$sql = "SELECT c.cname, COUNT(v.candidate_id) AS total
			     			FROM candidates c
			     			JOIN votes v ON c.id = v.candidate_id
			    			WHERE  c.position_id = 
			     			GROUP BY c.id
			     			ORDER BY total DESC
			     			LIMIT 1";
			     	$result = mysqli_query($connect, $sql);
                    
                    while($row = mysqli_fetch_array($result)){
                      echo "
                        <tr>
                          <td class='hidden'></td>
                          
                          <td>".strtoupper($row['cname'])."</td>
                          <td>".$row['total']."</td>
                        </tr>
                      ";
                      
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
				        	<!-- Result Table -->
							<?php

				    ?>
	        </div>
	      </section>
      <!-- right col -->
    </div>
  	<?php include 'includes/footer.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>

</body>
</html>
