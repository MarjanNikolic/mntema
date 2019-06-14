<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title('', true, '') ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<img class="bg_img" src="<?php echo get_theme_file_uri('/img/bg_school.jpg'); ?>" alt="BG Image">
<div class="container">
<h1><a href="<?php echo get_site_url(); ?>"><?php echo get_bloginfo('name'); ?></a></h1>
</div>