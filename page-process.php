<section class="process-header-img">
	<img class="img-responsive" src="<?php the_field('process_page_header') ?>" alt="">
</section>
<section class="process-content">
	<?php while (have_posts()) : the_post(); ?>
		<?php get_template_part('templates/page', 'header'); ?>
		<?php get_template_part('templates/content', 'page'); ?>
	<?php endwhile; ?>
</section>
