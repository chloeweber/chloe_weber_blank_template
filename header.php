<!DOCTYPE html>
<html>
    <head>
        <title><?php bloginfo('description'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
<?php wp_head(); ?>
    </head>

    <body>
        <div class="container">
            <header class="row">
                <div class="twelve columns">
                    <h1 class="visuallyhidden">Chloe Weber Blog</h1>
                    <a href="<?php bloginfo('url'); ?>"><img src="wp-content/themes/chloe_weber_blank_template/img/logo.png" alt="Logo" /></a>
                    <p id="header-description"><?php bloginfo('description'); ?></p>
                </div>
<!-- Add Menu Here -->
                <div class="row">
                    <div class="twelve columns">
                        <?php wp_nav_menu(array(
                            'menu' => 'Nav Menu',
                            'sort_column' => 'menu_order',
                            'container_class' => 'blank-menu-header'
                        ));?>
                    </div>
                </div>
            </header>

<!-- END OF HEADER - BEGIN SECTION CONTENT -->
