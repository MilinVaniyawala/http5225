<!doctype html>
<html>

<head>
    <title>PHP and For Loops</title>
</head>

<body>

    <h1>PHP and For Loops</h1>

    <p>Use PHP echo, if statements, and loops to output all three links.</p>


    <?php

    // **************************************************
    // Do not edit this code

    // Define a multi dimensional array to store all of the links
    $links = array(
        0 => array(
            'name' => 'Codecademy',
            'url' => 'https://www.codecademy.com/',
            'image' => '',
            'description' => 'Learn to code interactively, for free.'
        ),
        1 => array(
            'name' => '',
            'url' => 'https://www.w3schools.com/',
            'image' => 'w3schools.png',
            'description' => 'W3Schools is optimized for learning, testing, and training.'
        ),
        2 => array(
            'name' => 'Mozilla Developer Network',
            'url' => 'https://www.codecademy.com/',
            'image' => 'mozilla.png',
            'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.'
        )
    );

    // **************************************************

    // Loop through the array and display the link information
    for ($i = 0; $i < count($links); $i++) {

        // Note that this block of code is almost identical to the php-if-switch examples

        // If there is not title, use the link URL as a title
        if ($links[$i]['name'] == "") {
            echo '<h2>' . $links[$i]['url'] . '</h2>';
        }
        // If there is a title output the title using h2
        else {
            echo '<h2>' . $links[$i]['name'] . '</h2>';
        }

        // If there is an image, output the image
        // If there is not image, output nothing
        if ($links[$i]['image']) {
            echo '<img src="' . $links[$i]['image'] . '" width="200">';
        }

        // If there is a description, output the description
        if ($links[$i]['description']) {
            echo '<p>' . $links[$i]['description'] . '</p>';
        }

        // If there is a link output the URL and make it clickable
        if ($links[$i]['url']) {

            // If there is a title use the title as the link
            if ($links[$i]['name']) {
                echo '<p><a href="' . $links[$i]['url'] . '">Visit ' . $links[$i]['name'] . '</a></p>';
            }

            // If there is no name, use the URL
            else {
                echo '<p><a href="' . $links[$i]['url'] . '">Visit ' . $links[$i]['url'] . '</a></p>';
            }
        }

        echo '<hr>';
    }

    // Use the print_r function to view the contents of the array
    echo '<pre>';
    print_r($links);
    echo '</pre>';

    ?>

</body>

</html>