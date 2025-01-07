<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head();?>

</head>
<body>

<header>

<div class="container">
    <img src="http://esser-digital.test/wp-content/uploads/2024/12/esser-digital-logo.png" alt="esser-digital-logo">
    <?php
    wp_nav_menu(

        array(
            'theme_location' => 'top-menu',
            'menu_class' => 'top-bar',
        )
        );
        ?>
</div>
</header>