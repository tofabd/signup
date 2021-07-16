<?php
session_start();

$errors = [];
$db = mysqli_connect('localhost', 'root', '', 'mydb');
// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "Email is required");
    }


    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);


        if (mysqli_num_rows($results) == 1) {
            $results= mysqli_fetch_assoc($results);
            $_SESSION['email'] = $email;
            $_SESSION['username'] = $results['username'];
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');
        } else {
            array_push($errors, "Wrong email/password combination");
        }
    }
}
