<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
        <title><?php bloginfo('name') ?></title>
    </head>
    <body>
        <header>
            <div><?php bloginfo('name') ?></div>
        </header>
        <main>
            <div id="topPage">
                <div id="displayArticleSection">
                    <p>新着記事</p>
                    <?php
                    if(have_posts()):
                        while(have_posts()):
                            the_post(); ?>
                            <article>
                                <p>サムネイル（flexbox）</p>
                                <h2><?php the_title(); ?></h2>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                        <?php endwhile;
                    endif; ?>
                </div>
                <div id="sideBar">
                    <p>サイドバー</p>
                    <p>strickyにして、追従</p>
                </div>
            </div>
        </main>
        <footer>
            <div>footer</div>
        </footer>
    </body>
</html>