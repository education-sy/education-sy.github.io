<?php 
/*
session_start();
*/
$mysqli = new mysqli('localhost:8111', 'root', '', 'questions-form') or die(mysqli_error($mysqli));

$id = 0;
$update = false; 
$Curriculum = '';
$stage = '';
$question = '';
$answer = '';




if (isset($_POST['save'])){
    $Curriculum = $_POST['Curriculum'];
    $stage = $_POST['stage'];
    $question = $_POST['question'];
    $answer = $_POST['answer'];


    $mysqli->query("INSERT INTO data (Curriculum, stage, question, answer) VALUES('$Curriculum', '$stage', '$question', '$answer')") or
        die($mysqli->error);

        $_SESSION['message'] = "Item has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: index.php");

}


/*
$name = '';
$location = '';

if (isset($_POST['save'])){
    $name = $_POST['name'];
    $location = $_POST['location'];
    

    $mysqli->query("INSERT INTO data (name, location) VALUES('$name', '$location')") or
        die($mysqli->error);

        $_SESSION['message'] = "Item has been saved!";
        $_SESSION['msg_type'] = "success";

        header("location: index.php");

}
*/





if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $mysqli->query("DELETE FROM data WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] = "Item has been deleted!";
    $_SESSION['msg_type'] = "danger";

        header("location: answers.php");

}



if (isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error());

    if (!empty($result)==1){        
        $row = $result->fetch_array();
        $Curriculum = $row['Curriculum'];
        $stage = $row['stage'];
        $question = $row['question'];
        $answer = $row['answer'];


    }

}

/*

if (isset($_POST['update'])){
    $id = $_POST['id'];
    $Curriculum = $_POST['Curriculum'];
    $stage = $_POST['stage'];
    $question = $_POST['question'];

   $mysqli->query("UPDATE data SET Curriculum='$Curriculum', stage='$stage', question='$question', WHERE id=$id") or die($mysqli->error);

   
   $_SESSION['message'] = "Item has been updated!";
   $_SESSION['msg_type'] = "warning";

       header("location: answers.php");


    }
*/


   
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $Curriculum = $_POST['Curriculum'];
        $stage = $_POST['stage'];
        $question = $_POST['question'];
        $answer = $_POST['answer'];

        $mysqli->query("UPDATE data SET Curriculum='$Curriculum', stage='$stage', question='$question', answer='$answer' WHERE id=$id") or die($mysqli->error);
    
        $_SESSION['message'] = "Item has been updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: answers.php");
    }
    