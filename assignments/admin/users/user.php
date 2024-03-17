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

// Delete functionality
if (isset($_POST['deleteUser'])) {
    $user_id = $_POST['user_id'];
    $query = "DELETE FROM users WHERE user_id = $user_id";
    $result = mysqli_query($connect, $query);

    // if ($result) {
    //     echo '<div class="alert alert-success" role="alert">User deleted successfully!</div>';
    // } else {
    //     echo '<div class="alert alert-danger" role="alert">Failed to delete user!</div>';
    // }
} else {
    // echo "error!!";
}

$query = 'SELECT u.*, r.role_name 
          FROM users u 
          JOIN roles r ON u.role_id = r.role_id';

$users = mysqli_query($connect, $query);
?>

<head>
    <title> Users | MV Wines </title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center my-4">
                    <h3 class="mb-0">All Users</h3>
                    <form action="addUser.php" method="POST">
                        <button type="submit" class="btn btn-custom btn-add">Add New User</button>
                    </form>
                </div>
            </div>
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <caption>List of users</caption>
                        <thead>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Username
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Role
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Check have data or not ?
                            if (mysqli_num_rows($users) > 0) {
                                foreach ($users as $user) {
                                    echo '<tr>';
                                    echo '<td>' . $user['user_id'] . '</td>';
                                    echo '<td>' . $user['username'] . '</td>';
                                    echo '<td>' . $user['email'] . '</td>';
                                    echo '<td>' . $user['role_name'] . '</td>';
                                    echo '<td class="d-flex gap-1">';
                                    echo '<form action="updateUser.php" method="GET">
                            <input type="hidden" name="user_id" value="' . $user['user_id'] . '">
                            <button type="submit" class="btn btn-custom btn-update"><i class="bi bi-pencil-square"></i></button>
                            </form>';
                                    echo '<form action="" method="POST">
                            <input type="hidden" name="user_id" value="' . $user['user_id'] . '">
                            <button type="submit" name="deleteUser" class="btn btn-custom btn-delete"><i class="bi bi-trash"></i></button>
                            </form>';
                                    echo '</td>';
                                    echo '</tr>';
                                }
                            } else {
                                echo '<tr><td colspan="5">0 results</td></tr>';
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include("../inc/footer.php"); ?>
    </div>
</body>