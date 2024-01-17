<!doctype html>
<html>

<head>

    <title>PHP and Creating Output</title>

</head>

<body>
    <?php echo '<h1>PHP and Creating Output</h1>'; ?>

    <?php echo '<p>The PHP echo command can be used to create output.</p>'; ?>

    <?php echo '
    <p>When creating output using echo and PHP, quotes can often cause problems. There are several solutions to using quotes within an echo statement:</p>
    '; ?>

    <?php echo '
    <ul>
        <li>Use HTML special characters</li>
        <li>Alternate between single and double quotes</li>
        <li>Use a backslash to escape quotes</li>
    </ul>'; ?>

    <h2>More HTML to Convert</h2>

    <p>PHP says "Hello World!"</p>

    <?php echo '<p>Can you display a sentence with \' and "?</p>'; ?>


    <?php $url = "https://google.com"; ?>

    <a href=<?php $url; ?>>
        <img src="<?php echo 'https://placehold.co/300x400'; ?>">
    </a>

    <!-- =========== PHP Variables and Arrays =========== -->
    <?php
    $linkName = 'Codecademy';
    $linkURL = 'https://www.codecademy.com/';
    $linkImage = 'codecademy.png';
    $linkDescription = 'Learn to code interactively, for free.';

    $person['first'] = 'Jane';
    $person['last'] = 'Doe';
    $person['email'] = 'jane.doe@email.com';
    $person['age'] = 30;
    ?>

    <h1>
        <?php echo $linkName; ?>
    </h1>

    <?php echo '<h1>' . $linkName . '</h1>'; ?>

    <?php echo '<h2>Hello, ' . $person['first'] . ' ' . $person['last'] . '</h2>'; ?>
</body>

</html>