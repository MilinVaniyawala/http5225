<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-2 mt-3 mb-3">
                        PHP Loops
                    </h1>
                </div>
            </div>
            <div class="row">
                <?php
                function getUsers()
                {
                    $url = 'http://localhost/http5225/labs/week4/users.json';
                    $data = file_get_contents($url);

                    // Decode Json Data 
                    return json_decode($data, true);
                }

                $users = getUsers();
                echo '<div class="container-fluid">
                        <div class="container">
                        <div class="row gap-4">';
                foreach ($users as $user) {
                    echo '<div class="card" style="width: 18rem;">';
                    echo '<div class="card-body">';
                    echo '<img src="..." class="card-img-top" alt="...">';
                    echo '<h5 class="card-title">' . $user['username'] . '</h5>';
                    echo '<a href="mailto:' . $user['email'] . '">' . $user['name'] . '</a>';
                    echo '<br/>';
                    echo '<a href="tel:' . $user['phone'] . '">' . $user['phone'] . '</a>';
                    echo '<p class="card-text">' . $user['address']['suite'] . ' ' . $user['address']['street'] . ' ' . $user['address']['city'] . ' ' . $user['address']['zipcode'] . '</p>';
                    echo '<hr>';
                    echo '<h5 style="color:green">' . "Company Information" . '</h5>';
                    echo '<hr>';
                    echo '<h6 class="card-sub-title">' . $user['company']['name'] . '</h6>';
                    echo '<p class="card-text">' . $user['company']['catchPhrase'] . '</p>';
                    echo '<p class="card-text">' . $user['company']['bs'] . '</p>';
                    echo '<a href="' . $user['website'] . '" class="btn btn-primary">' . $user['website'] . '</a>';
                    echo '</div></div>';
                }
                echo '</div></div></div>';
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>