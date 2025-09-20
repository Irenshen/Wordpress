<?php $site_title = get_field("site_title", "option") ?: "Atlas"; ?>
<?php $site_logo = get_field("site_logo", "option"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        <?php echo $site_title; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container header__container">
            <div class="header__inner d-flex jc-sb al-center">
                <?php if (is_front_page()): ?>
                    <?php if ($site_logo): ?>
                        <img src="<?php echo $site_logo ?>" alt="<?php echo $site_title; ?>" title="<?php echo $site_title; ?>"
                            class="logo">
                    <?php endif; ?>
                <?php else: ?>
                    <a href="<?php echo home_url(); ?>" class="header__logo">
                        <?php if ($site_logo): ?>
                            <img src="<?php echo $site_logo ?>" alt="<?php echo $site_title; ?>"
                                title="<?php echo $site_title; ?>" class="logo">
                        <?php endif; ?>
                    </a>
                <?php endif; ?>
                <div class="header__nav menu-wrap d-flex al-center">
                    <?php if (is_front_page()): ?>
                        <?php if ($site_logo): ?>
                            <img src="<?php echo $site_logo ?>" alt="<?php echo $site_title; ?>"
                                title="<?php echo $site_title; ?>" class="logo visible-xs">
                        <?php endif; ?>
                    <?php else: ?>
                        <a href="<?php echo home_url(); ?>" class="header__logo">
                            <?php if ($site_logo): ?>
                                <img src="<?php echo $site_logo ?>" alt="<?php echo $site_title; ?>"
                                    title="<?php echo $site_title; ?>" class="logo visible-xs">
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                    <div class="menu-wrap__inner d-flex jc-sb col-100-xs">
                        <?php
                        wp_nav_menu([
                            'theme_location' => 'menu_main_header',
                            'container' => null,
                            'menu_class' => 'd-flex al-center menu-list',
                            'menu_id' => 'menu-header',
                        ]);
                        ?>
                        <div class="header__nav-close header-close">
                            <span class="header__nav-close-line close-line"></span>
                            <span class="header__nav-close-line close-line"></span>
                        </div>
                    </div>
                    <div class="header__contacts-wrap d-flex al-center visible-xs">
                        <div class="header-contact-item header-contact-item--linkedin">
                            <a href="<?php echo get_field("site_linkedin", "option"); ?>">
                                <i class="fa-brands fa-linkedin fa-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header__contacts-wrap d-flex al-center hidden-xs">
                    <div class="header-contact-item header-contact-item--linkedin">
                        <a href="<?php echo get_field("site_linkedin", "option"); ?>">
                            <i class="fa-brands fa-linkedin fa-xl"></i>
                        </a>
                    </div>
                </div>
                <div class="header__burger burger">
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                    <span class="burger-line"></span>
                </div>
            </div>
        </div>
    </header>