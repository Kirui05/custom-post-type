<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment 5</title>
    <?php wp_head(); ?>
</head>

<body>

    <nav>
        <h1>Foods</h1>

        <div class="links">
            <?php wp_nav_menu(array([
                'theme_location' => 'primary'
            ])) ?>
        </div>
    </nav>
