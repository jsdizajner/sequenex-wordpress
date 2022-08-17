<?php

/**
 * Template Name: About Us Page
 */

get_header();

?>

<div class="container-fluid content ">
    <div class="container-lg">
        <?php get_template_part('template-parts/page', 'title'); ?>
    </div>
    <div class="light-ter-bg about-section full-width">
        <div class="container-lg">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="container-lg">
        <div class="text-center team-gutter">
            <h2 class="secondary">Management Team</h2>
        </div>
        
        <?php get_template_part('template-parts/content', 'team'); ?>

        <?php get_template_part('template-parts/content-cta', 'contact'); ?>
    </div>
</div>

<?php get_footer(); ?>