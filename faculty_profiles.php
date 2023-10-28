<?php include 'process.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
    <title>Home</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
    <a class="navbar-brand">UNIVERSITY FORUM MANAGEMENT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a class="nav-link" href="faculty_review.php">Give a Faculty Review</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="user_profile.php">Back To Profile</a>
              </li>
            </ul>
        </div>
    </div>
</nav>


<main>
<div class="container d-flex flex-column align-items-center">
    <h1>Faculty Ratings</h1>

    <?php
      $sql = 'SELECT * FROM review_faculty';
      $result = mysqli_query($mysqli, $sql);
      $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
      $name3 = 0;
    ?>

   
    <?php if (empty($report)): ?>
      <p class="lead mt-3">There is no review</p>
    <?php endif; ?>

    <?php foreach ($report as $item): ?>
      <?php
        if ($item['name']!= $name3):
        $name3 = $item['name'];
        $sql3 = "SELECT DISTINCT name, email, department, avg(rating) as rate FROM review_faculty WHERE name = '$name3'";
        $result3 = mysqli_query($mysqli, $sql3);
        $report3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
        
      ?>
      <?php foreach ($report3 as $item3): ?>
        
        <div class="card my-3 w-75">
          <div class="card-body text-auto">
          
            <h3 style="text-align: center" ><?php echo $item3['name']; ?> <br></h3>
            <h5>
            <b>Email:</b> <?php echo $item3['email']; ?> <br>
            <b>Department:</b> <?php echo $item3['department']; ?> <br>  
            <b>Rating:</b> <?php echo $item3['rate']; ?>
            </h5>
          
          </div>
        </div>
        
        <?php endforeach; endif; ?>  
      <?php endforeach; ?>
</div>
</main>
</body>
</html>