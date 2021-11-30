<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Doctor's Dashboard</title>
</head>
<body>
      
      <?php
      include("../include/header.php");
      include("../include/connection.php");
      ?>
      <div class="container-fluid">
      		
      	<div class="col-md-12">
      		<div class="row">
      			<div class="col-md-2" style="margin-left: -30px">
      				<?php
                         include("sidenav.php");
      				?>
      				
      			</div>
      			
      			<div class="col-md-10">

      				<div class="com-md-12">
      					<div class="row">
      						<div class="col-md-3 my-2 bg-info mx-2" style="height: 150px;">

      							<div class="col-md-12">
      								<div class="row">
      									<div class="col-md-8">
      										<h5 class="text-white my-4"> My Profile</h5>
      										
      									</div>
      									<div class="col-md-4">
      										<a href="profile.php"><i class="fa fa-user-circle fa-3x my-4" style="color: white;"></i></a>

      										
      									</div>
      									
      								</div>
      								
      							</div>
      							
      						</div>
      							<div class="col-md-3 my-2 bg-warning mx-2" style="height: 150px;">

      							<div class="col-md-12">
      								<div class="row">
      									<div class="col-md-8">

                                                                  <?php 

                                                                     $p = mysqli_query($connect, "SELECT * FROM patient");
                                                                     $pp = mysqli_num_rows($p);
                                                                   ?>
      										<h5 class="text-white my-2"style="font-size: 30px;"><?php echo $pp; ?></h5>
      										<h5 class="text-white">Total</h5>
      										<h5 class="text-white">Patient</h5>
      										
      									</div>
      									<div class="col-md-4">
      										<a href="patient.php"><i class="fa fa-procedures fa-3x my-4" style="color: white;"></i></a>

      										
      									</div>
      									
      								</div>
      								
      							</div>
      							
      						</div>
      							<div class="col-md-3 my-2 bg-success mx-2" style="height: 150px;">

      							<div class="col-md-12">
      								<div class="row">
      									<div class="col-md-8">
                                                                <?php

                                                                    $app = mysqli_query($connect,"SELECT * FROM appointment WHERE status='pendding' "); 

                                                                    $appoint = mysqli_num_rows($app);

                                                                  ?>

      										<h5 class="text-white my-2"style="font-size: 30px;"><?php echo $appoint; ?></h5>
      										<h5 class="text-white">Total</h5>
      										<h5 class="text-white">Appointments</h5>
      										
      									</div>
      									<div class="col-md-4">
      										<a href="appointment.php"><i class="fa fa-calendar fa-3x my-4" style="color: white;"></i></a>
                                                             


      									</div>


                                                           									
      								</div>
      								       
      							</div>
      							
      						</div>
      					</div>
      					
                       
      				</div>
      				
                        <!-- (A) SEARCH FORM -->
    <form method="post" action="1-form.php">
      <h3>SEARCH FOR USERS</h3>
      <input type="text" name="search" required/>
      <input type="submit"class="btn btn-info my-2" value="Search"/>
    </form>

    <?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    if (isset($_POST['search'])) {
      // (B1) SEARCH FOR USERS
      require "2-search.php";
      
      // (B2) DISPLAY RESULTS
      if (count($results) > 0) {
        foreach ($results as $r) {
          printf("<div>%s - %s</div>", $r['fname'], $r['email']);
        }
      } else { echo "No results found"; }
    }


// (C) SEARCH
$stmt = $pdo->prepare("SELECT * FROM `patient` WHERE `fname` LIKE ? OR `email` LIKE ?");
$stmt->execute(["%".$_POST['search']."%", "%".$_POST['search']."%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }




    ?>
      			</div>



      			
      		</div>
      		
      	</div>
      	
      </div>
</body>
</html>