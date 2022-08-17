<?php
/**
 * Template Part: Page Title
 * Description: This component is used in page-templates. It renders Page Title - the_title(), Page Subheadline - $subheadline, Page Intro Text - $introText
 */

?>


<div class="page-title">
    <h1 class="primary"><?php the_title(); ?></h1>
    <?php

        // Render Subheadline        
        $subheadline = get_field("sub_headline");

        if (isset($subheadline) ) :
            echo '<h2 class="secondary">' . $subheadline . '</h2>';
        endif;

        // Render Intro Text
        $introText = get_field("introduction_text");

        if (isset($introText)) :
            echo '<p class="text">' . $introText . '</p>';
        endif;

    ?>
</div>