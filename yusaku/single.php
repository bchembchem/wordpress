<?php get_header(); ?>
            
                <div class="content">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <div class="news-img">
                        <img src="<?php bloginfo('template_url'); ?>" alt="">
                    </div>  
                    <h2 class="wp-title"><?php the_title(); ?></p>
                    <p><?php the_time('Y.m.d'); ?></p>
                    <p class="news-description">
                        <?php the_content(); ?>
                    </p>
                    <?php endwhile; ?>
                    <?php else :?>
                        <p>記事がありませんでした</p>
                    <?php endif;  ?>
                </div>

            <?php get_footer(); ?>