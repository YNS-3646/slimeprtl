<?php 
session_start();

if(!isset($_SESSION['roll'])){
    header('Location: login.php');    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Student: Home</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top border-bottom border-dark border-2 rounded-bottom-5" style="font-weight: 400; font-size:25px; font-family:Arial, Helvetica, sans-serif; background-color:#1D2951">
    <div class="container-fluid">
        <a class="navbar-brand ms-auto" href="st_index.php"><img src="images/hello.png" width="150" height="75"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mt-3 mb-lg-0">
            <li class="nav-item ms-4">
            <a class="nav-link active" aria-current="page" href="#" style="color:aliceblue">HOME</a>
            </li>
            <li class="nav-item ms-4">
            <a class="nav-link" href="profile.php" style="color:aliceblue">PROFILE</a>
            </li>
            <li class="nav-item ms-4">
            <a class="nav-link" href="acc.php" style="color:aliceblue">ACCOUNTS</a>
            </li>
        </ul>
        <a class="d-flex ms-auto btn btn-success" href="logout.php">
            Logout
        </a>
        </div>
    </div>
    </nav>
    <main>
