<?php

/**
 * File Name:		content.php
 * Version:			1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <header>
        <?php the_title( '<h2>', '</h2>' ); ?>
    </header>
    
    <main>
        <div class="hero intro">
            <h2>404</h2>
        </div>
    </main>
            
</article><!-- #post-<?php the_ID(); ?> -->