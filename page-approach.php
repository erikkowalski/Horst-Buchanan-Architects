<?php while (have_posts()) : the_post(); ?>
<div class="approach-content">
	<?php get_template_part('templates/page', 'header'); ?>
	<h4><?php the_field('header_quote') ?></h4>
	<hr>
	<?php get_template_part('templates/content', 'page'); ?>
</div>
<?php endwhile; ?>
