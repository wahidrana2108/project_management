<!-- db starting -->
<?php
    include("db.php")
?>
<!-- db end -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="includes/logo.png">

    <style>
        html, body {
            height: 100%; /* Set both html and body to 100% height */
            margin: 0; /* Remove default margin */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Project Management Toolkit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="project_list.php">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about_us.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contract_us.php">Contract us</a>
                </li>
                <li class="nav-item ps-lg-5">
                <?php
                    session_start();
                    if(!isset($_SESSION['username'])){
                        echo "<a class='btn btn-success' href='login.php'>Log In</a>";
                    }
                    else{
                        echo "<a class='btn btn-secondary' href='logout.php'>Log Out</a>";
                    }
                ?>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    
