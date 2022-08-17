<?php

/**
 * Template Name: The Sequenex Advantage Page
 */

get_header();

?>

<div class="container-fluid content ">
    <div class="container-lg">
        <?php get_template_part('template-parts/page', 'title'); ?>
    </div>

    <div class="light-sec-bg advantage-section full-width">
        <div class="container-lg">
            <?php the_content(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>