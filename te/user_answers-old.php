<?php
session_start();
include "db_conn.php";

?>




<!DOCTYPE html>
<html>
<head>
    <title>User Answers</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="css/chosen.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/harvesthq/chosen/gh-pages/chosen.jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <?php
        require_once 'process.php';

        if (isset($_SESSION['message'])):
            ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>

        <div class="row justify-content-center">
            <table class="table">
                <thead>
                    <tr>
                        <th>Curriculum</th>
                        <th>Stage</th>
                        <th>Question</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                $mysqli = new mysqli('localhost:8111', 'root', '', 'questions-form') or die(mysqli_error($mysqli));
                $result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);
                while ($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['Curriculum']; ?></td>
                        <td><?php echo $row['stage']; ?></td>
                        <td><?php echo $row['question']; ?></td>
                        <td>
                            <a href="user_answers.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Answer it</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <div class="row justify-content-center">
            <form action="user_answers.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Curriculum</label>
                    <input type="text" name="Curriculum" value="<?php echo $Curriculum; ?>" class="form-control" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label>Stage</label>
                    <input type="text" name="stage" value="<?php echo $stage; ?>" class="form-control" placeholder="Enter your location">
                </div>
                <div class="form-group">
                    <label>Answer</label>
                    <input type="text" name="answer" value="<?php echo $answer; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <?php if ($update == true): ?>
                        <button type="submit" class="btn btn-info" name="update">Update</button>
                    <?php else: ?>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>





<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the student's answer from $_POST
    $studentAnswer = $_POST['answer'];

    // Perform necessary validation and processing
    // ...

    // Retrieve the correct answer from the database based on the question ID
    $questionID = $_POST['id'];
    $result = $mysqli->query("SELECT answer FROM data WHERE id = $questionID");
    $row = $result->fetch_assoc();
    $correctAnswer = $row['answer'];

    // Compare the student's answer with the correct answer
    if ($studentAnswer == $correctAnswer) {
        $isAnswerCorrect = true;
    } else {
        $isAnswerCorrect = false;
    }

    // Display success or failure message
    if ($isAnswerCorrect) {
        $_SESSION['message'] = "Your answer is correctttttt!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Your answer is incorrect. Please try again.";
        $_SESSION['msg_type'] = "danger";
    }
    header("location: user_answers.php");
    exit();
}
?>







    
</body>
</html>
