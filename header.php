<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final Project</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <figure class="logo">
            <a href="#banner"><img src="<?php echo get_template_directory_uri(); ?>/image/logo.png" alt="logo"></a>
        </figure>
        <nav>
            <a href="<?php echo home_url(); ?>">Home</a>
            <a href="technology">Technology</a>
            <a href="#products">Products</a>
            <a href="#blog">Blog</a>
        </nav>
        <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
        <div class="nav-menu">
            <a href="<?php echo home_url(); ?>">Home</a>
            <a href="technology">Technology</a>
            <a href="#products">Products</a>
            <a href="#blog" id="blog-link">Blog</a>
        </div>
        <div class="close-btn">
            <div class="close-bar"></div>
        </div>
    </header>