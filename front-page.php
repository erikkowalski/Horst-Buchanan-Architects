<?php while (have_posts()) : the_post(); ?>
<p class="sub-head" ><span >ARCHITECTS</span></p>
<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
