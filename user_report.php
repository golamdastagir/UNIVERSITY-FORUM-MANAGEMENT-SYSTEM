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
    <a class="navbar-brand">UNIVERSITY FORUM MANAGEMENT SYSTEM Admin Panel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link" href="admin_profile.php">Back to Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<main>
<div class="container d-flex flex-column align-items-center">
    <h1>User Report</h1>
    

    <?php
    $con=mysqli_connect('localhost', 'root', '', '471_project');
    // Check connection
    if (mysqli_connect_errno())
      {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

    $sql="SELECT * FROM user";

    if ($result=mysqli_query($con,$sql))
      {
        // Return the number of rows in result set
        $rowcount=mysqli_num_rows($result);
        echo "<h3>Total Registered Users: $rowcount</h3>"; 
      }    
  ?> 

    <?php
      $sql = 'SELECT * FROM user';
      $result = mysqli_query($mysqli, $sql);
      $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

   
    <?php if (empty($report)): ?>
      <p class="lead mt-3">There is no report</p>
    <?php endif; ?>

    <?php foreach ($report as $item): ?>
      <div class="card my-3 w-75">
        <div class="card-body text-auto">
        <h3 style="text-align: center" >ID#<?php echo $item['id']; ?> <br></h3>
        <h5>
          <b>Name:</b> <?php echo $item['name']; ?> <br>
          <b>Email:</b> <?php echo $item['email']; ?> <br>
          <b>Birth date:</b> <?php echo date_format(date_create($item['birthdate']),'l, jS F Y'); ?><br>
          <b>Institution:</b> <?php echo $item['institution']; ?> <br>
          <b>Department:</b> <?php echo $item['department']; ?> <br>
          <b>Credits Done:</b> <?php echo $item['credit']; ?> <br>
          <b>Account Password:</b> <?php echo $item['password']; ?> <br>
        </h5>
        </div>
     </div>
    <?php endforeach; ?>
</div>
</main>
</body>
</html>