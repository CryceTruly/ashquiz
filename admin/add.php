<?php
require 'database.php';


$q=$mysqli->query("SELECT * FROM questions");
$total=$q->num_rows;
if(isset($_POST['submit'])){
$question_number=$_POST['question_number'];
$question_text=$_POST['question_text'];
$sql1="INSERT INTO `questions` (`question_number`, `text`) VALUES ('$question_number', '$question_text')";
$query_run=$mysqli->query($sql1);
$choices=[];
$choices[0]=$_POST['choice1'];
$choices[1]=$_POST['choice2'];
$choices[2]=$_POST['choice3'];
$choices[3]=$_POST['choice4'];
$num=$_POST['question_number'];
$correct=$_POST['correct_choice'];
$correct_choice=$correct-1;

foreach ($choices as $f => $value) {

if($f==$correct_choice){
$f=1;

}else{
	$f=0;
}


$sql="INSERT INTO `choices` (`question_number`, `is_correct`, `choices`)
VALUES ('$num', '$f', '$value')";

$qrun=$mysqli->query($sql);
if($mysqli->affected_rows){
echo "add success";
}


}




}

?>


 <!DOCTYPE html>
 <html>
     <head>
     <meta charset="utf-8">
     <title>ashQuiz</title>
	
	 	<link rel="stylesheet" href="../css/main.css" type="text/css"/>
 	<style>


 		label{
 			color:#006699;
 		}
 	</style>
 </head>
 <body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="add.php">Addminstrator ashQuiz.com</a>
        </div>

        <div class="nav navbar-nav">
        	 <ul class="nav navbar-nav">
                <li><a href="http://localhost/tourguide/index.php">Settle</a></li>
                
            </ul>
            <ul class="nav navbar-nav navbar-right">
               <?php

if(isset($_SESSION['username'])){
?>
 <ul class="nav navbar-nav">
                <li><a href="logout.php">Logout <strong> <?php echo $_SESSION['username'];  ?></strong></a></li>
                
            </ul>

<?php
}else{
	header('location:index.php?msg='.urlencode('you must login first'));
}

               ?>


</ul>



        </div>


</nav>

<div class="container">

<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">


	<div class="current">

<?php  if(isset($message)){
	echo $message;
	}  ?>


 			<h2>Add A Question</h2>
 			<form method="post" action="add.php">
 				<p>
 					<label>Question Number:</label>
 					<input type="number" name="question_number" class="form-control"  value="<?php  echo $total+1;  ?>"/>
 				</p>
 				<p>
 					<label>Question Text:</label>
 					<input type="text" name="question_text" class="form-control" value="<?php  if(isset($_POST['question_text'])){echo $_POST['question_text']; }  ?>" />
 				</p>
 				<p>
 					<label>Choice #1:</label>
 					<input type="text" name="choice1" class="form-control" value="<?php  if(isset($_POST['choice1'])){echo $_POST['choice1']; }  ?>" />
 				</p>
 				<p>
 					<label>Choice #2:</label>
 					<input type="text" name="choice2" class="form-control" value="<?php  if(isset($_POST['choice2'])){echo $_POST['choice2']; }  ?>" />
 				</p>
 				<p>
 					<label>Choice #3:</label>
 					<input type="text" name="choice3" class="form-control"  value="<?php  if(isset($_POST['choice3'])){echo $_POST['choice3']; }  ?>"/>
 				</p>
 				<p>
 					<label>Choice #4:</label>
 					<input type="text" name="choice4"  class="form-control"  value="<?php  if(isset($_POST['choice4'])){echo $_POST['choice4']; }  ?>" />
 				</p>

 				<p>
 					<label>Correct Choice Number:</label>
 					<input type="number" name="correct_choice"  class="form-control" />
 				</p>
 				<p>

 					<input type="submit" name="submit" value="submit" class="btn btn-success btn-block" />


 					 				</p>

 			</form>
</div>





	</div>
	<div class="col-md-2"></div>


</div>




<footer style="min-height: 200px;
	text-align: center;margin-top: 20px;padding: 20px; border-top: 1px solid #fff;">
 	<div class="container-fluid">
 	<div class="row">

<div class="col-md-6">

<ul class="list-unstyled">Check us out on social

<li>Facebook</li><li>twitter</li><li>youtube</li>
</ul>
</div>

<div class="col-md-6">
	<ul class="list-unstyled">

		<li>Copyright @copy; 2017, ashQuiz.com</li>
	</ul>

</div>


 	</div>

 	</footer>

 </body>
 </html>
