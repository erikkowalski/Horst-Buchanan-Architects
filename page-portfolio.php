<?php while (have_posts()) : the_post(); ?>
<?php // get_template_part('templates/page', 'header'); ?>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php //Display 3 random Costar Boston News Posts
$project_args = [
	'post_type' => 'project',
	'posts_per_page' => 3

];

$project = new WP_Query( $project_args );
?>

<aside  class="">
	<?php while ( $project->have_posts() ) : $project->the_post(); ?>
	<div class="col-md-6">
		<?php if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} ?>
		<h4 class="entry-title"> <a href="<?php the_permalink(); ?>"><?php the_title();?> </a></h4>
		<div class="entry-content">
			<?php // the_excerpt();?>
		</div>
	</div>
	<?php endwhile;
	wp_reset_postdata();
	?>
</aside>
