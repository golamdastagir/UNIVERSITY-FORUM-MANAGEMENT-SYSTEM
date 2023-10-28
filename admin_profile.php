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
    <title>Admin Profile</title>
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
                    <a class="nav-link" href="q&a_admin.php">Q&A</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lost_and_found_admin.php">Lost & Found</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_course_profiles.php">Course Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin_faculty_profiles.php">Faculty Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="course_materials_admin.php">Course Materials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="user_report.php">Show user profiles</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
    $user = $_SESSION['usermail'];
    $sql = "SELECT * FROM admin WHERE email='$user'";
    $result = mysqli_query($mysqli, $sql);
    $report = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>
<?php foreach ($report as $item): ?>
    
    


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title mb-4">
                            <div class="d-flex justify-content-start">
                                <div class="userData ml-3">
                                    <h1 class="d-block" style="font-size: 1.5rem; font-weight: bold"><a href="javascript:void(0);">Admin Profile</a></h1>
                                </div>
                                <div class="ml-auto">
                                    <input type="button" class="btn btn-primary d-none" id="btnDiscard" value="Discard Changes" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="basicInfo-tab" data-toggle="tab" role="tab" aria-controls="basicInfo" aria-selected="true">Basic Info</a>
                                    </li>
                                </ul>
                                <div class="tab-content ml-1" id="myTabContent">
                                    <div class="tab-pane fade show active" id="basicInfo" role="tabpanel" aria-labelledby="basicInfo-tab">

                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Admin ID</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $item['id']; ?>
                                            </div>
                                        </div>

                                        <hr/>
                                        <div class="row">
                                            <div class="col-sm-3 col-md-2 col-5">
                                                <label style="font-weight:bold;">Admin Email</label>
                                            </div>
                                            <div class="col-md-8 col-6">
                                                <?php echo $item['email']; ?>
                                            </div>
                                        </div>                                                                        

                                        <hr/>
                                        
                                        
                                        
                                        
                                        

                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?>

    <div class='text-center p-4'>
        <a href="index.php" class="btn btn-primary mb-4">Logout</a>
    </div>
</body>

</html>

