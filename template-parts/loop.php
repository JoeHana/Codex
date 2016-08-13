<?php

/**
 * File Name:		loop.php
 * Version:			1.0.0
 */

?>

<?php if( is_404() ) { ?>

    <div id="content" class="content uk-animation-fade">
    
		<?php get_template_part( 'template-parts/content', '404' ); ?>
        
    </div>
        
<?php } else { ?>

	<?php while ( have_posts() ) : the_post(); ?>
    
        <div id="content" class="content uk-animation-fade">
        
            <?php get_template_part( 'template-parts/content' ); ?>
             
        </div>
       
    <?php endwhile; ?>
    
<?php } ?>
