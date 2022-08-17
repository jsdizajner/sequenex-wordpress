<?php

/**
 * Template Name: Front Page Template
 */

get_header(); ?>

<div class="container-fluid hero">
    <img src="<?php echo JSD_THEME_ASSETS_URI; ?>/hero.svg" class="hero-img d-none d-lg-block" />
    <div class="container-lg hero-inside h-100">
        <div class="row align-items-center h-100">
            <div class="col-12 col-lg-7">
                <h1 class="primary hero-heading">
                    We Are Your Digital Health
                    and Connected Device
                    Technology Partner
                </h1>
                <p class="text text-large">
                    A platform and product development company focused specifically on the diabetes industry, Sequenex designs, develops and sustains software systems that are purpose built for innovation, connectivity and interoperability.
                </p>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('template-parts/content', 'services'); ?>

<?php get_footer(); ?>