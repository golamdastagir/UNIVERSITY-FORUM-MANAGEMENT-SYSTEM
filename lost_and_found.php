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
      <a class="navbar-brand" href="index.php">UNIVERSITY FORUM MANAGEMENT SYSTEM</a>
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
    <?php require_once 'process.php'; ?>
    <div class="container-sm" style="width: 600px">
        <h1 style="text-align:center" class="mb-4"><u>Lost and Found</u></h1>
        <div>
            <table class="table table-bordered table-striped" style="text-align:center">
                <tr>
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
                        <td> <?php echo $item['item_name']; ?> </td>
                        <td> <?php echo $item['reporter_email']; ?> </td>
                        <td> <?php echo $item['place']; ?> </td>
                        <td> <?php echo $item['report_date']; ?> </td>
                    </tr>
                <?php endforeach;?> 
            </table>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>


    <div class="container d-flex flex-column align-items-center">
        <p class="lead text-center">To report any found item please fill up the form below with correct information</p><br>
    </div>

    <div class="container-sm" style="width: 600px">
        <form action="lost_and_found.php" method="POST">

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Item Name</label>
                <div class="col-sm-10">   
                    <input class="form-control" type="text" name="item_name" placeholder="Item Name" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Reporter Email</label>
                <div class="col-sm-10">   
                    <input class="form-control" type="email" name="reporter_email" placeholder="Reporter Email" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Place</label>
                <div class="col-sm-10">   
                    <input class="form-control" type="text" name="place" placeholder="Place" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Report Date</label>
                <div class="col-sm-10">   
                    <input class="form-control" type="date" name="report_date" placeholder="Report Date" value="" required>
                </div>
            </div>

            <div class="mb-3">
                <button type='submit' name="post_lost_and_found_report" class="btn btn-primary w-100">Post</button>
            </div>
        </form>
    </div>

</body>

</html>
