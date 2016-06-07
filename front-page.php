<?php get_header();  ?>

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

<?php get_footer(); ?>