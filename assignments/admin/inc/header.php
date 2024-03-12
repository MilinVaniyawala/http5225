<?php
if(isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: login.php");
    exit; 
}
$path = $_SERVER['DOCUMENT_ROOT'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Default CSS -->
    <link href="./admin/assets/css/style.css" type="text/css" rel="stylesheet">
    <title>MV Wines</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container container-fluid">
            <a class="navbar-brand" href="./">MV Wines</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if(!empty($_SESSION)) { 
                    if($_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 2) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./admin/users/user.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./">Wines</a>
                            </li>
                        </ul>
                        <form class="d-flex align-items-center gap-1" action="" method="POST">
                            <h6 class="m-0"> Welcome back, <?php echo $_SESSION['username']. "!!!";?></h6>
                            <button type="submit" name="logout" class="btn btn-custom">Logout</button>
                        </form>
                    <?php } else { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="./">Home</a>
                            </li>
                        </ul>
                        <form class="d-flex align-items-center gap-1" action="" method="POST">
                            <h6 class="m-0"> Welcome back, <?php echo $_SESSION['username']. "!!!";?></h6>
                            <button type="submit" name="logout" class="btn btn-custom">Logout</button>
                        </form>
                    <?php } 
                } else { ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Home</a>
                        </li>
                    </ul>
                    <form class="d-flex" action="login.php" method="POST">
                        <button type="submit" class="btn btn-custom">Login</button>
                    </form>
                <?php } ?>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>