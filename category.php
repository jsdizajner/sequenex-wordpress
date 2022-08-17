<?php
/**
 * This page displays archive of all Blog Posts
 */

get_header();
$filteredCategory = get_the_category();
?>

<div class="container-fluid content">
    <div class="container-lg" id="container">
        <h1 class="primary contact-title">Sequenex News</h1>
        <div class="row">
            <div class="col-12">
                <div class="bg-light featured-post-container my-4">
                    <div class="container-fluid">
                        <div class="row">
                            <?php
                            $args = [
                                'posts_per_page' => 1,
                                'meta_query' => [
                                    [
                                        'key' => 'featured',
                                        'value' => 1
                                    ]
                                ]
                            ];

                            $featured = new WP_Query($args);
                            ?>
                            <?php if ($featured->have_posts()) : while ($featured->have_posts()) : $featured->the_post(); ?>
                            <div class="col-md-7 p-5 py-2">
                                <h4 class="quadrary blog-featured">FEATURED</h4>
                                <h1 class="heading-3 blog-title-color"><?php the_title(); ?></h1>
                                <p class="body-emphasis blog-featured-desc">
                                    <?php echo get_the_excerpt(); ?>
                                </p>
                                <a href="<?php the_permalink(); ?>" class="primary link-lg">Read Article<span class="svg-holder ml-3"></span><svg xmlns="http://www.w3.org/2000/svg" width="30" height="16.828" viewBox="0 0 30 16.828">
                                        <g id="arrow-right" transform="translate(10 -3.586)">
                                            <line id="Line_1" data-name="Line 1" x2="28" transform="translate(-9 12)" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                            <path id="Path_21" data-name="Path 21" d="M12,5l7,7-7,7" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        </g>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-md-5 p-0 m-0">
                                <a href="<?php the_permalink(); ?>" class="none">
                                    <div class="featured-image" style="background: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>') no-repeat center center;background-size: cover;"></div>
                                </a>
                            </div>
                            <?php endwhile; endif; wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main class="mt-5">
            <div class="row">
                <div class="col-12 my-3">
                    <a href="<?php echo site_url() . '/blog'; ?>" class="primary link-sm">Back to All Articles</a>
                </div>
                <div class="col-md-8">
                    <h3 class="heading-3 blog-title-color">Browsing in: <?php echo $filteredCategory[0]->name; ?></h3>
                    
                    <!-- List of Posts -->
                    <section class="posts-list mt-4" id="posts">

                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                        <div class="card mb-3 pb-5 pb-sm-5 post py-4 d-flex align-items-center">
                            <div class="row g-0">
                                <div class="col-md-8 order-2 order-md-1 mt-sm-4">
                                    <div class="card-body">
                                        <a href="<?php the_permalink(); ?>" class="title-link">
                                            <h5 class="ternary post-heading"><?php the_title(); ?></h5>
                                        </a>
                                        <p class="card-text"><small class="text-muted"><?php echo get_the_date(); ?></small></p>

                                        <p class="post-excerpt blog-title-color"><?php echo get_the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="primary link-sm">Read Article</a>
                                    </div>
                                </div>
                                <div class="col-md-4 order-1 order-md-2 mb-4 mb-sm-0">
                                    <a href="#" class="none">
                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" class="img-fluid img-thumbnail" alt="Thumbnail Image: <?php the_title(); ?>">
                                    </a>
                                </div>
                            </div>
                        </div> <!-- .card .post -->
                        <hr style="border: 1px #96D0D6 solid;">
                        <?php endwhile; ?>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <?php bootstrap_pagination(); ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <h4>There are no posts available.</h4>
                    <?php endif; ?>
                        
                    </section> <!-- #posts -->
                    <!-- End of posts -->

                </div>
                <div class="col-md-4">
                    <section class="widget w-blog-categories p-4">
                        <h3 class="widget-title">
                            <?php echo __('Browse by category', 'sequenex'); ?>
                        </h3>
                        <ul class="categories-list">
                            <?php 
                                $categories = get_categories(['orderby' => 'name','parent' => 0]);
                                if ($categories) :
                                    foreach ($categories as $category) {
                                        echo '<li class="d-inline-block category-wrapper"><a href="'.get_category_link($category->term_id).'" class="badge badge-light">'.esc_html($category->name).'</a></li>';
                                    }
                                endif;
                            ?>
                        </ul>
                    </section>
                </div>
            </div>
        </main>
        
    </div><!-- #container -->
</div>


<?php get_footer(); ?>