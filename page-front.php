<?php

/*
Template Name: Front Page
*/

get_header();

?>

		<div class="about">
			<div class="mast">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-about.png" alt="" class="circle">
				<div class="description">
					The Lynbrook Elementary School PTA is a community organization that supports approximately 600 students in the central area of Springfield, Virginia. The PTA strives to serve as a bridge of diversity, community and support between students, teachers, parents as the heart of the community.
				</div>
				<img src="<?php bloginfo( 'template_url' ); ?>/img/heart-of-the-community.png" class="heart">
				<a href="/contact" class="contact">Contact Us</a>
			</div>
			<div class="content">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/4-word-clover.png" alt="" class="right">
				<p>Facts about our community:</p>
				<ul>
					<li>Lynbrook Elementary is a Title 1 school</li>
					<li>Our community is very diverse with more than 75% of students learning English as a second language, the highest concentration of English Language Learners in the county.</li>
					<li>Over 80% of our students receive free or reduced cost lunches</li>
					<li>The PTA relies solely on gifts from the community and fundraising efforts to provide extracurricular activities, field trips and events</li>
					<li>Our Family Learning Center provides support for mothers, small children to provide life skills, English classes, parenting, and other classes for immigrant families</li>
					<li>The school provides individualized educational support for more than 125 students that are identified as having unique specific and/or multiple learning disabilities needs and serves as a specialized autism center</li>
				</ul>
			</div>
		</div>

		<div class="projects">
			<div class="mast">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/circle-projects.png" alt="" class="circle">
				<div class="description">
					Thanks to the support of our community, the PTA is able to provide unique opportunities for students and their families.  Here are a few of our current projects: 
				</div>
			</div>
			<img src="<?php bloginfo( 'template_url' ); ?>/img/photo-project-1.png" alt="" class="photo-1">
			<img src="<?php bloginfo( 'template_url' ); ?>/img/photo-project-2.png" alt="" class="photo-2">
			<div class="content">
				<h4>Family Learning Center</h4>
				<p>The FLC serves as a hub for parents who come to the school for additional training, to learn English and find community with others who are learning English as a second language.</p>

				<h4>STEAM Center</h4>
				<p>STEAM incorporates science, teachnology, engineering and math to give children a hands-on learning experience with unique activities. </p>

				<h4>Field Trips</h4>
				<p>Each year the PTA funds special trips to reinforce the Standards of Learning.  For example, fourth graders take a trip to Williamsburg to visit Jamestown, fifth graders tour the Baltimore Aquarium, and first graders visit the National Zoo among other trips and events.</p>
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
					<li>Fairfax schools system faces growing budget challenge as more students need ESOL</li>
					<li>Love wins! from Momastery: Truth Tellers + Hope Spreaders</li>
					<li>Springfield school receives charity makeover</li>
					<li>Miracle Makeover</li>
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