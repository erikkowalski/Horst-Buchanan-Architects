<?php while (have_posts()) : the_post(); ?>
<section class="contact-header-img">
	<img class="img-responsive" src="<?php the_field('contact_header_image') ?>" alt="">

	<div class="contact-info">
		<?php get_template_part('templates/content', 'page'); ?>
	</div>
</section>
<?php endwhile; ?>
