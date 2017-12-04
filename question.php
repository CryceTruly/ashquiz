<?php  include 'database.php'; 
session_start();

?>
<?php
if(isset($_GET['n'])){
  $number=$_GET['n'];

  
$q=$mysqli->query("SELECT * FROM questions");
$total=$q->num_rows;

  $query="SELECT * FROM questions WHERE question_number='$number'";
  $result=$mysqli->query($query) or die($mysqli->error._LINE_);
  $question=$result->fetch_object();



  $query2="SELECT * FROM choices WHERE question_number='$number'";
  $result2=$mysqli->query($query2) or die($mysqli->error._LINE_);

}



?>
 <!DOCTYPE html>
 <html>
     <head>
     <meta charset="utf-8">
     <title>ashQuiz</title>
     <link rel="stylesheet" href="css/main.css" type="text/css"/>
  <link rel="stylesheet" href="css/style.css"/>
 </head>
 <body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar -header">
          <a class="navbar-brand" href="index.php">Database programming</a>
        </div>
      </div>
    </nav>

<div class="container text-center">
  
<div class="btn btn-info">Question <?php  echo $question->question_number; ?> out of <?php echo $total;  ?></div>
<div class="question"><h3>
<?php  echo $question->text; ?>
</h3>


<form action="process.php" method="post">
  <ul class="list-unstyled">
  <?php  while($row=$result2->fetch_object()) { ?>
  <li><input type="radio" name="choice" value="<?php echo $row->id;  ?>"><?php echo $row->choices;  ?></li>
   
<?php } ?>
</ul>
<input type="submit" name="" value="submit" class="btn btn-primary">
<input type="hidden" name="number" value="<?php  echo $number; ?>" class="btn btn-primary">
</form>


</div>











</div>


<footer style="min-height: 200px;
  text-align: center;margin-top: 20px;padding: 20px;border-top: 1px solid #fff;">
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