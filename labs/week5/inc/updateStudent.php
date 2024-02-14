<?php
require_once 'connect.php';

if (isset($_POST['updateGrade'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $marks = $_POST['marks'];
    $imageURL = $_POST['imageURL'];

    $query = "UPDATE `students` SET `fname`='$fname',`lname`='$lname',`marks`='$marks',`imageURL`='$imageURL' WHERE `id`='$id'";
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
