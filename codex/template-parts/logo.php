<?php
if( current_theme_supports( 'custom-logo' ) ) {
	
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	
	if( $custom_logo_id ) {
		$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		$image = $image[0];
	} else {
		$image = '';
	}
	
}
?>
        
<div id="logo" class="widget-wrap logo">

    <a href="<?php echo home_url() ?>" title="">
        
        <?php if( $image ) { ?>
            <img src="<?php echo $image ?>" alt="" width="60" height="60" />
        <?php } ?>
        
        <h1><?php echo get_bloginfo( 'title' ); ?></h1>
        <h3><?php echo get_bloginfo( 'description' ); ?></h3>
    
    </a>

</div>