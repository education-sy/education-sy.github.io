<?php
session_start();

// Replace the database connection details with your own
$servername = "localhost:8111";
$username = "root";
$password = "";
$dbname = "questions-form";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$Curriculum = '';
$stage = '';
$question = '';
$answer = '';

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
        $_SESSION['message'] = "Your answer is correct!";
        $_SESSION['msg_type'] = "success";
    } else {
        $_SESSION['message'] = "Your answer is incorrect. Please try again.";
        $_SESSION['msg_type'] = "danger";
    }

    // Redirect back to user-answers.php
    header("Location: user-answers.php");
    exit();
}

$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);

// Check if the Edit button is clicked and retrieve the corresponding question details
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    if ($result->num_rows) {
        $row = $result->fetch_assoc();
        /*
        $Curriculum = $row['Curriculum'];
        */
        $question = $row['question'];
        $answer = $row['answer'];
    }
}
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
            <?php
            while ($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['question']; ?></td>
                    <td><?php echo $row['answer']; ?></td>

                    <td>
                        <a href="user-answers.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Answer it</a>
                        
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>

    <div class="row justify-content-center">
        <form action="" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

            

            <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" value="<?php echo $question; ?>" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
        </form>
    </div>
</div>





</body>
</html>
