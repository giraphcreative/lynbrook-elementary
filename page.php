<?php

get_header();

?>

	<div id="primary" class="site-content content-narrow" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<div class="image right">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="content left">
			<?php the_content(); ?>
		</div>
	<?php endwhile; ?>

	</div><!-- #primary -->

<?php

get_footer();

?>