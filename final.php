<?php session_start();



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
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">Database programming</a>
        </div>
      </div>
    </nav>

<div class="container">
<div class="current">
<h2>Your are done</h2>
<p>Congrats! You have completed the test</p>
<p>Final Score: <?php  echo $_SESSION['score'];  ?></p>

<a href="question.php?n=1" class="start">Take again</a>
</div>

</div>


<footer style="min-height: 200px;
	text-align: center;margin-top: 20px;padding: 20px;border-top: 1px solid #fff;>
 	<div class="container-fluid">
 	<div class="row">

<div class="col-md-6">

<ul class="list-unstyled">Check us out on social

<li>Facebook</li><li>twitter</li><li>youtube</li>
</ul>
</div>

<div class="col-md-6">
	<ul class="list-unstyled">

		<li>Copyright @&times; 2017, ashQuiz.com</li>
	</ul>

</div>


 	</div>

 	</footer>

 </body>
 </html>
