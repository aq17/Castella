<?php get_header(); ?>
    <main>
        <div id="topPage">
            <div id="displayArticleSection">
                <p>新着記事</p>
                <?php if(have_posts()): ?>
                    <?php while(have_posts()): ?>
                        <?php the_post(); ?>
                        <article class="newArticle" id="post-<?php the_ID(); ?> <?php post_class('news'); ?>">
                            <div>
                                <?php if ( has_post_thumbnail() ): ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
                                <?php else: ?>
                                    <a><img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" height="180px" width="180px" /></a>
                                <?php endif; ?>
                            </div>
                            <div>
                                <p><?php the_category(); ?></p>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                <p><?php the_excerpt(); ?></p>
                                <time datetime="<?php the_time(); ?>">
                                    <?php the_time('Y年m月d日(l)'); ?>
                                </time>
                            </div>
                        </article>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <aside id="sideBar">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </main>
<?php
  get_footer();