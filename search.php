<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
    <title>Search Page</title>
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
                <a class="nav-link" href="user_profile.php">Back To Profile</a>
              </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for Faculties</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="searchFaculty" required value="<?php if (isset($_GET['searchFaculty'])) {
                                                                                                    echo $_GET['searchFaculty'];
                                                                                                } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Email</th>
                                    <th>Ratings</th>
                                    <th>Review</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "uni_forum_sys");

                                if (isset($_GET['searchFaculty'])) {
                                    $filtervalues = $_GET['searchFaculty'];
                                    $query = "SELECT * FROM review_faculty WHERE CONCAT(name,course,email) LIKE '%$filtervalues%'";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items)
                                        {
                                ?>
                                            <tr>
                                                <td><?= $items['name']; ?></td>
                                                <td><?= $items['course']; ?></td>
                                                <td><?= $items['email']; ?></td>
                                                <td><?= $items['rating']; ?></td>
                                                <td><?= $items['review']; ?></td>
                                            </tr>
                                            <?php

                                        }
                                    }
                                    else {
                                            ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                        }
                                }
                                else {
                                        ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                <?php
                                    }
                                
                                ?>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header">
                        <h4>Search for Courses</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="searchCourse" required value="<?php if (isset($_GET['searchCourse'])) {
                                                                                                    echo $_GET['searchCourse'];
                                                                                                } ?>" class="form-control" placeholder="Search data">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>


                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Department</th>
                                    <th>Ratings</th>
                                    <th>Review</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $con = mysqli_connect("localhost", "root", "", "uni_forum_sys");

                                if (isset($_GET['searchCourse'])) {
                                    $filtervalues = $_GET['searchCourse'];
                                    $query = "SELECT * FROM review_course WHERE CONCAT(name,course,department) LIKE '%$filtervalues%'";
                                    $query_run = mysqli_query($con, $query);

                                    if (mysqli_num_rows($query_run) > 0) {
                                        foreach ($query_run as $items)
                                        {
                                ?>
                                            <tr>
                                                <td><?= $items['name']; ?></td>
                                                <td><?= $items['course']; ?></td>
                                                <td><?= $items['department']; ?></td>
                                                <td><?= $items['rating']; ?></td>
                                                <td><?= $items['review']; ?></td>
                                            </tr>
                                            <?php

                                        }
                                    }
                                    else {
                                            ?>
                                            <tr>
                                                <td colspan="4">No Record Found</td>
                                            </tr>
                                        <?php
                                        }
                                }
                                else {
                                        ?>
                                        <tr>
                                            <td colspan="4">No Record Found</td>
                                        </tr>
                                <?php
                                    }
                                
                                ?>
                            </tbody>
                        </table>



                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>