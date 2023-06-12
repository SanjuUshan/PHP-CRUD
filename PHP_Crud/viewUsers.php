 <?php
include_once('connection.php');
?>
<?php 
$sql = "SELECT * FROM users";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;

        }
        .container{
            display: flex;
    justify-content: center;
    align-items: center;
    background: white;
    opacity: 0.9;
    border: 0 none;
    border-radius: 3px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 10px;
    box-sizing: border-box;
    width: 95%;
    margin: 7% 20% 0% 10%;
    display: block;
    position: relative;
        }
        .heding h3{
            color: black;
        
        }
  

    </style>
</head>

<body>
   
<?php 
    include_once('nav.php');
    ?>
    <div class="container">
    <div class="heding">
    <h3>User's Details</h3>
    </div class="table-div">
<table class="table">
  <thead>
    <tr>
      <th scope="col">User_ID</th>
      <th scope="col" >User Name</th>
      <th scope="col">Mobile Number</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $i = 0;
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $row["user_id"]; ?></th>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["mobile"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
      
    </tr>
    <?php 
    $i++;
}
    
    ?>
   
  </tbody>
</table>

</div>
<?php
}
else{
    echo "No result found";
}
?>

</body>

</html>