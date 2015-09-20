<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside id="sidebar" class="small-12 large-3 columns">
	<?php do_action( 'foundationpress_before_sidebar' ); ?>
	<div class="small-12 columns sidebar-title">
		<h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	</div>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'foundationpress_after_sidebar' ); ?>
</aside>
