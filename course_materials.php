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
    <title>Course Materials</title>
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

<body>
<div class="container-sm" style="width: 600px">
    <h1 style="text-align:center" class="mb-4"><u>Course Materials</u></h1>
    <div>
    
    <?php
        $sql = 'SELECT * FROM course_materials';
        $result = mysqli_query($mysqli, $sql);
        $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <table class="table table-bordered table-striped" style="text-align:center">
        <tr>
            <th>ID</th>
            <th>Course Code</th>
            <th>Material Type</th>
            <th>Material</th>
        </tr>
    
        <?php if (empty($report)): ?>
            <td colspan="4"><p class="lead mt-4">There are no course materials yet</p></td>
        <?php endif; ?>
        <?php foreach ($report as $item): ?>
        <tr>
            <td> <?php echo $item['id']; ?> </td>
            <td> <?php echo $item['course_code']; ?> </td>
            <td> <?php echo $item['material_type']; ?> </td>
            <td> <?php echo $item['material']; ?> </td>
        </tr>
        
    <?php endforeach;?>
    </table>
    
    <div class="mb-3">
        <a class="btn btn-info w-100" href="course_materials_add.php">Submit a Material</a>
    </div>
    </div>
</div>
</body>

</html>
