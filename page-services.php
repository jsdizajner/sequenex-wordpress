<?php

/**
 * Template Name: Services Page
 */

get_header();

?>

<div class="container-fluid content">

    <div class="container-lg">
        <?php get_template_part('template-parts/page', 'title'); ?>
    </div>

    <div class="light-bg services-section full-width">
        <div class="container-lg">
            <?php the_content(); ?>
        </div>
    </div>

    <?php get_template_part('template-parts/content', 'cta-mission'); ?>

</div>

<?php get_footer(); ?>