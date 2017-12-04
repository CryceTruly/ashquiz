<?php  include 'database.php';

$s=$mysqli->query("SELECT * FROM questions");




 ?>
 <!DOCTYPE html>
 <html>
     <head>
     <meta charset="utf-8">
     <title>PHP QUIZER</title>
     <link rel="stylesheet" href="css/main.css" type="text/css"/>
 	<link rel="stylesheet" href="css/style.css"/>
 </head>
 <body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Database Programming</a>
        </div>
      </div>
    </nav>

<div class="container">
  
<div class="jumbotron">
  <h2>Instructions and guidelines to the Quiz</h2>
<p class="lead">Test your Knowledge in Database programming</p>


</div>

<div class="container-fluid">
	<p class="text-info">This is a multiple choice quiz to text your knowledge in Database programing</p>
<ul class="list-group">
	<li class="list-group-item panel-success"><strong>Number of questions</strong>    <?php echo $total= $s->num_rows; ?></li>
	<li class="list-group-item panel-success"><strong>Type:</strong>Multiple choice</li>
	<li class="list-group-item panel-success"><strong>Your final score takes you to the next level of the quiz</strong></li>
	 <li class="list-group-item panel-success"><strong>Estimated Time:</strong><?php echo $total *.5; ?> minute</li>
	
	

</ul>
<a class="btn btn-success" href="question.php?n=1">start quiz</a>

</div>


<footer style="min-height: 200px;
	text-align: center;margin-top: 20px;padding: 20px; border-top: 1px solid #fff;">
 	<div class="panel-success">
 	<div class="row">
 		
<div class="col-md-6">
	
<ul class="list-unstyled">Check us out on social

<li>Facebook</li><li>twitter</li><li>youtube<li>
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