<?php 
include_once('connection.php');
if(count($_POST)>0){
    $user_id = $_POST['user_id'];
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $sql ="UPDATE users SET user_id = '" .$_POST['user_id'] ."',name ='" .$_POST['name']."',mobile ='" .$_POST['mobile']."',email ='" .$_POST['email']."',password ='" .$_POST['password']."' WHERE user_id ='".$_POST['user_id'];
    $sql ="UPDATE users SET user_id = $user_id, name ='$name',mobile ='$mobile',email ='$email',password = '$password' WHERE user_id = $user_id";
    // $result= mysqli_query($conn,$sql);
    $message = "Record Modified Successfully";
    if(mysqli_query($conn,$sql)){
                 header('location:editUsers.php');
        
             }else{
                 die(mysqli_error($conn));
             }

}

$result = mysqli_query($conn,"SELECT * FROM users WHERE user_id='" .$_GET['update_id']."'");

$row=mysqli_fetch_array($result);
// $user_id = $_GET['updateUser_id'];
// $result = mysqli_query($conn,"SELECT * FROM users WHERE user_id=$user_id;");
// $row= mysqli_fetch_assoc($result);
// $name= $row['name'];
// $mobile= $row['mobile'];
// $email= $row['email'];
// $password= $row['password'];


// if(isset($_GET['submit'])){
//     $user_id = $_GET['updateUser_id'];
//     $name = $_POST['name'];
//     $mobile = $_POST['mobile'];
//     $email = $_POST['email'];
//     $password = $_POST['password'];

//     $sql = "UPDATE users SET user_id = $user_id, name='$name',mobile='$mobile',email = '$email',password='$password' WHERE user_id=$user_id";
//     $result = mysqli_query($conn,$sql);

//     if($result){
//         header('location:editUsers.php');

//     }else{
//         die(mysqli_error($conn));
//     }
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="signupStyle.css">
</head>

<body>
    <div>
    <?php if(isset($message)) { echo $message; } ?>
    </div>


    <div class="container">
    <h2>Edit Here</h2>
        <form action="" method="POST">
            <div class="mb-3">
            <input type="hidden" name="user_id"  class="form-control" id="formGroupExampleInput" value="<?php echo $row['user_id'] ;?>">
                <label for="formGroupExampleInput" class="form-label">Enter your Name </label>
                <input type="text" name="name"  class="form-control" id="formGroupExampleInput" placeholder="Your name " value="<?php echo $row['name'] ;?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter your Mobile </label>
                <input type="text" name="mobile"  class="form-control" id="formGroupExampleInput2" placeholder="Mobile number" value="<?php echo $row['mobile'] ;?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter your Email</label>
                <input type="email" name="email"  class="form-control" id="formGroupExampleInput2" placeholder="abc@gmail.com" value="<?php echo $row['email'] ;?>">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter Your Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password" value="<?php echo $row['password'];?>">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>

        </form>
        <!--Display error message if applicable -->

    </div>
</body>

</html>