<?php 
session_start();

if(empty($_SESSION['user_id'])){
    //redirect user backto login interface 
    header('location:index.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    include_once('nav.php');
    ?>
    hello i am user
</body>
</html>