<?php
session_start();
include_once('connection.php');

// $userEmail = $_POST['email'];
// $userPassword = $_POST['password'];
// // $_SESSION["userEmail"]=$userEmail;
// $fetch_query ="SELECT * FROM users WHERE email = '$userEmail';";

// $fetch_result = mysqli_query($conn,$fetch_query);
// $newPwd = md5($userPassword);

// $nor = mysqli_num_rows($fetch_result);

// if($nor>0){
//     $req = mysqli_fetch_assoc($fetch_result);

//     if($req['password']==$newPwd){

//         if($req['role']== "1"){

//             $_SESSION['email']=$req['email'];
//             $_SESSION['user_id']=$req['user_id'];

//             header('location:Admin.php');

//         }elseif($req['role']== "0"){
//             $_SESSION['email']=$req['email'];
//             $_SESSION['user_id']=$req['user_id'];

//             header('location:User.php');
//         }
        
//     }else{
//         return("Your password is not correct,Please try again!");
//     }
// }else{
//     return("No records are founds!");
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
    $userEmail = $_POST['email'];
    $userPassword = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$userEmail'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify( $userPassword, $user['password'])) {

        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['useremail'] = $user['email'];

        if ($user['role'] === '1') {
            header('Location: Admin.php');
        } else {
            header('Location: User.php');
        }
        exit;
    }
}
?>