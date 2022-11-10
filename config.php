

<!-- connection to database -->
<?php


$dsn = "mysql:host=localhost;dbname=task2";
$user = "root";
$pass= "";

try{
    $con=new PDO ($dsn , $user , $pass);
    // echo "connect";
}catch(PDOException $e){
    echo $e->getMessage();
}


?>