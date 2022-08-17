<?php

/**
 * Template Name: Contact Page
 */

get_header();

?>

<div class="container-fluid content ">
    <div class="container-lg">
        <?php get_template_part('template-parts/page', 'title'); ?>
        <div class="row">
            <div class="col-12 col-md-4 col-lg-3">
                <img class="contact-icon" src="<?php echo JSD_THEME_ASSETS_URI ?>/map-pin.svg" />
                <div class="d-inline-block">
                    <p class="text mb-0">704 J. Street, Suite 213<br />San Diego, CA 92101</p>
                </div>
            </div>
            <div class="col-12 col-md-4 col-lg-3">
                <img class="contact-icon" src="<?php echo JSD_THEME_ASSETS_URI ?>/phone.svg" />
                <div class="d-inline-block">
                    <a class="ternary" href="mailto:info@sequenex.com">info@sequenex.com</a><br />
                    <a class="ternary mb-0" href="tel:4425152287">442-515-2287</a>
                </div>
            </div>
        </div>
        <div class="row">
            <img id="map-icon" src="<?php echo JSD_THEME_ASSETS_URI ?>/map-pin-filled.svg" class="d-none" />
            <div id="map" class="map-field"></div>
        </div>
    </div>
</div>


<?php get_footer(); ?>