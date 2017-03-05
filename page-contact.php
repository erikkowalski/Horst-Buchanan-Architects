<?php while (have_posts()) : the_post(); ?>
<section class="contact-content">
	<?php get_template_part('templates/page', 'header'); ?>

	<h4><?php the_field('contact_header_quote') ?></h4>
	<hr>
	<div class="row info">
		<div class="col-md-6">
			<div id="carouselcontactc" class="carousel fade" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img class="img-responsive" src="<?php the_field('david_contact_image') ?>" alt="">
					</div>
					<div class="item">
						<img class="img-responsive" src="<?php the_field('mary_contact_image') ?>" alt="">
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="mail">
					<h4>Mail</h4>
					<p>88 Prince Street<br>
						Jamaica Plain, MA 02130</p>
				</div>
				<div class="phone">
					<h4>Phone</h4>
					<p>617-942-1004</p>
				</div>
				<div class="email">
					<h4>Email</h4>
					<p><a href="mailto:mary@horstbuchanan.com">mary@horstbuchanan.com</a><br>
					<a href="mailto:david@horstbuchanan.com">david@horstbuchanan.com</a></p>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>
