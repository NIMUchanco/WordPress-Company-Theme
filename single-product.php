<?php get_header(); ?>

    <?php 
        if (have_posts()) :
            while (have_posts()) :
                the_post();
    ?>

    <main class="blog-page">
        <div class="container">
            <section class="blog-content">
                <article class="sm-banner product-page">
                    <h1><?php the_title(); ?></h1>
                    <figure>
                        <?php
                            $imgBanner = get_field('product_img');
                        ?>
                        <img src="<?php echo esc_url($imgBanner['url']); ?>" alt="<?php echo esc_attr($imgBanner['alt']); ?>">
                    </figure>
                </article>
                <div class="full-post">
                    <article class="post-content">
                        <?php the_content(); ?>
                    </article>
                </div>
            </section>
        </div>
    </main>
    
    <?php 
        endwhile;
        endif;
    ?>

<?php get_footer(); ?>