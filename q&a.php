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
    <title>Q&A</title>
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
    <h1 style="text-align:center" class="mb-4"><u>Question and Answers</u></h1>
    <div>
    
    <?php
        $sql = 'SELECT * FROM q_and_a';
        $result = mysqli_query($mysqli, $sql);
        $report = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>

    <table class="table table-bordered table-striped" style="text-align:center">
        <tr>
            <th>ID</th>
            <th>Question</th>
            <th>Answer</th>
        </tr>
    
        <?php if (empty($report)): ?>
            <td colspan="3"><p class="lead mt-3">There are no questions yet</p></td>
        <?php endif; ?>
        <?php foreach ($report as $item): ?>
        <tr>
            <td> <?php echo $item['id']; ?> </td>
            <td> <?php echo $item['question']; ?> </td>
            <td> <?php echo $item['answer']; ?> </td>
        </tr>
        
    <?php endforeach;?>
    </table>
    
    <br><br>
    <h3 style="text-align:center" class="mb-4">Post a Question</h1>
    <form method="POST">
        <div class="mb-3">
            <textarea class="form-control" rows="2" placeholder="Enter your query here" type="text" name="question"  required></textarea>    
        </div>
        <div class="container d-flex flex-column align-items-center">
            <button type='submit' class='btn btn-warning w-50 mb-3' name="post_student_question">Ask</button>
        </div>
    </form>
    
    <br><br>
    
    <h3 style="text-align:center" class="mb-4">Give an Answer</h1>
    <form method="POST">
        <div class="mb-3">
            <label class="form-label">Question ID: </label>    
            <input class="form-control" placeholder="Enter question ID" type="number" name="id" required>
        </div>    
        <div class="mb-3">
            <label class="form-label">Answer: </label>
            <textarea class="form-control" rows="2" placeholder="Enter your Answer" name="answer" required>
            </textarea>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <button type='submit' class='btn btn-info w-50 mb-3' name="post_answer">Submit</button>
        </div>
    </form>

</div>
</body>

</html>
