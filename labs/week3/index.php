<!doctype html>
<html>

<head>
    <title>PHP If Statements</title>
</head>

<body>

    <h1>PHP If Statements</h1>

    <p>Use PHP echo and variables to output the following link information, use if statements to make sure everything outputs correctly:</p>

    <?php

    // **************************************************
    // Do not edit this code

    // Generate a random number (1, 2, or 3)
    $randomNumber = ceil(rand(1, 3));

    // Display the random number
    echo '<p>The random number is ' . $randomNumber . '.</p>';

    // Based on the random number PHP will define four variables and fill them with information about Codecademy, W3Schools, or MDN

    // The random number is 1, so use Codecademy
    if ($randomNumber == 1) {

        $linkName = 'Codecademy';
        $linkURL = '';
        $linkImage = '';
        $linkDescription = 'Learn to code interactively, for free.';
        $linkCTA = 'Codecademy.com';
    }

    // The random number is 2, so use W3Schools
    elseif ($randomNumber == 2) {

        $linkName = '';
        $linkURL = 'https://www.w3schools.com/';
        $linkImage = 'w3schools.png';
        $linkDescription = 'W3Schools is optimized for learning, testing, and training.';
        $linkCTA = 'w3schools.com';
    }

    // The random number is 3, so use MDN
    else {

        $linkName = 'Mozilla Developer Network';
        $linkURL = 'https://www.codecademy.com/';
        $linkImage = 'mozilla.png';
        $linkCTA = 'MDN.com';
        $linkDescription = 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.';
    }

    // **************************************************

    // Beginning of the exercise, place all of your PHP code here
    // Upload this page (or use your localhost) and refresh the page, the h2 below will change
    echo '<h2>' . $linkName . '</h2>';

    if ($linkURL !== "") {
        echo '<a href="' . $linkURL . '">' . $linkCTA . '</a>';
    } else {
        echo '<h6>' . $linkCTA . '</h6>';
    }


    echo '<img src="' . $linkImage . '"width="200">';
    echo '<p>' . $linkDescription . '</p>';

    echo '<hr>';
    // Generate a number between 1 to 100 for creating percentage
    $randomMarks = ceil(rand(1, 100));

    // Logic to build percentage
    if ($randomMarks < 60) {
        $message = "Sorry!! you are fail the exam with " . $randomMarks . " % and your grade is F.";
    } else if ($randomMarks > 60 && $randomMarks < 71) {
        $message = "Good!! You are successfully pass the exam with " . $randomMarks . " % and your grade is E.";
    } else if ($randomMarks > 70 && $randomMarks < 76) {
        $message = "Very Good!! You are successfully pass the exam with " . $randomMarks . " % and your grade is D.";
    } else if ($randomMarks > 75 && $randomMarks < 81) {
        $message = "Bravo!! You are successfully pass the exam with " . $randomMarks . " % and your grade is C.";
    } else if ($randomMarks > 80 && $randomMarks < 86) {
        $message = "Excellent!! You are successfully pass the exam with " . $randomMarks . " % and your grade is B.";
    } else if ($randomMarks > 85 && $randomMarks < 91) {
        $message = "Amazing!! You are successfully pass the exam with " . $randomMarks . " % and your grade is A.";
    } else {
        $message = "Congratulations!! You are successfully pass the exam with " . $randomMarks . " % and your grade is A+.";
    }

    if ($randomMarks < 60) {
        echo '<h4 style="color: red">' . $message . '</h4>';
    } else {
        echo '<h4 style="color: green">' . $message . '</h4>';
    }

    echo "<hr>";
    // Switch Example
    $getDay = ceil(rand(1, 7));
    switch ($getDay) {
        case 1:
            echo '<h5>' . "uhh!! It's Monday." . '</h5>';
            break;
        case 2:
            echo '<h5>' . "Great!! It's Tuesday." . '</h5>';
            break;
        case 3:
            echo '<h5>' . "Good!! It's Wednesday." . '</h5>';
            break;
        case 4:
            echo '<h5>' . "Very Nice!! It's Thursday." . '</h5>';
            break;
        case 5:
            echo '<h5>' . "Finally!! It's Friday." . '</h5>';
            break;
        case 6:
            echo '<h5>' . "It's Saturday, So It's rest day!!" . '</h5>';
            break;
        case 7:
            echo '<h5>' . "It's Sunday !! , Weekend is over" . '</h5>';
            break;
        default:
            echo '<h5>Something Went Wrong!!</h5>';
            break;
    }

    // ========= Other Way For Image ========= 
    /* ####
    ?>

    <img src="<?php echo $linkImage; ?>" width="200" alt="">

    <?php 
    #### */

    ?>



</body>

</html>