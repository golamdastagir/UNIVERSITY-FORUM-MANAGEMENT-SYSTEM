<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/4/simplex/bootstrap.min.css"/>
    <title>Course Review</title>  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
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
                        <a class="nav-link" href="course_profiles.php">Course Review</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="user_profile.php">Back To Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex flex-column align-items-center">
        <h1>Course Review</h1>
        <p class="lead text-center">Please share your opinion maintaining respect and etiquette</p><br>
    </div>
        <div class="container-sm" style="width: 600px">
            <form action="course_review.php" method="POST">


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Course Name</label>
                    <div class="col-sm-10">   
                        <input class="form-control" type="text" name='name' placeholder="Course Name" value="" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Course Code</label>
                    <div class="col-sm-10">   
                        <input class="form-control" type="text" name='course' placeholder="Course code" maxlength="6" value="" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Department</label>
                    <div class="col-sm-10">   
                        <input class="form-control" type="text" placeholder="Department" name='department' value="" required>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Rate</label>
                    <div class="rateyo" id= "rating" data-rateyo-rating="4" data-rateyo-num-stars="5" data-rateyo-score="3">
                    
                    </div>
                    <span class='result'>0</span>
                    <input type="hidden" name="rating">
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Review</label>
                    <div class="col-sm-10">   
                        <textarea class="form-control" rows="5" placeholder="Say something short here" type="text" name="review"  required></textarea>
                    </div>
                </div>
                    
                <div class="mb-3">
                    <input type="submit" name="add" class="btn btn-info w-100">
                </div>
            </form>
        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
 
<script>
 
 
    $(function () {
        $(".rateyo").rateYo().on("rateyo.change", function (e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :'+ $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text(rating);
            $(this).parent().find('input[name=rating]').val(rating); //add rating value to input field
        });
    });
 
</script>
</body>
 
</html>
<?php
    $mysqli = new mysqli('localhost', 'root', '', 'uni_forum_sys') or die(mysqli_error($mysqli));
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name = $_POST['name'];
        $rating = $_POST["rating"];
        $course = $_POST['course'];
        $department = $_POST['department'];
        $review = $_POST['review'];
    
        $sql = "INSERT INTO review_course(name, course, department, rating, review) VALUES('$name','$course', '$department', '$rating', '$review')";
        if (mysqli_query($mysqli, $sql))
        {
            echo "ADDED";
        }
        else
        {
            echo "ERROR: " . $sql . "<br>" . mysqli_error($mysqli);
        }
        mysqli_close($mysqli);
    }
?>