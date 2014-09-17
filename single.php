<?php
/**
 * The Template for displaying all single posts
 */

get_header();

?>
	<div id="primary" class="site-content content-narrow" role="main">
		<?php 
		if ( have_posts() ) :
			while ( have_posts() ) : the_post(); 
				?>
				<h1><?php the_title(); ?></h1>
				<?php
				the_content();
			endwhile;
		endif;
		 ?>
	</div><!-- #primary -->
<?php

get_footer();

?>