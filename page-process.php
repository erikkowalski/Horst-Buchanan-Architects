
<section class="process-content">
<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<h4><?php the_field('process_quote') ?></h4>
		<hr>

	<div class="process-bottom-section row">
	<div class="col-md-6">
		<!-- Design Images Carousel -->
		<div id="carousel-process-page" class="carousel fade" data-ride="carousel">
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

		<!-- Construction Images Carousel -->
		<div id="carousel-process-page-construction" class="carousel fade" data-ride="carousel">
				<?php $images = get_field('process_construction_gallery');
				if( $images ): ?>
				<?php $dataId=0 ?>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php $slideId = 0; ?>
				<?php foreach( $images as $image ): ?>
				<div class="item " id="construction_slide<?php echo $slideId;?>">
					<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="  " />
				</div>
				<?php $slideId++; ?>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		<hr>
		<!-- Construction Images Carousel -->
		<div id="carousel-process-page-administration" class="carousel fade" data-ride="carousel">
			<?php $images = get_field('process_administration_gallery');
				if( $images ): ?>
				<?php $dataId=0 ?>
			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<?php $slideId = 0; ?>
				<?php foreach( $images as $image ): ?>
				<div class="item " id="administration_slide<?php echo $slideId;?>">
					<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="  " />
				</div>
				<?php $slideId++; ?>
				<?php endforeach; ?>
			</div>
			<?php endif; ?>
		</div>
		<hr>

		</div> <!--/.col-md-6 -->

		<div class="col-md-6">
		<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
		</div><!--/.col-md-6 -->
	</div>

</section>
