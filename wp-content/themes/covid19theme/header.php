<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="search-mobile container">
        <a href="<?php bloginfo('url'); ?>" class="navbar-brand-image">
            <img src="<?php bloginfo('url'); ?>/logo" onerror="this.onerror = null; this.remove();"/>
        </a>
        <?php get_search_form(); ?>
    </div>

    <header>
        <nav>
            <a href="<?php bloginfo('url'); ?>" class="navbar-brand">
                <img src="http://127.0.0.1:8080/logo" onerror="this.onerror = null; this.remove();" class="logo" style="width: 53px;margin-right: 10px;float: left;" />
                <?php bloginfo('name') ?>
            </a>
            <div class="float-end">
                <?php
                $args = array('theme_location' => 'main_menu');
                wp_nav_menu($args);
                ?>
                <?php get_search_form(); ?>
            </div>
        </nav>
    </header>


    <div class="navbar-bottom">
        <a href="/category/event" <?php if (is_category(5) && !is_home() || in_category(5) && !is_home()): ?> class="active" <?php endif; ?>>
            <div class="mobile-menu-item">
                <i class="menu-icon dashicons dashicons-screenoptions"></i>
                <div class="menu-name">Event</div>
            </div>
        </a>
        <a href="/category/news" <?php if (is_category(4) && !is_home() || in_category(4) && !is_home()): ?> class="active" <?php endif; ?>>
            <div class="mobile-menu-item">
                <i class="menu-icon dashicons dashicons-schedule"></i>
                <div class="menu-name">News</div>
            </div>
        </a>
        <a href="<?php bloginfo('url');?>" <?php if (is_home()): ?> class="active" <?php endif; ?>>
            <div class="mobile-menu-item">
                <i class="menu-icon dashicons dashicons-admin-home"></i>
                <div class="menu-name">Home</div>
            </div>
        </a>
        <a href="/contact" <?php if (is_page('contact')): ?> class="active" <?php endif; ?>>
            <div class="mobile-menu-item">
                <i class="menu-icon dashicons dashicons-groups"></i>
                <div class="menu-name">Contact</div>
            </div>
        </a>
        <a href="/wp-login.php">
            <div class="mobile-menu-item">
                <i class="menu-icon dashicons dashicons-businessperson"></i>
                <div class="menu-name">Sign In</div>
            </div>
        </a>
    </div>