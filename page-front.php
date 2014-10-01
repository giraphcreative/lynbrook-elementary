<?php

/*
Template Name: Front Page
*/

get_header();

$about = get_page_by_path( 'about' );
$projects = get_page_by_path( 'projects' );
$volunteer = get_page_by_path( 'volunteer' );

?>
	
		<a name="about"></a>
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
	
		<a name="projects"></a>
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
		
		<a name="volunteers"></a>
		<div class="volunteers">
			<div class="content">
				<a href="/volunteer"><img src="<?php bloginfo( 'template_url' ); ?>/img/circle-volunteers.png" alt="" class="circle"></a>
				<?php print $volunteer->post_excerpt ?>
			</div>
		</div>
		
		<a name="news"></a>
		<div class="news">
			<div class="mast">
				<a href="/news"><img src="<?php bloginfo( 'template_url' ); ?>/img/circle-news.png" alt="" class="circle"></a>
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
	
		<a name="join"></a>
		<div class="join">
			<div class="column">
				<div class="box">
					<a href="/join"><img src="<?php bloginfo( 'template_url' ); ?>/img/circle-join.png" alt="" class="circle"></a>
					<p>Support our community by becoming a member of the Lynbrook PTA!</p>
				</div>
			</div>
			<div class="column">
				<div class="box">
					<a href="https://www.sagepayments.net/eftcart/forms/donate.asp?M_id=169717435723"><img src="<?php bloginfo( 'template_url' ); ?>/img/circle-donate.png" alt="" class="circle"></a>
					<p>Make a tax-deductible donation to our various projects.</p>
				</div>
			</div>
		</div>

<?php get_footer(); ?>