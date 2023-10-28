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
    <title>Lost and Found</title>
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
                    <a class="nav-link" href="admin_profile.php">Back To Admin</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body>
    
    <div class="container-sm" style="width: 600px">
        <h1 style="text-align:center" class="mb-4"><u>Lost and Found</u></h1>
        <div>
            <table class="table table-bordered table-striped" style="text-align:center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Item Name</th>
                    <th scope="col">Reporter Email</th>
                    <th scope="col">Place where found</th>
                    <th scope="col">Date of Report</th>
                </tr>


                <?php 
                $sql = 'SELECT * FROM lost_and_found';
                $result = mysqli_query($mysqli, $sql);
                $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
                ?>
                <?php if (empty($report)): ?>
                    <td colspan="5"><p class="lead mt-3">There are no reports yet</p></td>
                <?php endif; ?>
                <?php foreach ($report as $item): ?>
                    <tr>
                        <td> <?php echo $item['id']; ?> </td>
                        <td> <?php echo $item['item_name']; ?> </td>
                        <td> <?php echo $item['reporter_email']; ?> </td>
                        <td> <?php echo $item['place']; ?> </td>
                        <td> <?php echo $item['report_date']; ?> </td>
                    </tr>
                <?php endforeach;?> 
            </table>
        </div>
    
    <br><br><br><br>


    <form action="lost_and_found_admin.php" method="POST">
        <div class="row align-items-center">
            <div class="col-auto">
                <label class="col-form-label">Item ID</label>
            </div>
            <div class="col-auto">
                <input class="form-control" type="text" name="id" placeholder="Item ID" aria-describedby="delete" required>
            </div>
            <div class="col-auto">
                <span id="delete" class="form-text">
                <button type='submit' name="deletelf" class="btn btn-primary w-100">Delete</button>
                </span>
            </div>
        </div>

    </form>
    </div>


</body>

</html>
