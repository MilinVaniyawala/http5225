# A Basic Introduction to PHP and For Loops

A basic example of using PHP ifor and while loops.

This tutorial will review how to use for and while loops to repeat blocks of code. Here is a basic sample of using a for loop to repeat a block of code.

```php
<?php 

for ($i = 0; $i < 10; $i++)
{
  echo '<p>This is loop number '.$i.'!</p>';
}

?>
```

This is an example of using a whle to achieve the same result.

```php
<?php

$i = 0;

while ($i < 10)
{
  echo '<p>This is loop number '.$i.'!</p>';
  $i ++;
}

?>
```

## The End Goal

The `for.php` file includes an array with data for three links (Codecademy, W3Schools, and MDN). The array closely resembles data from a MySQL database. 

Similar to the variables, arrays, and if examples, your code needs to output the four values. However, this time it will display all three links at the same time. Your code will need to loop through the three links and then output the link information using the arrays and if statements.

For example the following code loops through an array and outputs the values.

```php
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

for ($i = 0; $i < count($data); $i ++)
{
  echo '<p>'.$data[$i]['name'].' ('.$data[$i]['short'].')</p>';
}

?>
```

If a piece of data is missing, try to think of an alternative. For example if a title is missing, we could use the URL as the title. It's not as good as a title, but it's better than nothing. 

## Steps

1. Open up a new file and name it `for.php`.
2. Add the following code to the new PHP file:
    
    ```php
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
      
      $links = array (
        0 => array (
          'name' => 'Codecademy',
          'url' =>'https://www.codecademy.com/',
          'image' => '',
          'description' => 'Learn to code interactively, for free.' ),
        1 => array ( 
          'name' => '',
          'url' => 'https://www.w3schools.com/',
          'image' => 'w3schools.png',
          'description' => 'W3Schools is optimized for learning, testing, and training.' ),
        2 => array (
          'name' => 'Mozilla Developer Network',
          'url' => 'https://www.codecademy.com/',
          'image' => 'mozilla.png',
          'description' => 'The Mozilla Developer Network (MDN) provides information about Open Web technologies.' )
        );
        
      // **************************************************
    
      for ($i = 0; $i < count ($links); $i ++)
      {
        echo '<h1>'.$links[$i]['name'].'</h1>';
      }
    
      echo '<pre>';
      print_r ($links);
      echo '</pre>';
    
      ?>
        
    </body>
    </html>
    
    ```
    
    > Note: Do not edit the code between the stars. 

3. After the stars, add code that will display the three sets of link information using loops. Notice that some of the values are purposely empty. 

    > Hint: Add each value from the arrays one at a time. Test your PHP after each new line of PHP. 

> [More information on PHP for loops](https://www.php.net/manual/en/control-structures.for.php)

> Full tutorial URL:  
> https://codeadam.ca/learning/php-for-while.html

***

## Repo Resources

* [Visual Studio Code](https://code.visualstudio.com/)
* [Filezilla](https://filezilla-project.org/) (or any FTP program)

<a href="https://codeadam.ca">
<img src="https://codeadam.ca/images/code-block.png" width="100">
</a>
