
<section class="process-content">

	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<h4><?php the_field('process_quote') ?></h4>
		<hr>
			<img class="img-responsive" src="<?php the_field('process_page_header') ?>" alt="">
		<hr>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</section>
