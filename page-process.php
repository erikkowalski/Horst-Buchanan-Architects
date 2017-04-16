
<section class="process-content">
<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<h4><?php the_field('process_quote') ?></h4>
		<hr>
	<!-- Design Images Carousel -->
	<div id="carousel-process-page" class="carousel fade" data-ride="carousel" >
		<?php $images = get_field('process_design_gallery');
			if( $images ): ?>
		<?php $dataId=0 ?>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php $slideId = 0; ?>
			<?php foreach( $images as $image ): ?>
			<div class="item " id="design_slide<?php echo $slideId;?>">
				<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="  " />
			</div>
			<?php $slideId++; ?>
			<?php endforeach; ?>
		</div>
		<?php endif; ?>
	</div>
	<hr>
	<div class="process-bottom-section ">
	<div class="row">

				<?php the_field('design_section_text') ?>
		</div>
		<div class="row">

				<?php the_field('process_construction_text') ?>
		</div><!-- /.col-md-6 -->

			<div class="row">

			<?php the_field('process_construction_administration_text') ?>
		</div> <!-- .row -->
		<hr>




</div> <!--/.process-content -->
		<?php endwhile; ?>


</section>
