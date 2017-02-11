<?php while (have_posts()) : the_post(); ?>

<section class="about-us-content">
	<?php get_template_part('templates/page', 'header'); ?>
	<?php get_template_part('templates/content', 'page'); ?>
<div class="about-mary row">
<div class="col-md-5">
		<img class="img-responsive profile-img" src="<?php the_field('mary_image') ?>" alt="Mary Horst headshot">
	</div>
	<div class="col-md-7">
		<h4><?php the_field('mary_title') ?></h4>
		<p><?php the_field('mary_text') ?></p>
	</div>
</div>
<hr>
<div class="about-david row">
	<div class="col-md-5">
		<img class="img-responsive profile-img" src="<?php the_field('david_image') ?>" alt="David Buchanan headshot">
	</div>
	<div class="col-md-7">
		<h4><?php the_field('david_title') ?></h4>
		<p><?php the_field('david_text') ?></p>
	</div>
</div>
</section>
<?php endwhile; ?>
