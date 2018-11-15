<?php if( has_post_thumbnail() ) : ?>

	<?php $src = get_the_post_thumbnail_url( $post->ID, 'large' ); ?>
	
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12 col-md-6 col-lg-4 col-xl-3 wpb_column home' ); ?>>
		<a href="<?php the_permalink(); ?>">
			<img src="<?php echo esc_url($src); ?>" 
				 style="z-index: 11; 
						width: 220px; 
						position: absolute; 
						top: 0; 
						right: 0px;
						border: 1px solid #444;" />
			<div class="post imagebg standard-height scrim" style="background-image: url(<?php echo esc_url($src); ?>);">
				<div class="stick-to-bottom">
					<?php 
						get_template_part( 'inc/content-post', 'category' );
						the_title( '<h3><a href="'. get_permalink() .'">', '</a></h3>' ); 
						echo wpautop( wp_trim_words(get_the_excerpt(), 15) );
					?>
					<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading &nbsp; &rarr;', 'griddr' ); ?></a>
				</div>
			</div>
		</a>
	</article>

<?php else : ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( 'col-sm-12 col-md-6 col-lg-4 col-xl-3 wpb_column home' ); ?>>
		<div class="border post standard-height">
			<div class="stick-to-bottom">
				<?php 
					get_template_part( 'inc/content-post', 'category' );
					the_title( '<h3><a href="'. get_permalink() .'">', '</a></h3>' ); 
					echo wpautop( wp_trim_words(get_the_excerpt(), 15) );
				?>
				<a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Continue Reading &nbsp; &rarr;', 'griddr' ); ?></a>
			</div>
		</div>
	</article>

<?php endif;
