<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package InsightCustom
 */

?>
<div class="article-wrapper w-100 w-50-m">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="thumbnail-wrapper">
			<?php insightCustom_post_thumbnail(); ?>
			<div class="read-more-button">
				<a href="<?php the_permalink(); ?>">
					Read More<span class="screen-reader-text"> about <?php the_title(); ?></span>
				</a>
			</div>
		</div>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title g6 no-margin"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;
			?>
			<div>
				<p class="post-data">
					<span class="post-author"><?php insightCustom_posted_by(); ?><br></span>
					<span class="post-date">
						<?php
						$post_date = get_the_date( 'm/d/Y' );
						echo $post_date . " ";
						?>
					</span>
					<span class="post-cat">
					<?php
					get_template_part( "/inc/svg-icons/tags" );
					$categories = get_the_category();
					$separator = ' | ';
					$output = '';
					if ( ! empty( $categories ) ) {
					    foreach( $categories as $category ) {
					        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
					    }
					    echo trim( $output, $separator );
					}
					?>
				</span>
				</p>
			</div>
		</header><!-- .entry-header -->
		<div class="continue-reading screen-reader-text">
			<?php
			$read_more_link = sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue Reading %s', 'insightCustom' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			);
			?>
			<a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark" class="redButton"><?php echo $read_more_link; ?></a>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->
</div>
