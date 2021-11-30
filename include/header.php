<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">


    <script src="https://code.jquery.com/jquery-3.6.0.slim.js"integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY="crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
   <link rel="stylesheet"type="text/css"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.mim.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-info bg-info">
    <h5 class= "text-white">PATIENT RECORD MEDICAL SYSTEM (PRMS)</h5>

    <div class="mr-auto"></div>

    <ul class="navbar-nav">
      <?php
      
        if (isset($_SESSION['admin'])) {
            $user = $_SESSION['admin'];
            echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a>
            </li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a>
            </li>
            
            ';
        }else if(isset($_SESSION['doctor'])){


          $user = $_SESSION['doctor'];
            echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a>
            </li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a>
            </li>
            
            ';
        }else if(isset($_SESSION['patient'])){
              $user = $_SESSION['patient'];
            echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a>
            </li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a>
            </li>
            
            ';

        }else if(isset($_SESSION['nurse'])){
              $user = $_SESSION['nurse'];
            echo '
            <li class="nav-item"><a href="#" class="nav-link text-white">'.$user.'</a>
            </li>
            <li class="nav-item"><a href="logout.php" class="nav-link text-white">Logout</a>
            </li>
            
            ';


        }else{
            echo '
             <li class="nav-item"><a href="index.php" class="nav-link text-white">HOME</a>
            </li>
            <li class="nav-item"><a href="adminlogin.php" class="nav-link text-white">ADMIN</a>
            </li>
            <li class="nav-item"><a href="doctorlogin.php" class="nav-link text-white">DOCTOR</a>
            </li>
            <li class="nav-item"><a href="nurselogin.php" class="nav-link text-white">NURSE</a>
            </li>
            <li class="nav-item"><a href="patientlogin.php" class="nav-link text-white">PATIENT</a>
            </li>


            ';
        }
      
      ?>
    </ul>
    </nav>

</body>
</html>
