
<?php
require 'database.php';
if(isset ($_POST['password']) && isset($_POST['username'])){

$username=trim($_POST['username']);

if(!empty($_POST['password']) && !empty($username)){
  $hashed=md5($_POST['password']);
  
  
$sql=$mysqli->query("SELECT id,username,password from users WHERE username='$username' AND password='$hashed' LIMIT 1");
if($sql->num_rows==1){

$r=$sql->fetch_object();
$id=$r->id;

$_SESSION['username'] = $username;
$_SESSION['id']=$id;
header("Location:add.php");
}else{
  header("location:index.php?msg=incorect username and password combination try again with the right password");
}
}else{
  echo 'all the values are required fill all field'; 
}

}else{
    echo 'please login first';
}




?>


