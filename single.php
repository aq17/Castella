<?php get_header(); ?>
    <?php
    if( have_posts() ):
        while ( have_posts() ) : the_post();
    ?>

        <article id="post-<?php the_ID(); ?> <?php post_class('entry'); ?>">
            <h1>新着情報</h1>
        </article>

        <section>
            <?php the_content(); ?>
        </section>

        <nav>
            <span><?php previous_post_link('%link'); ?></span>
            <span><?php next_post_link('%link'); ?></span>
        </nav>

        <?php endwhile;
        endif;
        ?>
<?php get_footer(); ?>