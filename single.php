<?php get_header(); ?>

    <?php 
        if (have_posts()) :
            while (have_posts()) :
                the_post();
    ?>

    <main class="blog-page">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <section class="blog-content blog-grid">
                <div class="full-post">
                    <article class="post-content">
                        <?php the_content(); ?>
                    </article>
                </div>

                <article class="sm-banner">
                    <figure>
                        <?php
                            $imgBanner = get_field('sm_banner_img');
                        ?>
                        <img src="<?php echo esc_url($imgBanner['url']); ?>" alt="<?php echo esc_attr($imgBanner['alt']); ?>">
                        <h4><?php the_time('d M Y'); ?></h4>
                        <h3>By <?php the_author(); ?></h3>
                    </figure>
                </article>
            </section>
        </div>
    </main>
    
    <?php 
        endwhile;
        endif;
    ?>

<?php get_footer(); ?>