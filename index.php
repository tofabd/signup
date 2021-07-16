<?php
session_start();

if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
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
        <div class="card m-5 p-0" style="width: 80rem;">
            <div class="card-header  text-white bg-primary text-center fs-2 fw-bold">
                Home Page
            </div>
            <!-- notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="error success">
                    <h3>
                        <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                        ?>
                    </h3>
                </div>
            <?php endif ?>
            <div class="card-body">
                <!-- logged in user information -->
                <?php if (isset($_SESSION['email'])) : ?>
                    <h5 class="card-title">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h5>
                    <p><a href="index.php?logout='1'" style="color: red;">logout</a></p>
                <?php endif ?>
            </div>
        </div>
    </div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>