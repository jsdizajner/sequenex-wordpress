<?php

/**
 * Template Part: Services
 */

?>
<div class="container-fluid content ">
    <div class="container-lg">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8 text-center">
                <h2 class="secondary home-title">Diabetes Product Development</h2>
                <p class="text">We leverage an Agile methodology and focus on building out highly flexible frameworks.
                    All of this -- combined with our extensive CGM, pen, pump and regulatory/quality domain knowledge --allows for the rapid development and delivery of innovative diabetes products.</p>
            </div>
        </div>
        <div class="row features-section">
            <div class="col-12 col-xl-3 col-md-6 pl-3 pr-3 text-center">
                <img class="mr-auto ml-auto mb-3" src="<?php echo JSD_THEME_ASSETS_URI; ?>/mobile.svg" alt="Mobile" />
                <h3 class="primary bold mb-3">Mobile</h3>
                <p class="text spaced">Our highly skilled mobile engineers analyze product requirements to implement solutions. Distributed Agile development is leveraged to deliver as efficiently as possible in multi-corporate, multi-platform, multi-ecosystem environments.</p>
            </div>
            <div class="col-12 col-xl-3 col-md-6 pl-3 pr-3 text-center">
                <img class="mr-auto ml-auto mb-3" src="<?php echo JSD_THEME_ASSETS_URI; ?>/cloud.svg" alt="Cloud" />
                <h3 class="primary bold mb-3">Cloud</h3>
                <p class="text spaced">Sequenex develops cloud solutions that are Identity-enabled. We distribute microservice architectures that are secure and scalable. A security and test-first Agile mindset are key to enabling Sequenex’s customer needs.</p>
            </div>
            <div class="col-12 col-xl-3 col-md-6 pl-3 pr-3 text-center">
                <img class="mr-auto ml-auto mb-3" src="<?php echo JSD_THEME_ASSETS_URI; ?>/iot.svg" alt="Medical IOT" />
                <h3 class="primary bold mb-3">Medical IOT</h3>
                <p class="text spaced">We connect insulin pens, pumps, BG meters, CGM and more to create interoperable solutions that enable people with diabetes to better manage their health.</p>
            </div>
            <div class="col-12 col-xl-3 col-md-6 pl-3 pr-3 text-center">
                <img class="mr-auto ml-auto mb-3" src="<?php echo JSD_THEME_ASSETS_URI; ?>/identity.svg" alt="Identity Management" />
                <h3 class="primary bold mb-3">Identity Management</h3>
                <p class="text spaced">Sequenex are Identity Management specialists and can help you take advantage of your IdP’s full capabilities or advise you on choosing a provider that is right for you.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="<?php echo get_page_link(get_page_by_path('services')->ID); ?>" class="ternary link-lg">Other Services<span class="svg-holder ml-3"></span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="16.828" viewBox="0 0 30 16.828">
                    <g id="arrow-right" transform="translate(10 -3.586)">
                        <line id="Line_1" data-name="Line 1" x2="28" transform="translate(-9 12)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        <path id="Path_21" data-name="Path 21" d="M12,5l7,7-7,7" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                    </g>
                </svg>
            </a>
        </div>
        <?php get_template_part('template-parts/content', 'cta-gap'); ?>
    </div>
</div>