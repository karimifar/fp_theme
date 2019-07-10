<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fathers_app
 */

if ( ! is_active_sidebar( 'sidebar-1' ) || ! is_active_sidebar( 'sidebar-2' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
	<?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->
