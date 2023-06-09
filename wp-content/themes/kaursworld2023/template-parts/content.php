<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kaursworld2023
 */

?>
<div class="articles__outer">
	
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if(is_single()){ ?><div class="header__single"><?php } ?>
		<div class="thumb__wrap"><?php kaursworld2023_post_thumbnail(); ?></div>
		<div class="post-title__wrap">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title container">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<?php endif; ?>
		</div>
		<?php if(is_single()){ ?> </div> <?php } ?>

		<?php if(is_single()){ ?>
			<div class="container single-postcontent">
				<div class="single-cont__wrap">
				<?php } ?>
					<div class="entry-content">
							<div class="entry-meta">
								<?php
								kaursworld2023_posted_on();
								kaursworld2023_posted_by();
								?>
							</div><!-- .entry-meta -->
							<?php
							if(is_single()){
								the_content(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kaursworld2023' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);
							} else{
								the_excerpt(
									sprintf(
										wp_kses(
											/* translators: %s: Name of current post. Only visible to screen readers */
											__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'kaursworld2023' ),
											array(
												'span' => array(
													'class' => array(),
												),
											)
										),
										wp_kses_post( get_the_title() )
									)
								);
							}
							

							wp_link_pages(
								array(
									'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kaursworld2023' ),
									'after'  => '</div>',
								)
							);
							?>
					</div><!-- .entry-content -->
				<?php if(is_single()){ ?>
				<div class="right__sidebar"><?php echo get_sidebar()?></div></div>
			<?php } ?>
		<footer class="entry-footer">
			<?php kaursworld2023_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<?php if(is_single()){ ?>
			</div>
		<?php } ?>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>