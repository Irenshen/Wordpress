<?php get_header(); ?>

<main>
    <section class="section-top" <?php if (has_post_thumbnail()): ?>
            style="background-image: url(<?php the_post_thumbnail_url(); ?>);" <?php endif; ?>>
        <div class="container">
            <h1 class="section-top__title"><?php the_title(); ?></h1>
            <div class="section-top__inner d-flex">
                <?php if (get_field('hospital_name')): ?>
                    <p class="facilities-card__name"><?php echo get_field("hospital_name"); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>