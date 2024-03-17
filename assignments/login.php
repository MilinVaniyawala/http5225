<?php
include('admin/config/config.php');
include('admin/config/connect.php');

if (isset($_POST['login'])) {
    $query = 'SELECT * FROM `users` WHERE 
    `email` = "' . $_POST['email'] . '" AND
    `password` = "' . md5($_POST['password']) . '"
    LIMIT 1';
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result)) {
        $record = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $record['user_id'];
        $_SESSION['username'] = $record['username'];
        $_SESSION['email'] = $record['email'];
        $_SESSION['role_id'] = $record['role_id'];
        header('LOCATION: index.php');
        die();
    } else {
        header('LOCATION: login.php');
        die();
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href='./admin/assets/img/favicon.ico'>
    <title> Login | MV Wines </title>
    <link href="./admin/assets/css/style.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Login
                </h1>
            </div>
            <div class="row">
                <form action="" method="POST">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="Email Address">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
                        </div>
                    </div>
                    <button type="submit" name="login" class="btn btn-custom">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>