<?php

/**
 * 
 * Template Part: Team Members Section
 * Setup query to show the ‘team’ post type
 * 
 */

$args = array(
    'post_type' => 'team',
    'post_status' => 'publish',
    'order' => 'ASC'
);

$loop = new WP_Query($args);

?>

<?php while ($loop->have_posts()) : $loop->the_post(); ?>

    <div class="row mb-3 justify-content-center">
        <div class="col-xl-2 col-12 mb-4">
            <div class="rounded-team box-shadow-team">
                <img class="tall" src="<?php echo get_field('photo') ?>" alt="<?php echo get_field('name') ?>, <?php echo get_field('job_description') ?>" />
            </div>
        </div>
        <div class="col-12 col-xl-8 team-gutter">
            <h3 class="primary bold"><?php echo get_field("name") ?>, <?php echo get_field("job_description") ?></h3>
            <p class="text">
                    <?php echo get_field("description") ?>
                    <?php echo get_field("education") ?>
            </p>
        </div>
    </div>

<?php endwhile;
wp_reset_postdata(); ?>