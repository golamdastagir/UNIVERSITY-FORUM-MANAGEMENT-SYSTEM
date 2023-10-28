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
                <a class="nav-link" href="admin_profile.php">Back To Profile</a>
              </li>

            </ul>
        </div>
    </div>
</nav>


<main>
<div class="container d-flex flex-column align-items-center">
    <h1>Rated Faculties</h1>

    <?php
      $sql = 'SELECT * FROM review_faculty';
      $result = mysqli_query($mysqli, $sql);
      $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

   
    <?php if (empty($report)): ?>
      <p class="lead mt-3">There are no review</p>
    <?php endif; ?>
    <table class="table table-bordered">
      <thead>
          <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>Email</th>
              <th>Department</th>
              <th>Ratings</th>
              <th>Review</th>

          </tr>
      </thead>
      <tbody>
        <?php foreach ($report as $item): ?>
          <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['name']; ?></td>
            <td><?= $item['course']; ?></td>
            <td><?= $item['email']; ?></td>
            <td><?= $item['department']; ?></td>
            <td><?= $item['rating']; ?></td>
            <td><?= $item['review']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
</div>

<br>
<br>


</main>

<?php
  if (isset($_POST['delete'])) {
      $id = $_POST['id'];
      if ($id != "") {
          $mysqli->query("DELETE FROM review_faculty WHERE id = '$id'");
          header("Location: admin_faculty_profiles.php");
      }
  }


  ?>

<form action="admin_faculty_profiles.php" method="POST">
        <div class="row align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Rating ID</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="id" placeholder="Rating ID" aria-describedby="delete" required>
            </div>
            <div class="col-auto">
                <span id="delete" class="form-text">
                <button type='submit' name="delete" class="btn btn-primary w-100">Delete Rating</button>
                </span>
            </div>
        </div>

    </form>

<br>
<br>
</body>
</html>