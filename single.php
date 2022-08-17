<?php
/**
 * This page displays archive of all Blog Posts
 */

get_header('single');
$categories = get_the_category();
?>

<div class="container-fluid content">
    <div class="container-lg" id="container">
        <article>
            <div class="row">
                <div class="col-12">
                    <img class="img-fluid article-image" src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="Title image of article: <?php the_title(); ?>" />
                </div>
            </div>

            <div class="row d-flex align-items-center mt-2 mb-1 mt-sm-4 mb-sm-4">
                <div class="col-12 col-sm-9">
                    <h1 class='article-title'><?php the_title(); ?></h1>
                    <div class="d-none d-sm-block">
                        <span class="categories d-block">
                            <ul class="unstyled-list">
                                <?php show_simple_category_list($categories); ?>
                            </ul>
                        </span>
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 text-right">
                    <span class="author d-block single-author"><?php echo get_the_author(); ?></span>
                    <span class="date d-block single-span"><?php echo get_the_date(); ?></span>
                </div>
            </div>

            <!-- Mobile subheadline -->
            <div class="d-block d-sm-none mb-4 row" id="mobile-subheadline">
                <div class="col-12 d-flex">
                    <div class="author-date mr-auto">
                        <span class="author d-block single-author"><?php echo get_the_author(); ?></span>
                        <span class="date d-block single-span"><?php echo get_the_date(); ?></span>
                    </div>
                    <div class="category">
                        <span class="categories d-block">
                            <ul class="unstyled-list">
                                <?php show_simple_category_list($categories); ?>
                            </ul>
                        </span>
                    </div>
                </div> 
            </div> <!-- #mobile-subheadline -->

            <div class="row">
                <div class="col-12" id="post-content">
                    <?php the_content(); ?>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    <h6 class="share-article heading-6 d-block">
                        Share this article
                    </h6>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <ul class="list-unstyled share-icons">
                        <li class="share facebook d-inline-block">
                            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/sharing/logo-facebook.svg" class="img-fluid share-icon" alt="Facebook Sharing">
                            </a>
                        </li>
                        <li class="share linkedin d-inline-block">
                            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" target="_blank">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/sharing/logo-linkedin.svg" class="img-fluid share-icon" alt="LinkedIn Sharing">
                            </a>
                        </li>
                        <li class="share twitter d-inline-block">
                            <a href="http://twitter.com/share?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&hashtags=sequenex">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/sharing/twitter-box.svg" class="img-fluid share-icon" alt="Twitter Sharing">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </article>
    </div><!-- #container -->
</div>


<?php get_footer(); ?>