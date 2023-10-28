<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
    <title>Home</title>
    
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="">UNIVERSITY FORUM MANAGEMENT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="btn btn-success" href="user_login.php">Login</a>
          </li>
          &nbsp &nbsp
          <li class="nav-item">
            <a class="btn btn-info mb-4" href="user_registration.php">Register</a>
          </li>
        </ul>
      </div>
  </div>
</nav>
    <h1 class='text-center mt-4' style="margin-bottom: 3rem">WELCOME TO UNIVERSITY FORUM MANAGEMENT SYSTEM </h1>
    <div class="container-sm" style="width: 800px">

    <p class="lead text">
    University Forum Management System is a platform developed with the aim to help the students of University. It offers the following features to students:
    </p>
    <ul style="margin-bottom: 3rem">
      <li>Personal profile registration for current students</li>
      <li>A profile specifically for the admins of University Forum Management System.</li>
      <li>Certain constraints on profile registration that ensure the validity of the user.</li>
      <li>'Discussion/Q&A' section where all registered users can ask and answer questions.</li>
      <li>'Lost and Found' section where students can report items lost on campus.</li>
      <li>A 'search' feature that allows users to look for course and faculty reviews </li>
      <li>A 'Reports' section based on collected information available to the admins.</li>
    </ul>

<p class="lead text" > Our current goals: </p>
<ul style="margin-bottom: 3rem">
<li>Establishing a unique platform where students and alumni can engage in discussions.</li>
<li>Helping freshers get comfortable with the university and courses.</li>
<li>Creating an opportunity to retrieve lost items on campus.</li>
</ul>
    
 
  <p class="lead text">This project is prepared by:</p>
  <ul>
    <li> Golam Dastagir</li>
    <li> Faiyaz Al-Mamoon</li>
    <li> Mohammad Nazmus Saquib</li>
    

  </ul>
<br> <br> <br> <br>
<div style="display: flex; justify-content: flex-end">
  <a href="admin_login.php" class="btn btn-primary" >Admin Login</a>
</div>
</div>
</body>

</html>
