<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
$q=$mysqli->query("SELECT * FROM questions");
$result=$q->num_rows;
 if (!isset($_SESSION['score'])) {
$_SESSION['score'] =0;
 	}

 	if($_POST){
 		$number=$_POST['number'];
 		$selectedchoice=$_POST['choice'];
 		$next=$number+1;

 		$sql="SELECT * FROM choices WHERE question_number ='$number' AND is_correct=1";

 		$query=$mysqli->query($sql);
 		$res=$query->fetch_object();

 		$correctchoice=$res->id;
if($correctchoice==$selectedchoice){
	$_SESSION['score']+1;
}

$query="SELECT * FROM questions";
$results=$mysqli->query($query);
$total=$results->num_rows;

if($number==$total){
header("location:final.php");
exit();
}else{
header("location:question.php?n=".$next);
exit();
}

 	}
