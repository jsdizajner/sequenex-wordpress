<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo JSD_THEME_ASSETS_URI ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo JSD_THEME_ASSETS_URI ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo JSD_THEME_ASSETS_URI ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo JSD_THEME_ASSETS_URI ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo JSD_THEME_ASSETS_URI ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
	
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
    <meta property="og:url"           content="<?php the_permalink(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php the_title(); ?>" />
    <meta property="og:description"   content="<?php the_excerpt(); ?>" />
    <meta property="og:image"         content="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" />

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-6D8K1KLNJ0"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-6D8K1KLNJ0');
	</script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!--Navigation-->
    <nav class="navbar navbar-expand-xl navbar-light sticky-top pl-0 pr-0 pl-xl-3 pr-xl-3">
        <div class="container-xl">
            <a href="<?php echo home_url(); ?>" class="navbar-brand pl-xl-0 pr-xl-0 pl-3 pr-3"><img class="logo-img img-fluid" src="<?php echo JSD_THEME_ASSETS_URI ?>/logo.svg" alt="Sequenex logo" /></a>
            <button class="navbar-toggler pl-xl-0 pr-xl-0 pl-3 pr-3" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span id="toggler-icon" class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location'  => 'primary',
                'depth'           => 1, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse text-center pb-3 pb-xl-0',
                'container_id'    => 'main-navigation',
                'menu_class'      => 'navbar-nav ml-auto',
                'li_class'        => 'ml-xl-3',
                'a_class'         => 'primary',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ));
            ?>
        </div>
    </nav>