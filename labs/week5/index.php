<?php require_once 'inc/connect.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 5</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include('inc/nav.php'); ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Student Catalog
                </h1>
                <?php
                $sqlQuery = 'Select * From Students';

                $students = mysqli_query($connect, $sqlQuery);
                // echo "<pre>";
                // print_r($students);
                // echo "</pre>";
                ?>
                <div class="row gap-3 d-flex align-items-center justify-content-center text-center">
                    <?php
                    foreach ($students as $student) {
                        if ($student['marks'] <= 50) {
                            $bgClass = 'bg-danger';
                        } else {
                            $bgClass = 'bg-success';
                        }
                        echo '<div class="col-md-4">
                                <div class="card ' . $bgClass . '">
                                    <img src="' . $student['imageURL'] . '" class="card-img-top" alt="Profile Image">
                                    <div class="card-body">
                                        <h5 class="card-title">' . $student['fname'] . ' ' . $student['lname']  . '</h5>
                                        <p class="card-text">Marks: ' . $student['marks'] . ' |  Grade: ' . $student['grade'] . '</p>
                                    </div>
                                    
                                    <div class="card-footer d-flex">
                                        <div class="col">
                                            <form method="GET" action="update.php">
                                                <input type="hidden" name="id" value="' . $student['id'] . '">
                                                <button type="submit" class="btn btn-sm btn-light">
                                                    Update 
                                                </button>
                                            </form>
                                        </div>
                                        <div class="col">
                                            <form method="GET" action="inc/deleteStudent.php">
                                                <input type="hidden" name="id" value="' . $student['id'] . '">
                                                <button type="submit" class="btn btn-sm btn-warning" name="deleteStudent">
                                                    Delete 
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>