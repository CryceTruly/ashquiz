
 <!DOCTYPE html>
 <html>
     <head>
     <meta charset="utf-8">
     <title>ashQuiz</title>
     <link rel="stylesheet" href="../css/main.css" type="text/css"/>
 	<link rel="stylesheet" href="css/style.css"/>
 </head>
 <body>
<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php">ashQuiz.com</a>
        </div>
      </div>
    </nav>
<div class="container">

<p class="text-danger">
<?php
if(isset( $_GET['msg'])){
echo $_GET['msg'];
}
?>

</p>

<h3>Login</h3>


                      <form method="POST" action="loginn.php">
                    
       

                        
                        <div class="form-group">
                        <label for="username">Username</label>
                       <input type="text" name="username" id="username" class="form-control" required autocomplete="off">
                        </div>
                        <div class="form-group">
                        <label for="Password">Password</label>

                        <input type="Password" name="password" id="Password" class="form-control" required>
                        </div>

                        
                          <input type="submit" name="submit" value="Login" id="loginbtn" class="btn btn-primary">
                         
                       </form>
                       </div>




</div>


 </body>
 </html>
