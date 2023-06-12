<?php 

include_once('connection.php');
if(isset($_GET[ 'delete_id'])){
    $user_id = $_GET['delete_id'];

    $sql = "DELETE FROM users WHERE user_id ='$user_id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        // echo "Delete Successfully";
        header('location:deleteUsers.php');

    }else{
        die(mysqli_error($conn));
    }
}



?>