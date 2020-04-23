<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" type="text/css" />
        <title><?php bloginfo('name') ?></title>
        <?php wp_enqueue_script('jquery') ?>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    <header>
        <div><?php bloginfo('name') ?></div>
    </header>