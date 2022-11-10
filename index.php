


<?php include("includes/navbar.php")?>
<?php session_start(); ?>

<?php include("config.php"); ?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email= $_POST['email'];
  $password=sha1( $_POST['password']);
  // echo $password;
  $stmt=$con->prepare("SELECT * FROM `users` WHERE `email`=? AND `password`=? AND `role`!=3");
  $stmt->execute(array($email,$password));
  $user= $stmt->fetch();

  $count= $stmt->rowCount();
  // echo "<pre>";
  // print_r($user);
  // echo "</pre>";

  if ($count==1){
    header("location:dashboard.php");
    $_SESSION['ID']=$user['id']; //from database the user column//
    $_SESSION['USERNAME']=$user['username'];
    $_SESSION['EMAIL']=$user['email'];
    $_SESSION['ROLE']=$user['role'];

  }else{
    echo "<h4 style='color:red;'> sorry you dont have permission</h4>";
  }
}
    

?>




<?php include("includes/header.php"); ?>



    <div class="container w-50 mt-5">
    <form method="POST" action="index.php">
      
     
  <div class="mb-3" >
   
    <input type="email" class="form-control" name= "email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
   
    <input type="password" class="form-control" name ="password">
  </div>
  
  <button type="submit" class="btn btn-primary">submit   </button>
</form>
</div>

<?php include("includes/footer.php"); ?>