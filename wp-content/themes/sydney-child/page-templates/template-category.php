<?php
/**
* Template Name: Blog
*/

get_header(); ?>

<div class="blogCostum">
    <div class="blogCostumInner">
        <?php $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'blog',
            'posts_per_page' => 5,
        );
        $arr_posts = new WP_Query( $args );
        
        if ( $arr_posts->have_posts() ) :
        
            while ( $arr_posts->have_posts() ) :
                $arr_posts->the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php
                    if ( has_post_thumbnail() ) :
                        the_post_thumbnail();
                    endif;
                    ?>
                    <header class="entry-headerCostum">
                        <h1 class="entry-titleCostum"><?php the_title(); ?></h1>
                    </header>
                    <div class="entry-contentCostum">
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Lees meer</a>
                    </div>
                </article>
                <?php
            endwhile;
            wp_reset_postdata();
        endif; ?>
    </div>
</div>


<?php get_footer(); ?>