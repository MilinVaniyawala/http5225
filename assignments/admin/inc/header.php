<?php
if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page
    header("Location: http://localhost/http5225/assignments/login.php");
    exit;
}
$path = "http://" . $_SERVER['HTTP_HOST'] . "/http5225/assignments";

// Define an array of page URLs to check against
$pages = array(
    "home" => $path . "/",
    "users" => $path . "/admin/users/user.php",
    "wines" => $path . "/admin/wines/wine.php"
);

// Get the current page URL
$current_url = 'http://localhost' . $_SERVER['REQUEST_URI'];

// Function to check if a given URL is the current page
function isCurrentPage($url)
{
    global $current_url;
    return $current_url == $url;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href=<?php echo $path . '/admin/assets/img/favicon.ico'; ?>>
    <!-- Default CSS -->
    <link href=<?php echo $path . '/admin/assets/css/style.css'; ?> type="text/css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container container-fluid">
            <a class="navbar-brand" href=<?php echo $path; ?>>MV Wines</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if (!empty($_SESSION)) {
                    if ($_SESSION['role_id'] == 1 || $_SESSION['role_id'] == 2) { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <?php foreach ($pages as $key => $url) {
                            ?>
                                <li class="nav-item">
                                    <a class="nav-link <?php echo isCurrentPage($url) ? 'active' : ''; ?>" aria-current="page" href="<?php echo $url; ?>"><?php echo ucfirst($key); ?></a>
                                </li>
                            <?php } ?>
                        </ul>
                        <form class="d-flex align-items-center gap-1" action="" method="POST">
                            <h6 class="m-0"> Welcome back, <?php echo $_SESSION['username'] . "!!!"; ?></h6>
                            <button type="submit" name="logout" class="btn btn-custom">Logout</button>
                        </form>
                    <?php } else { ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?php echo isCurrentPage($path) ? 'active' : ''; ?>" aria-current="page" href="<?php echo $path; ?>">Home</a>
                            </li>
                        </ul>
                        <form class="d-flex align-items-center gap-1" action="" method="POST">
                            <h6 class="m-0"> Welcome back, <?php echo $_SESSION['username'] . "!!!"; ?></h6>
                            <button type="submit" name="logout" class="btn btn-custom">Logout</button>
                        </form>
                    <?php }
                } else { ?>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?php echo isCurrentPage($path) ? 'active' : ''; ?>" aria-current="page" href="<?php echo $path; ?>">Home</a>
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
    <script src=<?php echo $path . '/admin/assets/js/script.js'; ?>></script>
</body>

</html>