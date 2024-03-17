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
if (isset($_POST['deleteWine'])) {
    $wine_id = $_POST['wine_id'];
    $query = "DELETE FROM wines WHERE id = $wine_id";
    $result = mysqli_query($connect, $query);

    // if ($result) {
    //     echo '<div class="alert alert-success" role="alert">Wine deleted successfully!</div>';
    // } else {
    //     echo '<div class="alert alert-danger" role="alert">Failed to delete wine!</div>';
    // }
} else {
    // echo "error!!";
}

// Query to fetch wine products with details
$query = "SELECT wines.id AS wine_id,wines.name AS wine_name, wine_types.name AS type, vineyards.name AS vineyard, wines.rating, wines.price, wines.image
            FROM wines
            JOIN wine_types ON wines.type_id = wine_types.id
            JOIN vineyards ON wines.vineyard_id = vineyards.id ORDER BY wines.id";

$result = mysqli_query($connect, $query);
?>

<head>
    <title> Wines | MV Wines </title>
</head>

<body>
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-4">
            <h3 class="mb-0">All Wines</h3>
            <form action="addWine.php" method="POST">
                <button type="submit" class="btn btn-custom btn-add">Add New Wine</button>
            </form>
        </div>
    </div>
    <div class=" container">
        <div class="table-responsive">
            <table class="table table-bordered">
                <caption>List of wines</caption>
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Image
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Type
                        </th>
                        <th>
                            Vineyard
                        </th>
                        <th>
                            Price
                        </th>
                        <th colspan="2">
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Check have data or not ?
                    if (mysqli_num_rows($result) > 0) {
                        // Output data of each row

                        foreach ($result as $wine) {
                            echo '<tr>';
                            echo '<td>' . $wine['wine_id'] . ' </td>';
                            echo '<td class="wine-table-data-img">';
                            echo '<img src=' . $wine['image'] . ' class="img-fluid wine-table-img" alt=' . $wine['wine_name'] . '>';
                            echo '</td>';
                            echo '<td>' . $wine['wine_name'] . ' </td>';
                            echo '<td>' . $wine['type'] . ' </td>';
                            echo '<td>' . $wine['vineyard'] . ' </td>';
                            echo '<td>' . $wine['price'] . ' </td>';
                            echo '<td colspan="2">';
                            echo '<div class="d-flex gap-1">';
                            echo '<form action="updateWine.php" method="GET">
                            <input type="hidden" name="id" value="' . $wine['wine_id'] . '">
                            <button type="submit" class="btn btn-custom btn-update"><i class="bi bi-pencil-square"></i></button>                            
                            </form>';
                            echo '<form action="" method="POST">
                            <input type="hidden" name="wine_id" value="' . $wine['wine_id'] . '">
                            <button type="submit" name="deleteWine" class="btn btn-custom btn-delete"><i class="bi bi-trash"></i></button>
                            </form>';
                            echo '</div>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo '<tr><td colspan="8">0 results</td></tr>';
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    </div>
</body>

<?php
include("../inc/footer.php");
