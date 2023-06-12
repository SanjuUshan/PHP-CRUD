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

    <div class="container">
    <h2>Sign-up Here</h2>
        <form action="registration.php" method="POST">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Enter your Name </label>
                <input type="text" name="name"  class="form-control" id="formGroupExampleInput" placeholder="Your name ">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter your Mobile </label>
                <input type="text" name="mobile"  class="form-control" id="formGroupExampleInput2" placeholder="Mobile number">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter your Email</label>
                <input type="email" name="email"  class="form-control" id="formGroupExampleInput2" placeholder="abc@gmail.com">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Enter Your Password</label>
                <input type="password" name="password" class="form-control" id="formGroupExampleInput2" placeholder="password">
            </div>

            <button type="submit" name="signup" class="btn btn-primary">Signup</button>

        </form>
        <!--Display error message if applicable -->
        <?php if(isset($error_message)): ?>
            <p><?php echo $error_message; ?></p>
            <?php endif; ?>
    </div>
</body>

</html>