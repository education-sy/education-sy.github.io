<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) && isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>

  <!-- 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

   -->


   <!-- 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.0-beta1/js/bootstrap.min.js"></script>

   -->
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/chosen.min.css" rel="stylesheet">
   <script src="js/jquery3.7.0.js"></script>
   <script src="js/chosen.jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>

  <script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery(".chosen").chosen();
        });
    </script>





</head>
<body>



      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<?php if ($_SESSION['role'] == 'admin') {?>
      		<!-- For Admin -->




			  <?php require_once 'process.php'; ?>

<?php

if (isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">

<?php   
    echo $_SESSION['message'];
    unset($_SESSION['message']);
?>
</div>

<?php endif ?>





<?php
function pre_r ( $array ){

echo '<pre>';
print_r($array);
echo '</pre>';

}
?>






     <div class="row justify-content-center">
    <form action="process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        










    <script type="text/javascript">
jQuery(document).ready(function(){
	jQuery(".chosen").chosen();
});
    
        </script>







<!-- 
    * header Dropdowns *

-->







<div class="container-fluid">
    <div class="row">


    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">

<label> Curriculum </label>
<select id="curriculum" name="curriculum" required>
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>



</div>



<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">

<label> Stage </label>
<select id="budget" name="stage">
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>



</div>
</div>

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">


<label> Subject </label>
<select id="budget" name="subject">
            <option value="">select</option>
            <option >0-100</option> <!-- first option contains value="" -->
            <option >100-200</option> 
            <option >200-300</option> 
        </select>


</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">


<label> Topic </label>
<select id="budget" name="topic">
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>

</div>

</div>
    
                        <!-- dropdowns next row -->

<div class="row">

<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">

<label> Strand </label>
<select id="budget" name="strand">
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>


</div>


<div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">

                                              <!-- * multi select Dropdown * -->
<label> Sub Strand </label>

<select class="chosen" name="substrand" multiple="true" style="width:400px;">
	<option name="substrand-1" >Choose...</option>
	<option name="substrand-2">jQuery</option>
	<option name="substrand-3">MooTools</option>
	<option name="substrand-4">Prototype</option>
	<option name="substrand-5">Prototype</option>
</select>


</div>

<div>

<br> <br> 
<div class="row">


  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">


<label style="font-size:20px"> Question Type </label>
<br> <br>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-4">
  <label>Question </label>
  <input type="text" name="question" id="moveme" style="position: relative;">
  <label> Answer </label>
  <input type="text" name="answer" id="moveme" style="position: relative;">

</div>



<!-- 
<select id="moveme" name="questionType" style="position: relative;" onmousedown="move()">
      <option value="">Multiple Choice</option>
      <option value="">Multiple Answer</option>
      <option value="">Matching</option>
      <option value="">True/False</option>
      <option value="">Yes/Now</option>
      <option value="">Short Answer and Paragraph</option>



   </select>
   

   <br> <br> <br> 
   <br> <br> <br> 
   <br> <br> <br> 

   <input type="text" name="question" id="question" style="display:none; border:1px solid silver" 
   			placeholder="question"/> 
   <br>
   <input type="text" name="question1" id="question1" style="display:none; border:1px solid silver"
   		  placeholder="question1"/>
   <br>
   <input type="text" name="question2" id="question2" style="display:none; border:1px solid silver"
  	 placeholder="question2"/>

   <br>
  
   <input type="text" name="question3" id="question3" style="display:none; border:1px solid silver"
   placeholder="question3"/>

   <br>

   <input type="text" name="question4" id="question4" style="display:none; border:1px solid silver"
	   	  placeholder="question4"/>

   <br>

   <input type="text" name="question5" id="question5" style="display:none; border:1px solid silver"
		   placeholder="question5"/>

   <br>
   <br>


   <input type="text" name="answer" id="answer" style="display:none; border:1px solid silver"
	   placeholder="answer"/>

   <br>

   <input type="text" name="correctAnswer" id="correctAnswer" style="display:none; border:1px solid silver"
	   placeholder="Correct Answer"/>


	

-->

   


<script type="text/javascript">

function move()
{
        $('#question').css('display', 'block');
		$('#question1').css('display', 'block');
		$('#question2').css('display', 'block');
		$('#question3').css('display', 'block');
		$('#question4').css('display', 'block');
		$('#question5').css('display', 'block');
		$('#answer').css('display', 'block');
		$('#correctAnswer').css('display', 'block');

}
</script>


</div>

</div>
  


<!-- 
   <h3>Unicode</h3>
<select multiple="" class="form-control select-checkbox" size="5">
  <option> Dog</option>
  <option>Cat</option>
  <option>Hippo</option>
  <option>Dinosaur</option>
  <option>Another Dog</option>
</select>








<ul class="nav" role="navigation">
  <li class="dropdown"> <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown">--Select Country--<b class="caret"></b></a>

    <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">USA</a>

      </li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">UK</a>

      </li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Russia</a>

      </li>
      <li role="presentation" class="divider"></li>
      <li role="presentation" name="stage"><a  name="stage" role="menuitem" tabindex="-1" href="#"> <input type="text" id="other" name="stage"/></a>

      </li>
    </ul>
  </li>
</ul>


<script type="text/javascript">


$(document).ready(function() {
  $('.dropdown-menu input').click(function(e) {
    e.stopPropagation();
  });

  $('.dropdown a').click(function() {
    $('.dropdown').addClass("open");
  });
  $('.dropdown-menu li').click(function() {

    $('.dropdown-toggle b').remove().appendTo($('.dropdown-toggle').text($(this).text()));
  });
});

</script>








<style>
	elect {
  width: 150px;
}

.select-checkbox option::before {
  content: "\2610";
  width: 1.3em;
  text-align: center;
  display: inline-block;
}
.select-checkbox option:checked::before {
  content: "\2611";
}

.select-checkbox-fa option::before {
  font-family: FontAwesome;
  content: "\f096";
  width: 1.3em;
  display: inline-block;
  margin-left: 2px;
}
.select-checkbox-fa option:checked::before {
  content: "\f046";
}

</style>

-->





<!--
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">

<label> Question Difficulty Level </label>
<select id="budget" name="questionDifficulty">
            <option value="">select</option>
            <option >0-100</option> 
            <option >100-200</option> 
            <option >200-300</option> 
        </select>



</div>

-->

</div>
</div>







        <div class="form-group">
            <label> Curriculum </label>
    <input type="text" name="Curriculum" value="<?php echo $Curriculum; ?>"  class="form-control" placeholder="enter your name">
</div>

<div class="form-group">
            <label> stage </label>
    <input type="text" name="stage"  value="<?php echo $stage; ?>" class="form-control" placeholder="enter your location">
</div>





















<div class="form-group">

<?php
if ($update == true):
    ?>
    <button type="submit"  class="btn btn-info" name="update"> Update </button>

    <?php else: ?>
    <button type="submit"  class="btn btn-primary" name="save"> Save </button>
<?php endif; ?>

</div>
</div>






















<div class="text-center">
  <a href="answers.php" target="_blank" class="btn btn-primary">Go to Answers</a>
</div>


<br> <br> 





      		<div class="card" style="width: 9rem; margin:auto!important">
			  <img src="img/admin-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
			<div class="p-3">
				<?php include 'php/members.php';
                 if (mysqli_num_rows($res) > 0) {?>
                  

			
				  

				<?php }?>
			</div>
      	<?php }else { ?>
      		<!-- FORE USERS -->




          <?php

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
}

$result = $mysqli->query("SELECT * FROM data") or die($mysqli->error);

// Check if the Edit button is clicked and retrieve the corresponding question details
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $result = $mysqli->query("SELECT * FROM data WHERE id=$id") or die($mysqli->error);
    if ($result->num_rows) {
        $row = $result->fetch_assoc();
        $Curriculum = $row['Curriculum'];
        $stage = $row['stage'];
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
                <thead>
                    <tr>
                        <th>Curriculum</th>
                        <th>Stage</th>
                        <th>Question</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                while ($row = $result->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['Curriculum']; ?></td>
                        <td><?php echo $row['stage']; ?></td>
                        <td><?php echo $row['question']; ?></td>
                        <td>
                            <a href="user-answers.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>
        </div>

        <div class="row justify-content-center">
            <form action="home.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group">
                    <label>Answer</label>
                    <input type="text" name="answer" value="<?php echo $answer; ?>" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="save">Save</button>
                </div>
            </form>
        </div>
    </div>










      		<div class="card" style="width: 18rem;">
			  <img src="img/user-default.png" 
			       class="card-img-top" 
			       alt="admin image">
			  <div class="card-body text-center">
			    <h5 class="card-title">
			    	<?=$_SESSION['name']?>
			    </h5>
			    <a href="logout.php" class="btn btn-dark">Logout</a>
			  </div>
			</div>
      	<?php } ?>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>


<style>
  .container-fluid {
  margin-top: 20px;
}

label {
  font-weight: bold;
}

select {
  width: 100%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

.chosen {
  width: 100%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

input[type="text"] {
  width: 100%;
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ccc;
  margin-bottom: 10px;
}

.row {
  margin-bottom: 20px;
}

.col-lg-3,
.col-md-3,
.col-sm-3,
.col-xs-4,
.col-xs-3 {
  margin-bottom: 10px;
}

@media (max-width: 768px) {
  .col-xs-4,
  .col-xs-3 {
    margin-bottom: 20px;
  }
}





</style>
</body>
</html>

