<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="row collapse main-content">
	<div class="small-12 large-9 columns" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php the_content(); ?>
			</div>
			<footer class="entry-footer">
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<div class="medium-6 columns main-tags">
					<?php $tag = get_the_tags(); if ( $tag ) { the_tags('', ' ', ''); } ?>
				</div>
				<div class="medium-6 columns main-comment">
					<?php the_date(); ?> from <?php the_author(); ?>, <a href="<?php comments_link() ?>">Comments</a>
				</div>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
