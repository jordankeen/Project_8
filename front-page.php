<?php get_header();  ?>

	<!-- Top Hero Section -->
	<section class="hero">
		<div class="box-container">

			<div class="page-heading">
				<h1>front-end web developer.</h1>
			</div>

			<div class="box-2">
				<?php $image = get_field('box_2_image'); ?>
				<img class="accent" src="<?php echo $image['url']?>">

				<div class="box-1">
					<?php $image = get_field('box_1_image'); ?>
					<img class="accent" src="<?php echo $image['url']?>">
				</div>
			</div>

			<div class="box-3">
				<?php $image = get_field('box_3_image'); ?>
				<img class="accent" src="<?php echo $image['url']?>">
			</div>

		</div>
	</section>

	<!-- <section class="hero2"> -->

		<div class="hero2-container" style="background-image: url(<?php $image = get_field('box_3_image'); ?>
					<?php echo $image['url']?>

					)">
			
			<h1>front-end web developer.</h1>

		</div>

	<!-- </section> -->
	<!-- About Section -->
	<section class="about" id="about">
		
			<div class="title-wrapper">
				<h3><?php echo get_field('about_title'); ?></h3>
			</div>

		<div class="about-container">

			<div class="about-content">

				<p><?php echo get_field('about_paragraph'); ?></p>

				<ul>
					<li>Get in touch:</li>
					<li>
						<a target="_blank" href="https://ca.linkedin.com/in/jordankeen"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/Eli_Roken"><i class="fa fa-twitter" aria-hidden="true"></i></a></i>
					</li>
					<li>
						<a href="mailto:hello@jordankeen.com"><i class="fa fa-envelope" aria-hidden="true"></i></a></i>
					</li>
				</ul>
			</div>

			<div class="about-image-container">
				<?php $image = get_field('about_image'); ?>
				<img class="accent" src="<?php echo $image['url']?>">
			</div>



		</div>
	</section>

	<section class="portfolio" id="portfolio">
		<div class="title-wrapper">
			<h3>work</h3>					
		</div>


		<div class="portfolio-wrapper">
	 	<?php 
		$portfolio_rightArgs = array(
			'post_type' => 'portfolio_right',
			'posts_per_page' => 5,
			'meta_key' => 'order_number',
			'orderby' => 'meta_value_num',
			'order' => 'DESC'
			);
		$portfolio_rightQuery = new WP_Query($portfolio_rightArgs);
		if( $portfolio_rightQuery->have_posts() ) {
			while( $portfolio_rightQuery->have_posts() ) {
				$portfolio_rightQuery->the_post();
				?>
				<article class="portfolio-item-container">

					<div class="portfolio-content">
						<h4><?php the_title() ?></h4>
						<p><?php the_field('short_description'); ?></p>
						<p><?php the_field('long_description'); ?></p>

						<ul>
							<?php
								while(has_sub_field('skills_used')) {
								?>
								<li><?php the_sub_field('skill_name')?></li>
								<?php
								}
							?>
						</ul>

						<button class="view-live hvr-sweep-to-right">
							<a href="<?php the_field('portfolio_link'); ?>">View Live</a>
						</button>
					</div>

					<div class="portfolio-image">
						<?php $image = get_field('portfolio_image'); ?>
						<img src="<?php echo $image['url']?>">
					</div>

				</article>
				<?php
			}
		}
		wp_reset_postdata();
		?>
		</div>
	</section>

	<!-- Skills Section -->
		<section class="skills" id="skills">
			
			<div class="title-wrapper">
				<h3>Skills</h3>
			</div>
				<div class="skill-container">
				
					<div class="skill-item">
						<span class="devicons devicons-html5"></span>
						<p>HTML5</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-css3"></span>
						<p>CSS3</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-jquery"></span>
						<p>JQUERY</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-wordpress"></span>
						<p>WORDPRESS</p>
					</div>
					<div class="skill-item php-margin">
						<span class="devicons devicons-php"></span>
						<p>PHP</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-git"></span>
						<p>GIT</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-github"></span>
						<p>GITHUB</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-gulp"></span>
						<p>GULP</p>
					</div>
					<div class="skill-item sass-margin">
						<span class="devicons devicons-sass"></span>
						<p>SASS</p>
					</div>
					<div class="skill-item">
						<span class="devicons devicons-javascript_badge"></span>
						<p>JAVASCRIPT</p>
					</div>
							
				</div>
		</section>

		<section class="contact" id="contact">

			<div class="title-wrapper">
				<h3>Contact</h3>
			</div>

			<div class="form-wrapper">

				<div class="contact-info">
					<p>Message me at <a href="mailto:hello@jordankeen.com">HELLO[AT]JORDANKEEN.COM</a></p>
					<p>or through the form below.</p>
				</div>			

					<?php // Start the loop ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

					<?php endwhile; // end the loop?>

			</div>

		</section>

<?php get_footer(); ?>