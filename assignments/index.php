<?php
include("./admin/inc/header.php");
include("./admin/config/connect.php");
?>

<!-- Product Section -->
<div class="container my-4">
    <!-- Page Heading -->
    <h1 class="display-4 text-center mb-5">Welcome to Wine Store</h1>

    <!-- Wine Products Section -->
    <div class="row">
        <?php
        // Query to fetch wine products with details
        $query = "SELECT wines.name AS wine_name, wine_types.name AS type, vineyards.name AS vineyard, wines.rating, wines.price, wines.image
                    FROM wines
                    JOIN wine_types ON wines.type_id = wine_types.id
                    JOIN vineyards ON wines.vineyard_id = vineyards.id";
        $result = mysqli_query($connect, $query);

        // Check have data or not ?
        if (mysqli_num_rows($result) > 0) {
            // Output data of each row
            foreach ($result as $wine) {
        ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card wine-card">
                        <img src="<?php echo $wine['image']; ?>" class="card-img-top" alt="<?php echo $wine['wine_name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $wine['wine_name']; ?></h5>
                            <p class="card-text">Type: <?php echo $wine['type']; ?></p>
                            <p class="card-text">Vineyard: <?php echo $wine['vineyard']; ?></p>
                            <p class="card-text">Rating: <?php echo $wine['rating']; ?></p>
                            <p class="card-text">Price: $<?php echo $wine['price']; ?></p>
                        </div>
                    </div>
                </div>
        <?php
            }
        } else {
            echo "0 results";
        }
        // Close the database connection
        $connect->close();
        ?>
    </div>
</div>