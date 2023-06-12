 <?php
    session_start();

    if (empty($_SESSION['user_id'])) {
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
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="adminStyle.css">
     <title>Document</title>
 </head>

 <body>

     <div class="container">
         <form>
          <ul> 
         <li><button type="submit" name="viewUsers" class="btn btn-primary"><a href="viewUsers.php" style="color: white; text-decoration:none">View Exsisting Users</a></button></li>
         <li><button type="submit" name="addNewUser" class="btn btn-primary"><a href="signupUi.php" style="color: white; text-decoration:none">Add New Uers</a></button></li>
         <li><button type="submit" name="editUser" class="btn btn-primary"><a href="editUsers.php" style="color: white; text-decoration:none">Edit User</a></button></li>
         <li><button type="submit" name="deleteUser" class="btn btn-primary"><a href="deleteUsers.php" style="color: white; text-decoration:none">Delete User</a></button></li>
         </ul> 
         </form>
     </div>

 </body>

 </html>