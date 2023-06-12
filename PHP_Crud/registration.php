<?php 

include_once("connection.php");

$userName = $_POST['name'];
$userMobile = $_POST['mobile'];
$userEmail = $_POST['email'];
$userPassword = $_POST['password'];

$hashPassword =password_hash($userPassword,PASSWORD_BCRYPT);

$insert_User = "INSERT INTO users VALUES(NULL,'$userName','$userMobile','$userEmail','$hashPassword',0);";
$result = mysqli_query($conn,$insert_User);

if($result){
    header("location:index.php");

}
// $conn;
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     $userName = $_POST['name'];
//     $userMobile = $_POST['mobile'];
//     $userEmail = $_POST['email'];
//     $userPassword = $_POST['password'];
   
    //validate input field
    // if(!empty($userEmail)&& !empty($userPassword)){
        //connect to database
        // if($conn){
        //     //Check if the usename alredy exist
        //     $query = "SELECT * FROM users WHERE name = '$userEmail';";
        //     $result = mysqli_query($conn,$query);

            
            // if($result && mysqli_num_rows($result)==0){
                //Hash the Password 
            //     $hashPassword = password_hash($userPassword,PASSWORD_DEFAULT);

            //     //insert the new user into the database
            //     $insert_query = "INSERT INTO users VALUES('$userName','$userMobile','$userEmail',$hashPassword);";
            //     $final_result= mysqli_query($conn,$insert_query);

            //     if($final_result){
            //         //redirect to the login page
            //         header("location:loginUi.php");
            //         exit();
            //     }
            // }else{
            //     // Display error message if the username is already taken
            //     $error_message = "Username already exists";
            // }
        // }
    // }else{
    //     // Display error message if required fields are empty
    //     $error_message = "Please fill in all the fields";
    // }
// }



?>