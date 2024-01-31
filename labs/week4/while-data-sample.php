<!doctype html>
<html>
    <head>
        <title>PHP For Loops</title>
    </head>
    <body>
    
        <h1>PHP For Loops</h1>
        
        <?php

        $data = array (
            array (
                'name' =>'PHP: Hypertext Preprocessor',
                'short' => 'PHP'
            ),
            array (
                'name' => 'Hyper Text Markup Language',
                'short' => 'HTML'
            ),
            array (
                'name' => 'Cascading Stylesheets',
                'short' => 'CSS'
            )
        );

        $i = 0;

        while ($i < count($data))
        {
            echo '<p>'.$data[$i]['name'].' ('.$data[$i]['short'].')</p>';
            $i ++;
        }

        ?>
    
    </body>
</html>
