<?php

/**
 * File Name:		content.php
 * Version:			1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header>
        <?php the_title( '<h2>', '</h2>' ); ?>
        <?php edit_post_link( '<span class="ion-edit"></span>' ); ?>
    </header>
    
    <main>
        <?php the_content(); ?>
    </main>
            
</article><!-- #post-<?php the_ID(); ?> -->