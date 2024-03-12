<?php
include("../config/config.php");
include("../inc/header.php");
include("../config/connect.php");

$query = 'SELECT u.*, r.role_name 
          FROM users u 
          JOIN roles r ON u.role_id = r.role_id';

$users = mysqli_query($connect,$query);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Users | MV Wines </title>
    <link href="../assets/css/style.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
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
                foreach ($users as $user) {
                    echo '<tr>';
                    echo '<td>'.$user['user_id'].'</td>';
                    echo '<td>'.$user['username'].'</td>';
                    echo '<td>'.$user['email'].'</td>';
                    echo '<td>'.$user['role_name'].'</td>';
                    echo '<td class="d-flex gap-2">';
                    echo '<form action="addUser.php" method="POST">
                            <button type="submit" class="btn btn-custom">Add</button>
                            </form>';
                    echo '<form action="updateUser.php" method="GET">
                            <input type="hidden" name="user_id" value="' . $user['user_id'] . '">
                            <button type="submit" class="btn btn-custom">Update</button>
                            </form>';
                    echo '</td>';
                    echo '</tr>';
                } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

<?php
include('../inc/footer.php');