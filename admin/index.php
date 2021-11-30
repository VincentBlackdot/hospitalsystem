<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
</head>
<body>

    <?php
      include("../include/header.php");
      include("../include/connection.php");
    ?>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-2" style="margin-left: -30px;">

              <?php

              include("sidenav.php");
              ?>  
<!----------begining of data table in the dashbod-->
            </div>
             <div class="col-md-10">
                <h4 class="my-2">Admin Dashboard</h4>
                 
                 <div class="col-md-12 my-1">
                    <div class="row">
                    <div class="col-md-3 bg-success mx-2" style="height: 130px;">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                    <!-----php code to count the total number of the admin/doctors and other---> 
                                    <?php
                                       $ad = mysqli_query($connect, "SELECT * FROM admin");
                                       $num = mysqli_num_rows($ad);
                                    ?>                                                       <!--also down here-->
                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Admin</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="admin.php"><i class="fa  fa-users-cog fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                            
                     </div>
              <!-----------BAR FOR  TOTAL DOCTORES------>
                        <div class="col-md-3 bg-info mx-2" style="height: 130px;">

                          <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">
                                      
                                       <?php
                                       $ad = mysqli_query($connect, "SELECT * FROM admin");
                                       $num = mysqli_num_rows($ad);
                                    ?>  

                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Doctors</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="admin.php"><i class="fa  fa-user-md fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                          
                            
                        </div>
                <!----------END HERE------>

                <!------BAR FOR PATIENTS   BEGINS------->
                        <div class="col-md-3 bg-warning mx-2" style="height: 130px;">
                              <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">

                                       <?php
                                       $p = mysqli_query($connect, "SELECT * FROM patient");
                                       $pp = mysqli_num_rows($p);
                                    ?>  

                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $pp; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Patients</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="patient.php"><i class="fa  fa-procedures fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        </div> 
                <!----------ENDS HERE-------->


                 <!-----BAR FOR REPORTS BEGINS ---------->
                        <div class="col-md-3 bg-danger mx-2 my-2" style="height: 130px;">
                             <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">


                                      <?php
                                       $re = mysqli_query($connect, "SELECT * FROM report");
                                       $rep = mysqli_num_rows($re);
                                    ?>  

                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $rep; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Reports</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="report.php"><i class="fa  fa-file-pdf fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        </div>
                  <!------ENDS HERE------>

                  <!------BAR FOR APPOINTMENTS BEGIS---------->
  

                        <div class="col-md-3 bg-warning mx-2 my-2" style="height: 130px;">
                             <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">

                                      <?php
                                       $ad = mysqli_query($connect, "SELECT * FROM admin");
                                       $num = mysqli_num_rows($ad);
                                    ?>  

                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $num; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Appointments</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="admin.php"><i class="fa  fa-pen-alt fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        </div>
                   <!--------ENDS HERE------>


                   <!------BAR FOR INCOMES BEGINS------->
                        <div class="col-md-3 bg-success mx-2 my-2" style="height: 130px;">
                             <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-8">

                                      <?php
                                       $in = mysqli_query($connect, "SELECT sum(amount_paid) as profit FROM income");

                                       $row = mysqli_fetch_array($in);

                                       $inc = $row['profit'];
                                    ?>  

                                    <h5 class="my-2 text-white" style="font-size: 30px;"><?php echo $inc; ?></h5>
                                    <h5 class="my-2 text-white">Total</h5>
                                    <h5 class="my-2 text-white">Income</h5>
                                </div>
                                <div class="col-md-3">
                                        <a href="income.php"><i class="fa  fa-money-check-alt fa-3x my-4" style="color: white;"></i>
                                    </a>

                                    
                                </div>
                                
                            </div>
                            
                        </div>
                        </div>

                    <!-------ENDS HERE------>
                    <!----------END of data table in the dashbod-->


                    </div>
                     
                 </div>

             </div>
        </div>
    </div>
</div>
</body>
</html>

    
