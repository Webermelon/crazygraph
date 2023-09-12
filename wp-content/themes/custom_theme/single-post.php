<?php
/**
 * Blog post detail template
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
