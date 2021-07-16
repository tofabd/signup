<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>Registration system PHP and MySQL</title>

    <!-- Custom styles for this template -->

</head>

<body>
<div class="container-sm">


    <div class="row justify-content-center">
        <div class="card m-5 p-0" style="width: 30rem;">
            <div class="card-header  text-white bg-primary text-center fs-2 fw-bold">
                Register
            </div>
            <form class="m-3" method="post" action="register.php">
                <?php include('errors.php'); ?>

                <div class="mb-3">
                    <label for="exampleInputUsername" name="username" class="form-label">Username</label>
                    <input type="test" class="form-control" name="username" id="exampleInputUsername" value="<?php echo $username; ?>">

                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" name="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="<?php echo $email; ?>">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" name="password_1" class="form-label">Password</label>
                    <input type="password" name="password_1" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" name="password_2" class="form-label">Confirm Password</label>
                    <input type="password" name="password_2" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" name="reg_user" class="btn btn-primary">Register</button>
                <p> Already a member? <a href="login.php">Sign in</a></p>
            </form>
        </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>