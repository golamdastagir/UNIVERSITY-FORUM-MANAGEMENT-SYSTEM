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
    <title>User Registration</title>
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
            <a class="nav-link" href="registration.php"> User Registration Page</a>
          </li>
        </ul>
      </div>
  </div>
</nav>

<div class="container d-flex flex-column align-items-center">
    <h1>User Registration</h1>

    <p class="lead text-center">Fill up the form with correct information for registration</p><br>
</div>

    <div class="container-sm" style="width: 600px">
        <form action="process.php" method="POST">

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">User Type</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="type" id="cars" required>
                        <option value="Student">Student</option>
                        <option value="Alumni">Alumni</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Name</label>
                <div class="col-sm-10">   
                    <input class="form-control" type="text" name='name' placeholder="Your Name" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Student ID</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" name='id' placeholder="Your Student ID" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Email</label>
                <div class="col-sm-10">
                    <input class="form-control" type="email" placeholder="Your Email" name='email' value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Date of Birth</label>
                <div class="col-sm-10">
                    <input class="form-control" type="date" name='dob' placeholder="Your Birth Date" value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Gender</label>
                <div class="col-sm-10">
                    <select class="form-select form-select-sm" name="gender" id="cars" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Institution</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Your Institution" name='institution' value="">
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">University Department</label>
                <div class="col-sm-10">
                    <input class="form-control" type="text" placeholder="Your Department" name='department' value="" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Credits Completed</label>
                <div class="col-sm-10">
                    <input class="form-control" type="number" placeholder="Your Credits Completed" name='credit' value="" max="190" min="0" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="">Set a Password</label>
                <div class="col-sm-10">
                    <input class="form-control" type="password" placeholder="Enter Password" name='password' value="" required>
                </div>
            </div>

            <div class="mb-2 row">
                <label class="col-form-label" for=""><h5><u>Courses you have taken</u>:</h5></label>
            </div>

            <div class="d-flex justify-content mb-3">
                <div class="form-check col-sm-6">
                    <label class="form-check-label" for="expertise4"> Course 1</label>
                    <input type="text" name="course[]" size="6" maxlength="6" oninput="this.value = this.value.toUpperCase()" >
                </div>

                <div class="form-check col-sm-6">
                    <label class="form-check-label" for="expertise3"> Course 2</label>    
                    <input  type="text" name="course[]" size="6" maxlength="6" oninput="this.value = this.value.toUpperCase()">
                </div>
            </div>
            <div class="d-flex justify-content mb-3">
                <div class="form-check col-sm-6">
                    <label class="form-check-label" for="expertise4"> Course 3</label>
                    <input type="text" name="course[]" size="6" maxlength="6" oninput="this.value = this.value.toUpperCase()">
                </div>

                <div class="form-check col-sm-6">
                    <label class="form-check-label" for="expertise3"> Course 4</label>    
                    <input  type="text" name="course[]" size="6" maxlength="6" oninput="this.value = this.value.toUpperCase()">
                </div>
            </div>



            <div class="mb-3">
                <button type="submit" name="register_user" class="btn btn-info w-100">Register</button>
            </div>
        </form>
    </div>
</div>

</body>

</html>
