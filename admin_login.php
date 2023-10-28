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
    <title>admin Login</title>
</head>

<body>

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="index.php">UNIVERSITY FORUM MANAGEMENT SYSTEM</a>
  </div>
</nav>


    <?php require_once 'process.php';?>
    <div class="container d-flex flex-column align-items-center">
    <h1>Login as Admin</h1>
    <div>
    <p class="lead text-center">Enter with your credentials to login to your profile </p>

        <form action="process.php" method="POST">

            <div class="mb-3">
                <label class="form-label" for="email">
                    Email
                </label>
                <input type="email" class="form-control" name="email" placeholder="Your Email" value="" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="password">
                    Password
                </label>
                <input type="password" class="form-control" name="password" placeholder="Your password" value="" required>
            </div>
            
            <div class="mb-3">
                <button type="submit" name="login_admin" class="btn btn-primary w-100">Login</button>
            </div>
            

        </form>
    </div>
</body>
</html>