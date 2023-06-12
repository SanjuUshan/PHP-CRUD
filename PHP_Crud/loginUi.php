<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="loginStyle.css">
</head>

<body>

    <div class="container">
    <h2>Login Here</h2>
        <form action="login.php" method="POST">
            
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter your Email</label>
                <input type="email" name="email"  class="form-control" id="formGroupExampleInput2" placeholder="abc@gmail.com">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter Your Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
            </div>

            <button type="submit" name="login" class="btn btn-primary">Login</button>

        </form>
    </div>
</body>

</html>