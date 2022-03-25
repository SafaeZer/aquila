<?php

/**
 * Content template
 * 
 * @package 
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    get_template_part('templat-parts/components/blog/entry-header');
    get_template_part('templat-parts/components/blog/entry-meta');
    get_template_part('templat-parts/components/blog/entry-content');
    get_template_part('templat-parts/components/blog/entry-footer');

    ?>
</article>