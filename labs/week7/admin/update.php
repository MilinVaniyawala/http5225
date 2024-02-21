<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Week 7</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php include('inc/nav.php'); ?>
    <?php include('inc/connect.php'); ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-5 mt-3 mb-5">
                    Update Student Grades
                </h1>
            </div>
        </div>
        <?php // Array ( [id] => 4 ) 
        $id = $_GET['id'];

        $sqlQuery = 'SELECT * From `Students` where `id`= ' . $id . '';
        $student = mysqli_query($connect, $sqlQuery);

        $result = $student->fetch_assoc();

        /* === Other Method
        $row = mysqli_fetch_row($student);

        // Array ( [0] => 4 [1] => Ramlaal [2] => Singh [3] => 50 [4] => F [5] => https://cloudflare-ipfs.com/ipfs/Qmd3W5DuhgHirLHGVixi6V76LhCkZUz6pnFt5AJBiyvHye/avatar/541.jpg )
        // print_r($row);

        $fname = $row[1];
        $lname = $row[2];
        $marks = $row[3];
        $imageURL = $row[5];

        === */
        ?>
        <div class="row">
            <div class="col">
                <form method="POST" action="inc/updateStudent.php">
                    <div class="mb-3">
                        <label for="fname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="fname" name="fname" aria-describedby="First Name" value=<?php echo $result['fname']; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="lname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lname" name="lname" aria-describedby="Last Name" value=<?php echo $result['lname']; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="marks" class="form-label">Marks</label>
                        <input type="number" class="form-control" id="marks" name="marks" aria-describedby="Marks" value=<?php echo $result['marks']; ?>>
                    </div>
                    <div class="mb-3">
                        <label for="imageURL" class="form-label">Image URL</label>
                        <input type="text" class="form-control" id="imageURL" name="imageURL" aria-describedby="Image URL" value=<?php echo $result['imageURL']; ?>>
                    </div>
                    <input type="hidden" name="id" value=<?php echo $result['id']; ?>>
                    <button type="submit" name="updateGrade" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>