<?php
include("include/header.php");
session_start();

include("include/connection.php"); 


if (isset($_POST['login'])) {

        $username = $_POST['uname'];
        $password = $_POST['pass'];

        $error = array();
        
        if (empty($username)) {
            $error['admin'] = "Enter username";
        }else if(empty($password)){
            $error['admin'] = "Enter password";
        }

        if (count($error)==0) {

            $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";

            $result = mysqli_query($connect,$query);


            if (mysqli_num_rows($result) == 1) {

                echo "<script>alert('You Have Loged in as an admin')</script>";
                $_SESSION['admin'] = $username;
                
                 header("Location:admin/index.php");
                 exit(); 
            }else{
                echo "<script>alert('Invalid Username Or Password')</script>";
            }
        }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login Page</title>
</head>
<body style="background-image: url(img/hospitalbg.jpg); background-repeat: no-repeat; background-size: cover;">

<?php


?>
<div style="margin-top:60px"></div>
<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 jumbotron">
            <img src="img/adlog.jpg" class="col-md-12">
                <form method="post" class="my-2">


                       <div>
                           
                              <?php
                        
                        if (isset($error['admin'])) {

                            $sh  = $error['admin'];

                            $show ="<h4 class='alert alert-danger'>$sh</h4>";

                            //echo $show;//

                        }else{
                            $show ="";
                        }
                        echo $show;
                        ?>

                       </div>
                      
                    <div class="form-group">
                        <lable>Username</lable>
                        <input type="text"name="uname" class="form-control" autocomplete="off" placeholder="Enter Username" ></input>
                    </div>
                <div class="form-group">
                    <lable>password</lable>
                    <input type="password" name="pass" class="form-contol">
                
                </div>
                <input type="submit" name="login" class="btn btn-success"
                value="Login">
                </form>
            
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</div>

</body>
</html>