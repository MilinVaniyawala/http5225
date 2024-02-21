<?php
require_once 'connect.php';
if (isset($_POST['addGrade'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    // $query = "INSERT INTO `students` (`fname`,`lname`,`marks`,`imageURL`) VALUES ('$fname','$lname','$marks','$imageURL')";

    // For Secure Purpose we are using mysqli_real_escape_string() // Attack Like SQL INJECTION
    $query = 'INSERT INTO `students` (`fname`,`lname`,`marks`,`imageURL`) VALUES 
        (
            "' . mysqli_real_escape_string($connect, $fname) . '",
            "' . mysqli_real_escape_string($connect, $lname) . '",
            "' . mysqli_real_escape_string($connect, $marks) . '",
            "' . mysqli_real_escape_string($connect, $imageURL) . '",
        )
    ';
    $student = mysqli_query($connect, $query);

    if ($student) {
        // IF you want redirect on some page after success event we will use this.
        header('Location: ../index.php');
    } else {
        echo mysqli_error($connect);
    }
} else {
    echo "You should not be here!!";
}
