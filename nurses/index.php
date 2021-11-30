<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>PRMS Home Page</title>
</head>
<body>
    <?php 
 include("../include/header.php");
 include("../include/connection.php");
?>

<div style="margin-top: 50px" ></div>
<br>
<h5 class="text-center"> NURSES BAY</h5>
 <div class="container">
    <div class="col-mid-12">
        <div class="row">
        <div class="col-md-3 mx-1 shadow">
              <img src="img/morein.jpg" style="width:100%; height: 190px;">
              <h5 class="text-center">time and date allocation for nurses</h5>
        <a href="nursedutytable.php">
            <button class="btn btn-success my-3" style="margin-left: 20%;" >Shift Time Table</button>
        </a>
        </div>
        
      

        <div class="col-md-4 mx-1 shadow">
        <img src="img/blackdoc.jpg" style="width:100%;">
        <h5 class="text-center"> Doctors working duty</h5>
        <a href="#">
            <button class="btn btn-success my-3" style="margin-left: 30%;" >Signup Now!!</button>
        </a>
        </div>

        </div> 
    </div>
</div>  

</body>
</html>