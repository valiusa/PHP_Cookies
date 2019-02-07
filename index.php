<?php
    $cookie_name = 'user';
    $cookie_value = 'Hello World!';
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), '/') // Set cookies
    //setcookie($cookie_name, $cookie_value, time() - 3600); // Delete cookies
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Put Meta tags below this -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>PHP - ReadFile</title>

        <!-- Put Styles and Scripts below this -->
    </head>
    <body>
        <?php
            /*if(!isset($_COOKIE[$cookie_name])) {
                echo "Cookie name ". $cookie_name ." is not set! Reaload the page!";
            }
            else {
                echo "Cookie ". $cookie_name ." is set!";
                echo "Value is: ". $_COOKIE[$cookie_name];
            }*/

            //echo "Cookie ". $cookie_name ." is deleted";

            // Check if cookies are enabled
            if(count($_COOKIE) > 0) {
                echo "Cookies are enabled.";
            }
            else {
                echo "Cookies are disabled!";
            }
        ?>
    </body>
</html>