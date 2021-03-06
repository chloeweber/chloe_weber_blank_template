<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('description'); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css' />
<?php wp_head(); ?>
    </head>

    <body>
        <div class="container">
            <header class="row">
                <div class="twelve columns">
                    <h1 class="visuallyhidden">Chloe Weber Blog</h1>
                    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo" id="logo"/></a>
                    <p id="header-description"><?php bloginfo('description'); ?></p>
                </div>
<!-- Menu -->
                <div class="row">
                    <div class="eight columns">
                        <?php wp_nav_menu(array(
                            'menu' => 'Nav Menu',
                            'sort_column' => 'menu_order',
                            'container_class' => 'blank-menu-header'
                        ));?>
                    </div>

                    <div class="four columns">
                        <?php dynamic_sidebar('social-widget'); ?>
                    </div>
                </div>
            </header>

<!-- END OF HEADER - BEGIN SECTION CONTENT -->
