<?php
include("./admin/config/config.php");
include("./admin/inc/header.php");
include("./admin/config/connect.php");
?>

<!-- Product Section -->
<div class="container container-fluid">
    <!-- Page Heading -->
    <div class="row align-items-center">
        <div class="col-md">
            <!-- Unsplash Image -->
            <img src="./admin/assets/img/wineonblacktable.jpg" alt="Wine Bottle On Black Table" class="d-block w-100 img-fluid">
        </div>
        <div class="col-md d-flex flex-column ">
            <p class="text-muted mb-3">Welcome to MV Wines, where we craft high-quality, affordable wines for every moment that matters. We offer a diverse range of options to suit every taste preference.</p>
            <p class="text-muted mb-3">Our skilled winemakers spend a great deal of time in the vineyard, ensuring our grapes are at their peak for color, taste, and quality. We are committed to delivering superior quality wines at great value, while providing a positive experience to consumers.</p>
            <p class="text-muted mb-3">At MV Wines, we believe in preserving and enhancing the land for future generations to enjoy, adhering to sustainable practices that are environmentally sound, economically feasible, and socially equitable.</p>
        </div>
    </div>
</div>
<div class="container my-4 container-fluid">
    <h1 class="display-4 text-center mb-5">Our Products</h1>

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
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="card wine-card">
                        <div class="wine-card-img-container p-2">
                            <img src="<?php echo $wine['image']; ?>" class="rounded mx-auto card-img-top img-fluid" alt="<?php echo $wine['wine_name']; ?>">
                        </div>
                        <div class="card-body wine-card-content">
                            <h5 class="card-title"><?php echo $wine['wine_name']; ?></h5>
                            <h6 class="sub-title"><?php echo $wine['type'] . " Wine"; ?></h6>

                            <p class="card-text p-0 m-0"> <?php echo $wine['vineyard'] . " Vineyard"; ?></p>


                            <div class="rating">
                                <?php
                                // Convert percentage rating to stars
                                $stars = percentageToStars($wine['rating']);
                                // Loop to display filled stars
                                for ($i = 1; $i <= 5; $i++) {
                                    if ($i <= $stars) {
                                        echo '<i class="bi bi-star-fill filled"></i>';
                                    } else {
                                        echo '<i class="bi bi-star"></i>';
                                    }
                                }
                                ?>
                            </div>
                            <p class="card-text"> <strong> $<?php echo $wine['price']; ?></strong></p>
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

<!-- Footer -->
<?php
include("./admin/inc/footer.php");

// For ratings created function
function percentageToStars($percentage)
{
    return round($percentage / 20, 1);
}
