<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        if(function_exists('the_custom_logo')) {
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
        } 
    ?>

    <link id="favicon" rel="icon" type="image/svg+xml" href="<?php echo($logo[0]); ?>">

    <?php
        wp_head();
    ?>
</head>
<body>

    <nav class="navigation">
        <a href="/" id="websiteTitle">
            <?php echo(get_bloginfo('name')); ?>
        </a>
    </nav>