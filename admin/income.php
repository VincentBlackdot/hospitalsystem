<!DOCTYPE html>
<html>
<head>
	<title> Total Income</title>
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
	 			</div>
	 			<div class="col-md-10">
	 				<h5 class="text-center my-2">Total Income</h5>

	 				<?php
                        $query = "SELECT * income";

                        $res = mysqli_query($connect,$query);

                        $output = "";

                        $output .="

                        <table class='table table-bordered'>
                        	<tr>
                        		<td>ID</td>
                        		<td>Doctor</td>
                        		<td>Patient</td>
                        		<td>Date Discharged</td>
                        		<td>Amount Paid</td>
                                <td>Discription</td>
                        	</tr>
                        ";


                     if (mysqli_num_rows($res) < 1 ) {

                        	$output .="
                                 <tr>

                                 <td class='text-center' colspan='4'>No Patient Discharged yet.<td>

                                 </tr>


                        	";
                        

                        }

                        while ($row = mysqli_fetch_array($res)) {

                        	$output .="
                        			<tr>
                        				<td>".$row['id']."</td>
                        				<td>".$row['doctor']."</td>
                        				<td>".$row['patient']."</td>
                        				<td>".$row['date_discharged']."</td>
                        				<td>".$row['amount_paid']."</td>
                                        <td>".$row['description']."</td

                        	";

                        }

                        $output .="</tr></table>";

                        echo $output;
	 				  ?>
	 				
	 			</div>
	 		</div>
	 		
	 	</div>
	 	
	 </div>

</body>
</html>