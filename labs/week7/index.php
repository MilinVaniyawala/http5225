<?php

include('admin/inc/connect.php');
include('admin/inc/functions.php');

if (isset($_POST['login'])) {
    $query = 'SELECT * FROM `users` WHERE 
    `email` = "' . $_POST['email'] . '" AND
    `password` = "' . md5($_POST['password']) . '"
    LIMIT 1';
    echo $query;
    $result = mysqli_query($connect, $query);

    if (mysqli_num_rows($result)) {
        $record = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $record['id'];
        header('LOCATION: admin/index.php');
        set_message("User Logged in Successfully!!", 'alert-success');
        die();
    } else {
        set_message("Username / Password not found.", 'alert-danger');
        header('LOCATION: index.php');
        die();
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php echo get_message(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Login
                </h1>
                <div class="row">
                    <form method="POST" action="">
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
                        <button type="submit" name="login" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>