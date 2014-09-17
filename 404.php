<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

get_header(); ?>


	<div id="primary" class="content-narrow" role="main">

		<header class="page-header">
			<h1 class="page-title"><?php _e( 'Not Found', 'twentyfourteen' ); ?></h1>
		</header>

		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfourteen' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->

	</div><!-- #primary -->

<?php
get_footer();

?>