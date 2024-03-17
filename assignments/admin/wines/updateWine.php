<?php
include("../config/config.php");
include("../inc/header.php");
include("../config/connect.php");

/* Get Wine Data */
$wine_id = $_GET['id'];

$query = 'SELECT * FROM `wines` Where `id` = ' . $wine_id . '';
$wineData = mysqli_query($connect, $query);
$wine_result = $wineData->fetch_assoc();

// Data Fetch From wine_types Table for dropdown
$query_wine_type = 'SELECT * FROM `wine_types`';
$wineTypes = mysqli_query($connect, $query_wine_type);

// Data Fetch From vineyards Table for dropdown
$query_vineyard = 'SELECT * FROM `vineyards`';
$vineYards = mysqli_query($connect, $query_vineyard);

/* After Submit */
if (isset($_POST['updateWine'])) {
    // For Secure Purpose we are using mysqli_real_escape_string() 
    // Attack Like SQL INJECTION
    $wine_update = 'UPDATE `wines` 
    SET `name` = "' . mysqli_real_escape_string($connect, $_POST['name']) . '",
        `type_id`="' . mysqli_real_escape_string($connect, $_POST['type_id']) . '",
        `vineyard_id`="' . mysqli_real_escape_string($connect, $_POST['vineyard_id']) . '", 
        `rating`= "' . mysqli_real_escape_string($connect, $_POST['rating']) . '",
        `price`="' . mysqli_real_escape_string($connect, $_POST['price']) . '",
        `image`="' . mysqli_real_escape_string($connect, $_POST['image']) . '"
        WHERE `id` = ' . $wine_id . '';

    // echo $query;
    $result = mysqli_query($connect, $wine_update);

    if (!$result) {
        echo mysqli_error($connect);
    } else {
        header('LOCATION: wine.php');
    }
} else {
    // echo "Error!!!";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Update Wine | MV Wines </title>
    <link href="../assets/css/style.css" rel="stylesheet" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <div class="row">
                <div class="col mb-3">
                    <!-- Wine Name -->
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required aria-describedby="Enter the name of the wine." value=<?php echo $wine_result['name']; ?>>
                </div>
                <div class="col mb-3">
                    <!-- Wine Type -->
                    <label for="type_id" class="form-label">Wine Type</label>
                    <select class="form-select" id="type_id" name="type_id" required aria-describedby="Select the type of wine.">
                        <option selected disabled>Select Wine Type</option>
                        <?php while ($type = mysqli_fetch_assoc($wineTypes)) { ?>
                            <option value="<?php echo $type['id']; ?>" <?php if ($type['id'] == $wine_result['type_id']) echo 'selected'; ?>><?php echo $type['name']; ?></option>
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
                            <option value="<?php echo $vineyard['id']; ?>" <?php if ($vineyard['id'] == $wine_result['vineyard_id']) echo 'selected'; ?>><?php echo $vineyard['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col mb-3">
                    <!-- Rating -->
                    <label for="rating" class="form-label">Rating</label>
                    <input type="range" class="form-range" id="rating" name="rating" min="0" max="100" value="<?php echo $wine_result['rating']; ?>" step="1" aria-describedby="Set the rating of the wine on a scale of 0 to 100.">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <!-- Price -->
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control" id="price" name="price" value="<?php echo $wine_result['price']; ?>" step="0.01" required aria-describedby="Enter the price of the wine.">
                </div>
                <div class="col mb-3">
                    <!-- Image -->
                    <label for="image" class="form-label">Image URL</label>
                    <input type="url" class="form-control" id="image" name="image" value="<?php echo $wine_result['image']; ?>" onchange="previewImage();" required aria-describedby="Enter the URL of the image of the wine.">
                    <img id="imagePreview" src="#" class="my-3" alt="Image Preview" style="display: none; width: 100px; height: 100px;">
                </div>
            </div>
            <button type="submit" name="updateWine" class="btn btn-custom">Submit</button>
            <button type="button" onclick="window.location.href='wine.php'" class="btn btn-cancel">Cancel</button>
        </form>
    </div>

    <!-- Script -->
    <script src="../assets/js/script.js"></script>
</body>
<?php
include('../inc/footer.php');
