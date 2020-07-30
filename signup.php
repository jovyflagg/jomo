<?php require 'controllers/authController.php';?>

<!doctype html>
<html lang="en">
  <head>
    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>

<br/>
<div class="container">
    <div class="row">
        <div class= "col-md-4 offset-md-4 form-div">
            <form action="signup.php" method="post">
                <h3 class="text-center">Register</h3>

                <?php if (count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                        <li><?php echo $error ?></li>
                    <?php endforeach; ?>
                </div>
                <?php endif;?>

                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control form-control-lg" name="username" value="<?php echo $username; ?>" id="username" >
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control form-control-lg" name="email" value="<?php echo $email; ?>" id="email" >
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control form-control-lg" name="password" id="password" >
                </div>
                <div class="form-group">
                  <label for="confirmPassword">Confirm Password</label>
                  <input type="password" class="form-control form-control-lg" name="confirmPassword" id="confirmPassword" >
                </div>
                <div class="form-group">
                  <button type="submit" name="signup-btn" class="btn btn-primary btn-block btn-lg">Sign Up</button>
                </div>
                <p class="text-center">Already a member?   <a href="login.php">Sign in</a> </p>

            </form>

        </div>
    </div>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
