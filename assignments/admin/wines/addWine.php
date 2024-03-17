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

// Data Fetch From wine_types Table for dropdown
$query_wine_type = 'SELECT * FROM `wine_types`';
$wineTypes = mysqli_query($connect, $query_wine_type);

// Data Fetch From vineyards Table for dropdown
$query_vineyard = 'SELECT * FROM `vineyards`';
$vineYards = mysqli_query($connect, $query_vineyard);

if (isset($_POST['addWine'])) {
    // For Secure Purpose we are using mysqli_real_escape_string() // Attack Like SQL INJECTION
    $wine_insert = 'INSERT INTO `wines` (`name`, `type_id`, `vineyard_id`, `rating`, `price`, `image`) VALUES
    (
        "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['type_id']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['vineyard_id']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['rating']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['price']) . '",
        "' . mysqli_real_escape_string($connect, $_POST['image']) . '"
    )';
    // echo $query;
    $result = mysqli_query($connect, $wine_insert);
    if (!$result) {
        echo mysqli_error($connect);
    } else {
        header('LOCATION: wine.php');
    }
} else {
    // echo "Error!!!";
}
?>

<head>
    <title> Add Wine | MV Wines </title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <h2 class="mt-3 mb-5">
                        Add New Wine
                    </h2>
                </div>
            </div>
            <div class="container">
                <form action="" method="POST">
                    <div class="row">
                        <div class="col mb-3">
                            <!-- Wine Name -->
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required aria-describedby="Enter the name of the wine.">
                        </div>
                        <div class="col mb-3">
                            <!-- Wine Type -->
                            <label for="type_id" class="form-label">Wine Type</label>
                            <select class="form-select" id="type_id" name="type_id" required aria-describedby="Select the type of wine.">
                                <option selected disabled>Select Wine Type</option>
                                <?php while ($type = mysqli_fetch_assoc($wineTypes)) { ?>
                                    <option value="<?php echo $type['id']; ?>"><?php echo $type['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <!-- Vineyard -->
                            <label for="vineyard_id" class="form-label">Vineyard</label>
                            <select class="form-select" id="vineyard_id" name="vineyard_id" required aria-describedby="Select the vineyard of the wine.">
                                <option selected disabled>Select Vineyard</option>
                                <?php while ($vineyard = mysqli_fetch_assoc($vineYards)) { ?>
                                    <option value="<?php echo $vineyard['id']; ?>"><?php echo $vineyard['name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col mb-3">
                            <!-- Rating -->
                            <label for="rating" class="form-label">Rating</label>
                            <input type="range" class="form-range" id="rating" name="rating" min="0" max="100" step="1" aria-describedby="Set the rating of the wine on a scale of 0 to 100.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col mb-3">
                            <!-- Price -->
                            <label for="price" class="form-label">Price</label>
                            <input type="number" class="form-control" id="price" name="price" step="0.01" required aria-describedby="Enter the price of the wine.">
                        </div>
                        <div class="col mb-3">
                            <!-- Image -->
                            <label for="image" class="form-label">Image URL</label>
                            <input type="url" class="form-control" id="image" name="image" onchange="previewImage();" required aria-describedby="Enter the URL of the image of the wine.">
                            <img id="imagePreview" src="#" class="my-3" alt="Image Preview" style="display: none; width: 100px; height: 100px;">
                        </div>
                    </div>
                    <button type="submit" name="addWine" class="btn btn-custom">Submit</button>
                    <button type="button" onclick="window.location.href='wine.php'" class="btn btn-cancel">Cancel</button>
                </form>
            </div>
        </div>
        <?php include("../inc/footer.php"); ?>
    </div>
</body>