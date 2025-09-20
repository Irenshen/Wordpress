<?php
/* Template Name: Home Template 
 */ ?>

<?php get_header(); ?>

<main>
    <section class="section-top" <?php if (get_field('top_bg')): ?>
            style="background-image: url(<?php echo get_field('top_bg'); ?>);" <?php endif; ?>>
        <div class="container">
            <?php if (get_field('top_title')): ?>
                <h1 class="section-top__title" data-aos="fade-up" data-aos-easing="ease-in-sine">
                    <?php echo get_field('top_title') ?>
                </h1>
            <?php endif; ?>
            <div class="section-top__inner d-flex">
                <?php if (get_field('top_text-left')): ?>
                    <div class="section-top__col col-100-xs" data-aos="fade-up" data-aos-delay="200"
                        data-aos-easing="ease-in-sine">
                        <?php echo get_field('top_text-left') ?>
                    </div>
                <?php endif; ?>
                <div class="section-top__col col-100-xs" data-aos="fade-up" data-aos-delay="200"
                    data-aos-easing="ease-in-sine">
                    <?php if (get_field('top_text-right')): ?>
                        <div class="section-top__text">
                            <?php echo get_field('top_text-right') ?>
                        </div>
                    <?php endif; ?>
                    <div class="custom-tabs-wrap info-top-tabs-wrap">
                        <div class="custom-tab info-top-tab">
                            <?php if (get_field('top_tab-name-1')): ?>
                                <?php echo get_field('top_tab-name-1') ?>
                            <?php endif; ?>
                        </div>
                        <div class="custom-tab info-top-tab active">
                            <?php if (get_field('top_tab-name-2')): ?>
                                <?php echo get_field('top_tab-name-2') ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="custom-tabs-content-wrap info-top-tabs-content-wrap col-100-xs">
                        <div class="custom-tabs-content info-top-tabs-content">
                            <?php if (get_field('top_tab-text-1')): ?>
                                <?php echo get_field('top_tab-text-1') ?>
                            <?php endif; ?>
                        </div>
                        <div class="custom-tabs-content info-top-tabs-content opened">
                            <div class="contact-item">
                                <div class="contact-item__pic-wrap">
                                    <svg width="55" height="51" viewBox="0 0 55 51" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_1_99)">
                                            <path
                                                d="M27.5 2.71295C32.3612 2.71118 37.1137 4.04632 41.1564 6.54951C45.1991 9.0527 48.3503 12.6117 50.2115 16.7758C52.0727 20.94 52.5601 25.5222 51.6122 29.9433C50.6643 34.3644 48.3237 38.4254 44.8863 41.6128C41.449 44.8002 37.0694 46.9708 32.3015 47.8498C27.5337 48.7287 22.5918 48.2767 18.101 46.5509C13.6103 44.8251 9.77242 41.9029 7.0729 38.1542C4.37338 34.4055 2.93352 29.9986 2.93543 25.491C2.9431 19.452 5.5336 13.6625 10.1387 9.39234C14.7438 5.12216 20.9875 2.72006 27.5 2.71295ZM27.5 0.0268555C22.0606 0.0268558 16.7434 1.52272 12.2209 4.32509C7.6983 7.12746 4.17355 11.1105 2.09242 15.7705C0.011298 20.4305 -0.53276 25.5584 0.529116 30.5051C1.59099 35.4519 4.21108 39.9955 8.05799 43.5614C11.9049 47.1272 16.8059 49.5551 22.141 50.538C27.4761 51.521 33.0057 51.0149 38.0305 49.0835C43.0553 47.1521 47.3496 43.8821 50.3702 39.6874C53.3907 35.4928 55.0019 30.5619 55 25.5181C54.9975 18.7566 52.099 12.2728 46.942 7.49253C41.7851 2.71229 34.7918 0.0268551 27.5 0.0268555Z"
                                                fill="white" />
                                            <path
                                                d="M33.4577 9.24927H21.5423C20.931 9.26885 20.3299 9.40038 19.7737 9.6364C19.2175 9.87241 18.7172 10.2083 18.3016 10.6244C17.886 11.0406 17.5633 11.5289 17.3522 12.0613C17.1411 12.5936 17.0458 13.1594 17.0716 13.7261V37.2742C17.0326 38.4112 17.4812 39.516 18.3192 40.3468C19.1572 41.1776 20.3162 41.6668 21.5423 41.7065H33.4577C34.6837 41.6668 35.8427 41.1776 36.6808 40.3468C37.5188 39.516 37.9675 38.4112 37.9284 37.2742V13.6457C37.9571 12.5148 37.5038 11.4188 36.6669 10.5958C35.8299 9.77282 34.6768 9.28902 33.4577 9.24927ZM30.4836 38.7965H24.5163V37.2742H30.4836V38.7965ZM35.3116 34.3643H19.669V13.6902H35.3116V34.3643Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1_99">
                                                <rect width="55" height="51" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="contact-item__text-wrap">
                                    <?php echo get_field("site_text-phone", "option"); ?>
                                    <a href="tel:<?php echo get_field("site_phone-number", "option"); ?>">
                                        <?php echo get_field("site_phone-number", "option"); ?></a>
                                </div>
                            </div>
                            <?php if (get_field('top_link')): ?>
                                <a href="<?= get_field('top_link')['url'] ?>" class="see-more-btn"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section-partner section section-row section--logo" id="about" <?php if (get_field('partner_bg')): ?>
            style="background-image: url(<?php echo get_field('partner_bg'); ?>);" <?php endif; ?>>
        <div class="container">
            <?php if (get_field('partner_title')): ?>
                <h2 class="title">
                    <?php echo get_field('partner_title'); ?>
                </h2>
            <?php endif; ?>
            <div class="section__block d-flex">
                <?php if (get_field('partner_image')): ?>
                    <div class="section-partner__col section__col col-100-xs pic-wrap">
                        <img src="<?php echo get_field('partner_image'); ?>" alt="">
                    </div>
                <?php endif; ?>
                <div class="section-partner__col section__col col-100-xs">
                    <div class="section-partner__content section__content" data-aos="fade-left"
                        data-aos-easing="ease-in-sine">
                        <?php if (get_field('partner_text')): ?>
                            <p>
                                <?php echo get_field('partner_text'); ?>
                            </p>
                        <?php endif; ?>
                        <?php if (get_field('partner_link')): ?>
                            <a href="<?= get_field('partner_link')['url'] ?>"
                                class="section-partner__btn btn"><?= get_field('partner_link')['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-plus section section--logo section--logo_reverse">
        <div class="container">
            <div class="section-plus__inner d-flex">
                <div class="section-plus__col section__col col-100-xs" data-aos="fade-right"
                    data-aos-easing="ease-in-sine">
                    <?php if (get_field('advantage_text-left')): ?>
                        <p><?php echo get_field('advantage_text-left'); ?></p>
                    <?php endif; ?>
                    <?php if (get_field('advantage_link')): ?>
                        <a href="<?= get_field('advantage_link')['url'] ?>"
                            class="section-plus__btn btn"><?= get_field('advantage_link')['title'] ?></a>
                    <?php endif; ?>
                </div>
                <div class="section-plus__col section__col col-100-xs" data-aos="fade-left"
                    data-aos-easing="ease-in-sine">
                    <?php if (get_field('advantage_text-right')): ?>
                        <p><?php echo get_field('advantage_text-right'); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="section-experts section section-row" <?php if (get_field('expert_bg')): ?>
            style="background-image: url(<?php echo get_field('expert_bg'); ?>);" <?php endif; ?>>
        <div class="container">
            <?php if (get_field('expert_title')): ?>
                <h2 class="title"><?php echo get_field('expert_title'); ?></h2>
            <?php endif; ?>
            <div class="section__block d-flex">
                <?php if (get_field('expert_image')): ?>
                    <div class="section-experts__col section__col col-100-xs pic-wrap">
                        <img src="<?php echo get_field('expert_image'); ?>" alt="">
                    </div>
                <?php endif; ?>
                <div class="section-experts__col section__col col-100-xs">
                    <div class="section-experts__content section__content theme-back--colored" data-aos="fade-right"
                        data-aos-easing="ease-in-sine">
                        <?php if (get_field('expert_text')): ?>
                            <p><?php echo get_field('expert_text'); ?></p>

                        <?php endif; ?>

                        <?php if (get_field('expert_link')): ?>
                            <a href="<?= get_field('expert_link')['url'] ?>"
                                class="section-experts__btn btn"><?= get_field('expert_link')['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-support section section--logo" id="careers">
        <div class="container">
            <?php if (get_field('supporting_title')): ?>
                <h2 class="title"><?php echo get_field('supporting_title'); ?></h2>
            <?php endif; ?>
            <div class="section__block d-flex">
                <div class="section-support__col section__col col-100-xs">
                    <div class="section-support__content d-flex al-center jc-center">
                        <?php if (get_field('supporting_icon')): ?>
                            <div class="section-support__pic-wrap">
                                <img src="<?php echo get_field('supporting_icon'); ?>" alt="" title="">
                            </div>
                        <?php endif; ?>
                        <?php if (get_field('supporting_link')): ?>
                            <a href="<?= get_field('supporting_link')['url'] ?>"
                                class="btn btn--black"><?= get_field('supporting_link')['title'] ?></a>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="section-support__col section__col col-100-xs" data-aos="fade-left"
                    data-aos-easing="ease-in-sine">
                    <p><?php echo get_field('supporting_text'); ?></p>
                    <div class="contact-item">
                        <div class="contact-item__pic-wrap">
                            <svg width="55" height="51" viewBox="0 0 55 51" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1_99)">
                                    <path
                                        d="M27.5 2.71295C32.3612 2.71118 37.1137 4.04632 41.1564 6.54951C45.1991 9.0527 48.3503 12.6117 50.2115 16.7758C52.0727 20.94 52.5601 25.5222 51.6122 29.9433C50.6643 34.3644 48.3237 38.4254 44.8863 41.6128C41.449 44.8002 37.0694 46.9708 32.3015 47.8498C27.5337 48.7287 22.5918 48.2767 18.101 46.5509C13.6103 44.8251 9.77242 41.9029 7.0729 38.1542C4.37338 34.4055 2.93352 29.9986 2.93543 25.491C2.9431 19.452 5.5336 13.6625 10.1387 9.39234C14.7438 5.12216 20.9875 2.72006 27.5 2.71295ZM27.5 0.0268555C22.0606 0.0268558 16.7434 1.52272 12.2209 4.32509C7.6983 7.12746 4.17355 11.1105 2.09242 15.7705C0.011298 20.4305 -0.53276 25.5584 0.529116 30.5051C1.59099 35.4519 4.21108 39.9955 8.05799 43.5614C11.9049 47.1272 16.8059 49.5551 22.141 50.538C27.4761 51.521 33.0057 51.0149 38.0305 49.0835C43.0553 47.1521 47.3496 43.8821 50.3702 39.6874C53.3907 35.4928 55.0019 30.5619 55 25.5181C54.9975 18.7566 52.099 12.2728 46.942 7.49253C41.7851 2.71229 34.7918 0.0268551 27.5 0.0268555Z"
                                        fill="#D6A43B" />
                                    <path
                                        d="M33.4577 9.24927H21.5423C20.931 9.26885 20.3299 9.40038 19.7737 9.6364C19.2175 9.87241 18.7172 10.2083 18.3016 10.6244C17.886 11.0406 17.5633 11.5289 17.3522 12.0613C17.1411 12.5936 17.0458 13.1594 17.0716 13.7261V37.2742C17.0326 38.4112 17.4812 39.516 18.3192 40.3468C19.1572 41.1776 20.3162 41.6668 21.5423 41.7065H33.4577C34.6837 41.6668 35.8427 41.1776 36.6808 40.3468C37.5188 39.516 37.9675 38.4112 37.9284 37.2742V13.6457C37.9571 12.5148 37.5038 11.4188 36.6669 10.5958C35.8299 9.77282 34.6768 9.28902 33.4577 9.24927ZM30.4836 38.7965H24.5163V37.2742H30.4836V38.7965ZM35.3116 34.3643H19.669V13.6902H35.3116V34.3643Z"
                                        fill="#D6A43B" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_99">
                                        <rect width="55" height="51" fill="#D6A43B" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="contact-item__text-wrap">
                            <?php echo get_field("site_text-phone", "option"); ?>
                            <a class="link" href="tel:<?php echo get_field("site_phone-number", "option"); ?>">
                                <?php echo get_field("site_phone-number", "option"); ?></a>
                        </div>
                    </div>

                    <?php if (get_field('supporting_link_2')): ?>
                        <a href="<?= get_field('supporting_link_2')['url'] ?>"
                            class="section-support__btn btn btn--white"><?= get_field('supporting_link_2')['title'] ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>



    <section class="section-facilities section section--logo" id="services">
        <div class="container">
            <h2 class="title"><?php echo get_field("facilities_title"); ?></h2>
            <div class="section-block">
                <div class="custom-tabs-wrap info-tabs-wrap">
                    <?php if (have_rows("add_group-cards")): ?>
                        <?php $i = 0;
                        while (have_rows("add_group-cards")):
                            the_row(); ?>
                            <?php if (get_sub_field('add_group-btn')): ?>
                                <div class="custom-tab info-tab btn btn--fill-white <?php if ($i == 0)
                                    echo 'active'; ?>">
                                    <?php the_sub_field("add_group-btn") ?>
                                </div>
                            <?php endif; ?>
                            <?php $i++; endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="custom-tabs-content-wrap info-tabs-content-wrap col-100-xs">
                    <div class="custom-tabs-content info-tabs-content opened">
                        <div class="facilities-cards">
                            <?php $args = array(
                                'post_type' => 'hospitals',
                                'posts_per_page' => 4,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'slug',
                                        'terms' => 'new-jersey',
                                    ),
                                ),
                            );
                            $posts = new WP_Query($args); ?>
                            <?php if ($posts->have_posts()): ?>
                                <?php while ($posts->have_posts()) {
                                    $posts->the_post(); ?>
                                    <div class="facilities-card">
                                        <div class="facilities-card__pic-wrap pic-wrap">
                                            <?php if (has_post_thumbnail()): ?>
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" title="">
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php the_permalink() ?>" class="facilities-card__text-wrap">
                                            <p><?php the_title(); ?></p>
                                            <?php if (get_field('hospital_name')): ?>
                                                <p class="facilities-card__name"><?php echo get_field("hospital_name"); ?></p>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php if ($posts->max_num_pages > 1): ?>
                                    <script>                                 var ajaxurl_nj = '<?php echo site_url() ?>/wp-admin/admin-ajax.php'; var true_posts_nj = '<?php echo serialize($posts->query_vars); ?>'; var current_page_nj = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>; var max_pages_nj = '<?php echo $posts->max_num_pages; ?>';
                                    </script>
                                    <div class="see-more-block" id="true_loadmore">
                                        <div class="see-more-btn">
                                            Show More
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="custom-tabs-content info-tabs-content">
                        <div class="facilities-cards">
                            <?php $args = array(
                                'post_type' => 'hospitals',
                                'posts_per_page' => 4,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'category',
                                        'field' => 'slug',
                                        'terms' => 'connecticut',
                                    ),
                                ),
                            );
                            $posts = new WP_Query($args); ?>
                            <?php if ($posts->have_posts()): ?>
                                <?php while ($posts->have_posts()) {
                                    $posts->the_post(); ?>
                                    <div class="facilities-card">
                                        <div class="facilities-card__pic-wrap pic-wrap">
                                            <?php if (has_post_thumbnail()): ?>
                                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" title="">
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php the_permalink() ?>" class="facilities-card__text-wrap">
                                            <p><?php the_title(); ?></p>
                                            <?php if (get_field('hospital_name')): ?>
                                                <p class="facilities-card__name"><?php echo get_field("hospital_name"); ?></p>
                                            <?php endif; ?>
                                        </a>
                                    </div>
                                <?php } ?>
                                <?php if ($posts->max_num_pages > 1): ?>
                                    <script>                                 var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php'; var true_posts = '<?php echo serialize($posts->query_vars); ?>'; var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>; var max_pages = '<?php echo $posts->max_num_pages; ?>';
                                    </script>
                                    <div class="see-more-block" id="true_loadmore-2">
                                        <div class="see-more-btn">
                                            Show More
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-map section" id="locations">
        <div class="section-block">
            <div class="custom-tabs-wrap info-tabs-wrap">
                <?php if (have_rows("map", 'option')): ?>
                    <?php $i = 0;
                    while (have_rows("map", 'option')):
                        the_row(); ?>
                        <div class="custom-tab info-tab btn btn--fill-black  <?php if ($i == 0)
                            echo 'active'; ?>">
                            <?php if (get_sub_field('map_button', 'option')): ?>
                                <?php the_sub_field('map_button', 'option') ?>
                            <?php endif; ?>
                        </div>
                        <?php $i++; endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="custom-tabs-content-wrap info-tabs-content-wrap col-100-xs">
                <?php if (have_rows("map", 'option')): ?>
                    <?php $i = 1;
                    while (have_rows("map", 'option')):
                        the_row(); ?>
                        <div class="custom-tabs-content info-tabs-content  <?php if ($i == 1)
                            echo 'opened'; ?>">
                            <div class="contacts__map contacts__map<?php echo $i ?>" id="map<?php echo $i ?>">
                                <?php if (get_sub_field("google_map", "option")): ?>
                                    <?php echo get_sub_field("google_map", "option"); ?>
                                <?php endif; ?>
                            </div>
                            <div class="map-item">
                                <div class="map-item__pic-wrap">
                                    <?php if (get_sub_field('map_icon', 'option')): ?>
                                        <img src="<?php the_sub_field('map_icon', 'option') ?>" alt="" title="">
                                    <?php endif; ?>
                                </div>
                                <div class="map-item__text">
                                    <p><?php if (get_sub_field('map_text', 'option')): ?>
                                            <?php the_sub_field('map_text', 'option') ?>
                                        <?php endif; ?>
                                    </p>
                                    <a href="tel:<?php if (get_sub_field('map_phone', 'option')): ?>
                                        <?php the_sub_field('map_phone', 'option') ?>
                                    <?php endif; ?> "></a> <?php if (get_sub_field('map_phone', 'option')): ?>
                                        <?php the_sub_field('map_phone', 'option') ?>
                                    <?php endif; ?> <span><a href="#!"> <?php if (get_sub_field('map_email', 'option')): ?>
                                                <?php the_sub_field('map_email', 'option') ?>
                                            <?php endif; ?></a></span>
                                </div>
                            </div>
                        </div>
                        <?php $i++; endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>