<?php
/**
 * The template for displaying Sidebar on right side of Content
 *
 * @package rtPanel
 * @since rtPanel Theme 2.0
 */

?>
<div id="sidebar"> <!-- sidebar begins -->
    <?php
    // ========== [ rtpanel_hook for adding content before #sidebar ] ========== //
    rtp_hook_before_sidebar();
    // ========== [ Widgetized Sidebar, if you have the plugin installed ] ========== //
    if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar( 'Sidebar Widgets' ) ) { ?>

        <!-- ========== [ Fall-Back Default Widgets ] ========== -->

            <div class="widget sidebar-widget"><h3 class="widgettitle"><?php _e( 'Search', 'rtPanel' ); ?></h3><?php get_search_form(); ?></div>
            <div class="widget sidebar-widget"><h3 class="widgettitle"><?php _e( 'Archives', 'rtPanel' ); ?></h3><ul><?php wp_get_archives( array( 'type' => 'monthly' ) ); ?></ul></div>
            <div class="widget sidebar-widget"><h3 class="widgettitle"><?php _e( 'Meta', 'rtPanel' ); ?></h3><ul><?php wp_register(); ?><li><?php wp_loginout(); ?></li><?php wp_meta(); ?></ul></div>
            
        <!-- ========== [ End of Default Widgets ] ========== -->

    <?php }
    // ========== [ rtpanel_hook for adding content after #sidebar ] ========== //
    rtp_hook_after_sidebar(); ?>
</div> <!-- end sidebar -->