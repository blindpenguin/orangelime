<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	</header>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
	</div>
	<footer>
		<div class="medium-6 columns main-tags">
			<?php $tag = get_the_tags(); if ( $tag ) { the_tags('', ' ', ''); } ?>
		</div>
		<div class="medium-6 columns main-comment">
			<?php the_date(); ?> from <?php the_author(); ?>, <a href="<?php comments_link() ?>">Comments</a>
		</div>
	</footer>
	<hr />
</article>
