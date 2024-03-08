<?php get_header(); ?>
<section class="banner" id="banner">
        <article>
            <h1><?php the_field('section_hero_title'); ?></h1>
            <p><?php the_field('section_hero_description'); ?></p>
            <div class="banner-btn">
                <?php 
                    $btnBanner1 = get_field('section_hero_btn1');
                    $btnBannerLink1 = $btnBanner1['url'];
                    $btnBannerText1 = $btnBanner1['title'];
                    $btnBannerTarget1 = $btnBanner1['target'];
                ?>
                <a href="<?php echo $btnBannerLink1; ?>" class="btn" target="<?php echo $btnBannerTarget1; ?>"><?php echo $btnBannerText1; ?></a>

                <?php 
                    $btnBanner2 = get_field('section_hero_btn2');
                    $btnBannerLink2 = $btnBanner2['url'];
                    $btnBannerText2 = $btnBanner2['title'];
                    $btnBannerTarget2 = $btnBanner2['target'];
                ?>
                <a href="<?php echo $btnBannerLink2; ?>" class="btn btn2" target="<?php echo $btnBannerTarget2; ?>"><?php echo $btnBannerText2; ?></a>
            </div>
        </article>
        <figure>
            <?php
                $imgBanner = get_field('section_hero_img');
            ?>
            <img src="<?php echo esc_url($imgBanner['url']); ?>" alt="<?php echo esc_attr($imgBanner['alt']); ?>">
            <div class="bubble"></div>
        </figure>
    </section>

    <marquee behavior="scroll">
        <!-- loop 5times -->
        <?php
            for ($i = 0; $i <= 10; $i++) {
                echo get_field('marquee_text') . ' ' . '<i class="fa-solid fa-asterisk"></i>' . ' ';

                if ($i === 10) {
                    echo get_field('marquee_text');
                }
            }
        ?>
    </marquee>

    <section class="tech">
        <div class="container">
            <h2 class="line-animation"><?php the_field('section_tech_title'); ?></h2>
            <article>
                <div class="text-box">
                    <?php the_field('section_tech_description'); ?>
                    <?php 
                        $btnTech = get_field('section_tech_btn');
                        $btnTechLink = $btnTech['url'];
                        $btnTechText = $btnTech['title'];
                        $btnTechTarget = $btnTech['target'];
                    ?>
                    <a href="<?php echo $btnTechLink; ?>" class="btn" target="<?php echo $btnTechTarget; ?>"><?php echo $btnTechText; ?></a>
                </div>
                <figure>
                    <?php
                        $imgTech = get_field('section_tech_img');
                    ?>
                    <img src="<?php echo esc_url($imgTech['url']); ?>" alt="<?php echo esc_attr($imgTech['alt']); ?>">
                </figure>
            </article>
        </div>
    </section>

    <section class="products" id="products">
        <div class="container">
            <h2 class="line-animation"><?php the_field('section_products_title'); ?></h2>
            <div class="products-wrapper">
                <!-- OPEN THE LOOP -->
                <?php
                // CUSTOM QUERY
                $homepageProduct = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'product'
                ));

                // THE LOOP
                while ($homepageProduct->have_posts()) {
                    $homepageProduct->the_post();
                
                ?>

                <figure>
                    <?php
                        $productImg = get_field('product_img');
                    ?>
                    <a href="" class="img-link"><img src="<?php echo esc_url($productImg['url']); ?>" alt="drone model1"></a>
                    <figcaption>
                        <h3><?php the_title(); ?></h3>
                        <p><?php the_field('model_description'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-arrow"><i class="fa-solid fa-arrow-right"></i> Read more</a>
                    </figcaption>
                </figure>

                <?php
				} wp_reset_postdata();
				?>

            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="container">
            <h2 class="line-animation"><?php the_field('section_blog_title'); ?></h2>
            <div class="blog-wrapper">
                <?php
                $homepageBlog = new WP_Query(array(
                    'posts_per_page' => 3,
                    'post_type' => 'post'
                ));

                $counter = 1;

                while ($homepageBlog->have_posts()) {
                    $homepageBlog->the_post();
                
                ?>
                <article>
                    <?php
                        $imgBlog = get_field('main_img');
                    ?>
                    <img src="<?php echo esc_url($imgBlog['url']); ?>" alt="<?php echo esc_attr($imgBlog['alt']); ?>">
                    <figcaption>
                        <div class="categories">
                            <?php the_category(); ?>
                            <span><?php the_time('d M Y'); ?></span>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <?php if ($counter === 1) : ?>
                            <p class="description"><?php echo wp_trim_words(get_the_excerpt(), 10); ?></p>
                        <?php endif; ?>
                        <div class="author">
                            <p>By <?php the_author(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-arrow"><i class="fa-solid fa-arrow-right"></i> Read more</a>
                        </div>
                    </figcaption>
                </article>

                <?php
                    $counter++;
                } wp_reset_postdata();
                ?>

                
            </div>
        </div>
    </section>
    <?php get_footer(); ?>