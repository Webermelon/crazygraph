<?php
/**
 * Default page template
 *
 * @package WordPress
 * @subpackage custom_theme
 * @author Studio TEM
 */
?>

<section class="example">
	<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				echo '<h1>' . get_the_title() . '</h1><hr>';
				the_content();
			}
		}
	?>
</section>

<section class="blog-posts">
	<?php
		$posts = get_posts(
			array(
				'post_type'				=> 'post',
				'post_status'			=> 'publish',
				'suppress_filters'		=> true,
				'orderby'				=> 'date',
				'order'					=> 'DESC',
				'fields'				=> 'ids'
			)
		);
		if ( ! empty( $posts ) ) {
			echo '<hr><ul>';
			foreach ( $posts as $post_id ) {
				echo '<li>' . get_the_title( $post_id ) . '</li>';
			}
			echo '</ul>';
		}
	?>
</section>
