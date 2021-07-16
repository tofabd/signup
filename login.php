<?php include('login_server.php') ?>
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
                Login
            </div>
            <form class="m-3" method="post" action="login.php">
                <?php include('errors.php'); ?>

                <div class="mb-3">
                    <label for="exampleInputEmail1" name="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" name="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" name="login_user" class="btn btn-primary px-5">Login</button>
                <p> Not yet a member? <a href="register.php">Sign up</a></p>
            </form>
        </div>
    </div>
</div>
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>