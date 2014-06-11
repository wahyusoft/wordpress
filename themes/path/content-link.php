<?php
/**
 * Link Content Template
 *
 * Template used for 'link' post format.
 *
 * @package Path
 * @subpackage Template
 * @since 0.1.0
 */

do_atomic( 'before_entry' ); // path_before_entry ?>

<article id="post-<?php the_ID(); ?>" class="<?php hybrid_entry_class(); ?>">

	<?php do_atomic( 'open_entry' ); // path_open_entry ?>

	<?php if ( is_singular() ) { ?>
		
		<header class="entry-header">
			<?php echo apply_atomic_shortcode( 'entry_title', '[entry-title]' ); ?>
			<?php echo apply_atomic_shortcode( 'byline', '<div class="byline">' . __( '[post-format-link] published on [entry-published] [entry-comments-link before=" | "] [entry-edit-link before=" | "]', 'path' ) . '</div>' ); ?>
		</header><!-- .entry-header -->
			
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'path' ), 'after' => '</p>' ) ); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[entry-terms taxonomy="category" before="Posted in "] [entry-terms before="Tagged "]', 'path' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->
		
	<?php } else { ?>

		<?php if ( get_the_title() ) { ?>

			<?php if ( current_theme_supports( 'get-the-image' ) ) get_the_image( array( 'meta_key' => 'Thumbnail', 'size' => 'path-thumbnail' ) ); ?>

			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php echo esc_url( hybrid_get_the_post_format_url() ); ?>" title="<?php the_title_attribute(); ?>"><?php printf( '%s <span class="meta-nav">&rarr;</span>', the_title( '', '', false ) ); ?></a></h2>
			</header><!-- .entry-header -->
			
		<?php } else { ?>

			<div class="entry-content">
				<?php the_content(); ?>
				<?php wp_link_pages( array( 'before' => '<p class="page-links">' . __( 'Pages:', 'path' ), 'after' => '</p>' ) ); ?>
			</div><!-- .entry-content -->
		
		<?php } ?>

		<footer class="entry-footer">
			<?php echo apply_atomic_shortcode( 'entry_meta', '<div class="entry-meta">' . __( '[post-format-link] published on [entry-published] [entry-permalink before="| "] [entry-comments-link before="| "] [entry-edit-link before="| "]', 'path' ) . '</div>' ); ?>
		</footer><!-- .entry-footer -->
		
	<?php } ?>

	<?php do_atomic( 'close_entry' ); // path_close_entry ?>

</article><!-- .hentry -->

<?php do_atomic( 'after_entry' ); // path_after_entry ?>