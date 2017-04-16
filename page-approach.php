<?php while (have_posts()) : the_post(); ?>
<div class="approach-content">
	<?php get_template_part('templates/page', 'header'); ?>
	<h4><?php the_field('header_quote') ?></h4>
	<hr>
	<img class="img-responsive" src="<?php the_field('approach_header_image') ?>" alt="">
	<hr>
	<div class="bottom">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
</div>
<?php endwhile; ?>
