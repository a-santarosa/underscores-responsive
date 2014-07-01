<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package Underscores Responsive
 */
if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
	<div id="secondary" class="widget-area col span_4 clr" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary -->
