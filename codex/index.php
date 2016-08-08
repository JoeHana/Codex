<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
    
        <!-- Meta -->
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

		<meta charset="utf-8" />
        <meta name="mobile-web-app-capable" content="yes">
        
        <?php wp_head(); ?>
        
    </head>

    <body <?php body_class(); ?>>
    
		<div class="wrap">
        
        	<div id="toolbar" class="toolbar fixed">
                <a href="#aside" class="panel-toggle"><i class="icon ion-navicon"></i></a>
            </div><!-- /#TOOLBAR -->
            
            <aside id="aside" class="aside">
            
                <div class="inner">
                
					<?php 
					
					// include logo
					get_template_part( 'template-parts/logo' );

					// include widget area
                    dynamic_sidebar( 'aside' );
					
					?>
                                                    
                </div>
                
            </aside><!-- /#ASIDE --> 
                      
            <main id="main" class="main">
            
				<?php get_template_part( 'template-parts/loop' ); ?>
                                
            </main><!-- /#MAIN -->
            
            <!-- MODALS > START -->                                
            <div id="settings" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    This is the Settings Panel
                </div>
            </div>
            
            <div id="help" class="uk-modal">
                <div class="uk-modal-dialog">
                    <a class="uk-modal-close uk-close"></a>
                    In diesem Online-Dokument wird der Businessplan von WPCasa beschrieben. Änderungen werden regelmäßig vorgenommen und entsprechend markiert. Im linken Navigationsbereich lassen sich die einzelnen Bereiche direkt auswählen. Weiterführende Informationen finden sich im unteren Bereich der Navigationsleiste unter dem Punkt "Links".
                </div>
            </div>
            <!-- MODALS > END -->
        
		</div><!-- /.wrap -->

    </body>
    
	<?php wp_footer(); ?>
    
</html>