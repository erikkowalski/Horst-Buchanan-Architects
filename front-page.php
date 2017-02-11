<?php while (have_posts()) : the_post(); ?>
<p class="sub-head" ><span >ARCHITECTS</span></p>
<?php get_template_part('templates/content', 'page'); ?>
<div id="carousel-home-page" class="carousel fade" data-ride="carousel">
	<!-- Indicators -->

	<?php
	$images = get_field('home_page_gallery');
	if( $images ): ?>
	<?php $dataId=0 ?>

	<!-- Wrapper for slides -->

	<div class="carousel-inner" role="listbox">
		<?php $slideId = 0; ?>

		<?php foreach( $images as $image ): ?>
		<div class="item " id="slide<?php echo $slideId;?>">
			<img class="img-responsive" src="<?php echo $image['url']; ?>" alt="  " />
		</div>
		<?php $slideId++; ?>
		<?php endforeach; ?>
	</div>


	<?php endif; ?>


<?php endwhile; ?>

<!--
<div class="col-md-4">

	<h3>Approach</h3>
	<h4>Thoughtful design; appropriate solutions.
	</h4>
	<p>We design houses inspired by the needs and wishes of our clients.  We make the process engaging; creatively managing complex projects.</p>
</div> -->
