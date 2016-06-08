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
<!-- About Section -->
<section class="about" id="about">
  <div class="about-container">

    <div class="about-content">
      <h3><?php echo get_field('about_title'); ?></h3>

      <p><?php echo get_field('about_paragraph'); ?></p>
    </div>

    <div class="about-image-container">
      <?php $image = get_field('about_image'); ?>
      <img class="accent" src="<?php echo $image['url']?>">
    </div>

  </div>
</section>

<section class="portfolio">

             <?php 
              $portfolio_rightArgs = array(
                'post_type' => 'portfolio_right',
                'posts_per_page' => 5,
                'order' => 'ASC',
                'orderby' => 'title'
                );
              $portfolio_rightQuery = new WP_Query($portfolio_rightArgs);
              if( $portfolio_rightQuery->have_posts() ) {
                while( $portfolio_rightQuery->have_posts() ) {
                  $portfolio_rightQuery->the_post();
                  ?>
                  <article class="portfolio-item-container">

                    <div class="portfolio-content">
                      <h3><?php the_title() ?></h3>
                      <p><?php the_field('item_name'); ?></p>
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

                      <button class="view-live">
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
      </section>

<?php get_footer(); ?>