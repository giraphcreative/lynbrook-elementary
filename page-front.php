<?php

/*
Template Name: Front Page
*/

get_header();

$about = get_page_by_path( 'about' );
$projects = get_page_by_path( 'projects' );

?>

		<div class="about">
			<div class="mast">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-about.png" alt="" class="circle">
				<div class="description">
					<?php print $about->post_excerpt ?>
				</div>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/heart-of-the-community.png" class="heart">
				<a href="/contact" class="contact">Contact Us</a>
			</div>
			<div class="content">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/4-word-clover.png" alt="" class="right">
				<?php print $about->post_content ?>
			</div>
		</div>

		<div class="projects">
			<div class="mast">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-projects.png" alt="" class="circle">
				<div class="description">
					<?php print $projects->post_excerpt ?> 
				</div>
			</div>
			<img src="<?php bloginfo( 'template_url' ); ?>/img/photo-project-1.png" alt="" class="photo-1">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/photo-project-2.png" alt="" class="photo-2">
			<div class="content">
				<?php print $projects->post_content ?>
			</div>
		</div>

		<div class="volunteers">
			<div class="content">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-volunteers.png" alt="" class="circle">
				<p>The Lynbrook community relies on volunteers and partners from the community.</p> 
				<p><strong>Interested in volunteering?</strong><br>
					Click here to get information of current volunteering opportunities.</p>
			</div>
		</div>

		<div class="news">
			<div class="mast">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-news.png" alt="" class="circle">
				<div class="description">Read more about the Lynbrook community!</div>
			</div>
			<div class="content">
				<ul>
				<?php 
				query_posts( 'posts_per_page=5' );
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); 
						?>
					<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>

						<?php
					} // end while
				} // end if
				?>
				</ul>
			</div>
		</div>

		<div class="join">
			<div class="column">
				<div class="box">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-join.png" alt="" class="circle">
					<p>Support our community by becoming a member of the Lynbrook PTA!</p>
				</div>
			</div>
			<div class="column">
				<div class="box">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-donate.png" alt="" class="circle">
					<p>Make a tax-deductible donation to our various projects.</p>
				</div>
			</div>
		</div>

<?php get_footer(); ?>