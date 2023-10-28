<?php

$mysqli = new mysqli('localhost', 'root', '', 'uni_forum_sys') or die(mysqli_error($mysqli));

session_start();


/* USER SECTION*/

// User Registration
if (isset($_POST['register_user'])) {
    $type = $_POST['type'];
    $name = $_POST['name'];
    $id = $_POST['id'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $institution = $_POST['institution'];
    $department = $_POST['department'];
    $credits_completed = $_POST['credit'];
    $password = $_POST['password'];
    $courses = $_POST['course'];

    $sql = "SELECT * FROM user WHERE email='$email'" or die($mysqli->error);
    $result = $mysqli->query($sql);
    $row = $result->fetch_assoc();

    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
        } else {
            $mysqli->query("INSERT INTO user (type, id, name, gender, email, institution, department, credit, birthdate, password) VALUES('$type', '$id', '$name', '$gender', '$email', '$institution', '$department', '$credits_completed', '$dob', '$password')") or die($mysqli->error);
                
            $sql = "SELECT id FROM user WHERE email LIKE '$email'";
            $result = $mysqli->query($sql);
            $row = mysqli_fetch_array($result);
            $user_id = $row[0];
            foreach ($courses as $course) {
                if ($course != ''){
                    $mysqli->query("INSERT INTO user_course (id, course) VALUES ('$user_id','$course');");
                }
            }

            header("Location: user_login.php");
        }
    } else {
        header("Location: user_registration.php");
    }
}

// User Login
if (isset($_POST['login_user'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION['usermail'] = $email;
            header("Location: user_profile.php");
            
            exit();
        } else {
            header("Location: user_login.php");
        }
    }
}



/* ADMIN SECTION*/

// Admin Login
if (isset($_POST['login_admin'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = $mysqli->query($sql);

    $row = $result->fetch_assoc();
    if ($result) {

        if (mysqli_num_rows($result) >= 1) {
            $_SESSION['usermail'] = $email;
            header("Location: admin_profile.php");
            
            exit();
        } else {
            header("Location: admin_login.php");
        }
    }
}



/* LOST & FOUND SECTION*/

// handle posting found item report
if (isset($_POST['post_lost_and_found_report'])) {
    $item_name = $_POST['item_name'];
    $reporter_email = $_POST['reporter_email'];
    $place = $_POST['place'];
    $report_date = $_POST['report_date'];
    if ($item_name != "") {
        $mysqli->query("INSERT INTO lost_and_found(reporter_email, item_name, report_date, place) VALUES('$reporter_email', '$item_name', '$report_date', '$place')");
    }
}

// handle deleting a lost and found

if (isset($_POST['deletelf'])) {
    $id = $_POST['id'];
    if ($id != "") {
        $mysqli->query("DELETE FROM lost_and_found WHERE lost_and_found.id = '$id'");
        header("Location: lost_and_found_admin.php");
    }
}


/* Q&A SECTION*/

// handle posting a question
if (isset($_POST['post_student_question'])) {
    $question = $_POST['question'];
    if ($question != "") {
        $mysqli->query("INSERT INTO q_and_a(question) VALUES('$question')");
        header("Location: q&a.php");
    }
    else{header("Location: q&a_question.php");}
}


// handle answering a question
$sql = 'SELECT * FROM q_and_a';
$result = mysqli_query($mysqli, $sql);
$report = mysqli_fetch_all($result, MYSQLI_ASSOC);

if (isset($_POST['post_answer'])) {
$answer = $_POST['answer'];
$id = $_POST['id'];
if ($answer != "") {
    $mysqli->query("UPDATE q_and_a SET answer='$answer' WHERE q_and_a.id = '$id'");
    header("Location: q&a.php");
}
else{header("Location: q&a_answer.php");}
}

// handle deleting a Q&A
$sql = 'SELECT * FROM q_and_a';
$result = mysqli_query($mysqli, $sql);
$report = mysqli_fetch_all($result, MYSQLI_ASSOC);


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    if ($id != "") {
        $mysqli->query("DELETE FROM q_and_a WHERE q_and_a.id = '$id'");
        header("Location: q&a_admin.php");
    }
}
