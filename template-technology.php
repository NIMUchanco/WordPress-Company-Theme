<?php
//Template Name: Technology Page
?>

<?php get_header(); ?>

<?php 
    if (have_posts()) :
    while (have_posts()) : the_post();
?>

<main>
    <section class="tech-page-banner" style="background: url(<?php the_field('banner_bg_img'); ?>) center/cover rgba(0, 0, 0, .6); background-blend-mode: multiply;">
        <h1><?php the_field('banner_title'); ?></h1>
    </section>

    <section class="tech-page-content">
        <div class="container">
            <div class="tech1">
                <h2 class="line-animation"><?php the_field('main_title1'); ?></h2>
                <figure>
                    <?php
                        $imgTech = get_field('main_img1');
                    ?>
                    <img src="<?php echo esc_url($imgTech['url']); ?>" alt="<?php echo esc_attr($imgTech['alt']); ?>">
                </figure>
                <article>
                    <p><?php the_field('main_description1'); ?></p>
                </article>
            </div>

            <div class="tech2">
                <h2 class="line-animation"><?php the_field('main_title2'); ?></h2>
                <figure>
                    <?php
                        $imgTech = get_field('main_img2');
                    ?>
                    <img src="<?php echo esc_url($imgTech['url']); ?>" alt="<?php echo esc_attr($imgTech['alt']); ?>">
                </figure>
                <article>
                    <p><?php the_field('main_description2'); ?></p>
                </article>
            </div>
        </div>
    </section>

    <section class="cta">
        <div class="container">
            <h2><?php the_field('cta_title'); ?></h2>
            <p><?php the_field('cta_description'); ?></p>
            <a href="<?php the_field('cta_btn'); ?>" class="btn btn-arrow" target="_blank"><i class="fa-solid fa-arrow-right"></i> Join our community</a>
        </div>
    </section>
</main>

<?php 
    endwhile;
    endif;
?>

<?php get_footer(); ?>