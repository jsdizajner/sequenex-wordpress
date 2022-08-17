<?php

/**
 * 
 * 404 Error Page
 * 
 */

get_header();

?>

<div class="container-fluid content pl-md-4 pr-md-4 pl-lg-3 pr-lg-3">
    <div class="row justify-content-center align-items-center not-found text-center">
        <div class="col-12 col-md-6">
            <div class="page-title">
                <h1 class="primary">Page not found!</h1>
                <h2 class="secondary">Sorry, the page you are<br />looking for is not available.</h2>
            </div>
            <a class="button" href="<?php echo home_url(); ?>">Go to Homepage</a>
        </div>

    </div>
</div>