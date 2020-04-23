<?php get_header(); ?>
    <main>
        <?php
        if ( have_posts() ):
            while ( have_posts() ) : the_post();
        ?>
            <article>
                <h1><?php the_title(); ?></h1>
            </article>
            <section>
                <?php the_content(); ?>
            </section>
            <?php
                endwhile;
                endif;
            ?>
    </main>
<?php get_footer();
