<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>





<?php if( have_rows('portfolio_grid') ): ?>

	<?php while ( have_rows('portfolio_grid') ) : the_row(); ?>
		<!-- Grid One -->
		<?php	if( get_row_layout() == 'grid_one' ): ?>

		<div class="row grid-one">
			<div class="col-md-4">
				<div class="grid-one-image-one">
					<a href="<?php the_sub_field('grid_one_image_one_link'); ?>">
						<img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_one');  ?>" alt="">
					</a>
				</div>
				<div class="grid-one-image-two">
					<a href="<?php the_sub_field('grid_one_image_two_link'); ?>">
						<img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_two');  ?>" alt="">
					</a>
				</div>
			</div>

		 <div class="col-md-8">
			 <div class="grid-one-image-three">
				 <a href="<?php the_sub_field('grid_one_image_three_link'); ?>">
					 <img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_three');  ?>" alt="">
				 </a>
			 </div>
			 <div class="grid-one-image-four">
				 <a href="<?php the_sub_field('grid_one_image_four_link'); ?>">
					 <img class="img-responsive" src="<?php	echo the_sub_field('grid_one_image_four');  ?>" alt="">
				 </a>
			 </div>

		 </div>
	</div><!-- /.grid-one -->
		<!-- Grid One -->
	   <?php elseif( get_row_layout() == 'grid_two' ):  ?>
	   <div class="row">
			<div class="col-md-4">
				<a href="<?php	the_sub_field('grid_two_image_one_link'); ?>"><img class="img-responsive" src="<?php	the_sub_field('grid_two_image_one'); ?>" alt=""></a>
			</div>
		</div>
	<?php	endif;
		endwhile;
		else :
	// no layouts found
endif; ?>
