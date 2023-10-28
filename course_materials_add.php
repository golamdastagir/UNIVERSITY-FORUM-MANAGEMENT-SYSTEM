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
    <title>course_code</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand">UNIVERSITY FORUM MANAGEMENT SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
</nav>

    <?php if (isset($_POST['post_course_material'])) {
        $course_code = $_POST['course_code'];
        $material_type = $_POST['material_type'];
        $material = $_POST['material'];
        if ($course_code != "" || $material_type != "" || $material != "") {
            $mysqli->query("INSERT INTO course_materials(course_code, material_type, material) VALUES('$course_code', '$material_type', '$material')");
            header("Location: course_materials.php");
        }
        else{header("Location: course_materials_add.php");}
    }?>

<div class="container-sm" style="width: 600px">
    <h1 style="text-align:center" class="mb-4">Write the course code</h1>
    <div>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Course Code: </label>    
            <input class="form-control" placeholder="Enter your course code here" type="text" name="course_code" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Material Type: </label>    
            <input class="form-control" placeholder="Enter material type" type="text" name="material_type" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Material Link: </label>
            <textarea class="form-control" rows="5" placeholder="Enter your material link" name="material" required>
            </textarea>
        </div>
        <div class="container d-flex flex-column align-items-center">
        <button type='submit' class='btn btn-warning w-50 mb-3' name="post_course_material">Submit</button>
        <a onclick="history.back()" class='btn btn-primary w-50'>Go Back</a>
        </div>
    </form>
    </div>
</div>
</body>

</html>
