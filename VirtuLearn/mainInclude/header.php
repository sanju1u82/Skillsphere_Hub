<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your custom CSS file -->
    <title>SkillSphere</title>
    <link rel="preconnect" href="https:fonts.googleapis.com">
    <link rel="preconnect" href="https:fonts.gstatic.com" crossorigin>
    <link href="https:fonts.googleapis.com/css2?family=Anta&display=swap" rel="stylesheet">

<!-- Student Testimonial Owl Slider CSS -->
<link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

</head>
<body>
    <!-- start nav -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-maroon pl-5 fixed-top">

    <a class="navbar-brand" href="index.php">
    <i class="fa-solid fa-globe" style="font-size: 25px;"></i> <!-- Adjust the font-size as needed -->
    SkillSphere
</a>
        <span class="navbar-text">Learn and Implement</span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav custom-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="courses.php">Courses</a>
                </li>
                


                <?php
                 session_start();
                 if(isset($_SESSION['is_login'])){
                     echo '
                     <li class="nav-item custom-nav-item">
                    <a href="Student/studentProfile.php" class="nav-link">My Profile</a>
                </li> 
                <li class="nav-item custom-nav-item">
                    <a href="logout.php" class="nav-link">Logout</a>
                </li>
                             ';
                 } else {
                     echo '
                     <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="#login" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Login</a>
                </li>
                <li class="nav-item custom-nav-item">
                    <a class="nav-link" href="#signup" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Signup</a>
                </li>
                
                             ';
                 }
                ?>


       
                 

                
                
                
                
            </ul>
        </div>
    </nav>
    <!-- end nav -->