# MV Wines

## 1. Project Summary

MV Wines is a Laravel web application designed for managing a wine collection. It provides CRUD functionalities for wines, including adding, editing, and deleting entries. Users can also view detailed information about wines, manage trash, and enjoy a simple admin dashboard layout.

## 2. Migration Information

-   **wine**: Table schema for storing wine information, including name, type, vineyard, rating, price, and image.
-   **vineyard**: Table schema for storing vineyard details, such as name and region.
-   **winetype**: Table schema for storing wine type information.

## 3. Model Information

-   **Wine**: Model representing wine entries, with relationships to vineyard and winetype.
-   **Vineyard**: Model representing vineyard details.
-   **Winetype**: Model representing wine type information.

## 4. Factory Information

-   **WineFactory**: Factory for generating fake wine data.
-   **VineyardFactory**: Factory for generating fake vineyard data.
-   **WinetypeFactory**: Factory for generating fake wine type data.

## 5. Data Seeders

-   **DatabaseSeeder**: Seeder class for populating the database with initial data.

## 6. Routing and Authentication

-   **web.php**: Contains route definitions for web routes, including authentication routes.
-   **auth.php**: Contains route definitions for authentication functionality.

## 7. Common Layout File for Views

-   **layouts/admin.blade.php**: Common layout file used for rendering views, including navigation and Toastr notifications.

## 8. All Views

-   **wines**: Contains views for wine-related functionalities, including create, edit, index, and show.

## 9. Controller

-   **WineController**: Controller handling wine-related actions, including CRUD operations, trash, restore, and deletion.

## 10. StoreRequest Files for Store and Update

-   **StoreWineRequest**: Form request class for validating data when storing wine entries.
-   **UpdateWineRequest**: Form request class for validating data when updating wine entries.

## 11. Relationships

-   Relationships defined in the models:
    -   Wine belongs to Vineyard and Winetype.
    -   Vineyard has many wines.
    -   Winetype has many wines.

## 12. Toast Notification

-   Toastr notifications for displaying success, info, and error messages.
