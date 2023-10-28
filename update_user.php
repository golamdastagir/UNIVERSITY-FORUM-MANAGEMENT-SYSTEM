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
    <title>Update Profile</title>
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

    <?php
        $user = $_SESSION['usermail'];
        $sql = "SELECT * FROM user WHERE email='$user'";
        $result = mysqli_query($mysqli, $sql);
        $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $sql2 = "SELECT id FROM user WHERE email='$user'";
        $result2 = mysqli_query($mysqli, $sql2);
        $report2 = mysqli_fetch_all($result2, MYSQLI_ASSOC);
        foreach ($report2 as $item2): 
            $user_id = $item2['id'];
        endforeach;
        $sql3 = "SELECT * FROM user_course WHERE id='$user_id'";
        $result3 = mysqli_query($mysqli, $sql3);
        $report3 = mysqli_fetch_all($result3, MYSQLI_ASSOC);
    ?>

    <?php if (isset($_POST['update'])) {
        $email = $_POST['email'];
        $credit = $_POST['credit'];
        $password = $_POST['password'];
        if ($email != "" && $credit != "" && $password != "" ) {
            $mysqli->query("UPDATE user SET email='$email' WHERE id = '$user_id'");
            $mysqli->query("UPDATE user SET credit='$credit' WHERE id = '$user_id'");
            $mysqli->query("UPDATE user SET password='$password' WHERE id = '$user_id'");
            header("Location: user_login.php");
        }
        elseif ($email != "") {
            $mysqli->query("UPDATE user SET email='$email' WHERE id = '$user_id'");
            header("Location: user_login.php");
        }
        elseif ($credit != "" ) {
            $mysqli->query("UPDATE user SET credit='$credit' WHERE id = '$user_id'");
            header("Location: user_profile.php");
        }
        elseif ($password != "" ) {
            $mysqli->query("UPDATE user SET password='$password' WHERE id = '$user_id'");
            header("Location: user_login.php");
        }
        else{header("Location: update_profile.php");}
    }?>
    <div class="container-sm" style="width: 600px">
    <h1 style="text-align:center" class="mb-4">Update Profile</h1>
    <div>
    <form method="POST">
    <div class="mb-3">
        <label class="form-label">Update email: </label>    
        <input class="form-control" placeholder="Need to login again if changed" type="email" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Update credit: </label>    
        <input class="form-control" placeholder="New credit count" type="number" name="credit">
    </div>
    <div class="mb-3">
        <label class="form-label">Update Password: </label>    
        <input class="form-control" placeholder="Need to login again if changed" type="password" name="password">
    </div>
        <div class="container d-flex flex-column align-items-center">
        <button type='submit' class='btn btn-info w-50 mb-3' name="update">Submit</button>
        </div>
    </form>

    

</body>
</html>
