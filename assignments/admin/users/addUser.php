<?php
include("../config/config.php");
include("../inc/header.php");
include("../config/connect.php");

/* Only Admin User Have Access to this page */
if (isset($_SESSION['role_id'])) {
    if ($_SESSION['role_id'] == 3) {
        // Redirect to the login page
        header("Location: http://localhost/http5225/assignments");
    }
} else {
    // Redirect to the login page
    header("Location: http://localhost/http5225/assignments");
}

if (isset($_POST['addUser'])) {
    // For Secure Purpose we are using mysqli_real_escape_string() // Attack Like SQL INJECTION
    $query = 'INSERT INTO `users` (`username`, `password`, `email`, `role_id`) VALUES 
    (
        "' . mysqli_real_escape_string($connect, $_POST['username']) . '",
        "' . md5($_POST['password']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['email']) . '",
        "' . mysqli_real_escape_string($connect, (int)$_POST['role_id']) . '"
    )';
    // echo $query;
    $result = mysqli_query($connect, $query);

    if (!$result) {
        echo mysqli_error($connect);
    } else {
        header('LOCATION: user.php');
    }
} else {
    // echo "Error!!!";
}
?>

<head>
    <title> Add User | MV Wines </title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <h2 class="mt-3 mb-5">
                        Add New User
                    </h2>
                </div>
            </div>
            <div class="container">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col mb-3">
                            <!-- USERNAME -->
                            <label for="uname" class="form-label">Username</label>
                            <input type="text" class="form-control" id="uname" name="username" aria-describedby="Username">
                        </div>
                        <div class="col mb-3">
                            <!-- EMAIL -->
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="Email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <!-- PASSWORD -->
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" aria-describedby="Password">
                        </div>
                        <div class="col mb-3">
                            <!-- ROLE -->
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" id="role" name="role_id" aria-describedby="Role">
                                <option value=1>Admin</option>
                                <option value=2>Subadmin</option>
                                <option value=3>User</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" name="addUser" class="btn btn-custom">Submit</button>
                    <button type="button" onclick="window.location.href='user.php'" class="btn btn-cancel">Cancel</button>
                </form>
            </div>
        </div>
        <?php include("../inc/footer.php"); ?>
    </div>
</body>