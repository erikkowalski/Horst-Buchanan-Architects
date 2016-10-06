<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <section class="project-info container-fluid">

<!-- Project tittle and types Section -->
		 <div class="description col-sm-6 col-md-5">
		 <h3 class="project-title" ><?php the_field('project_title') ?></h3>

		 <?php if( have_rows('project_type_list') ): ?>
		 <ul>
			 <?php while( have_rows('project_type_list') ): the_row(); ?>
			 <li><p><?php the_sub_field('project_type'); ?></p></li>
			 <?php endwhile; ?>
		 </ul>
		 <?php endif; ?>


    </div>

<!-- Project Description Section -->

	 <div class="project-description col-sm-6 col-md-7 ">
	 <h3>Project Description</h3>
		 <p><?php the_field('project_description') ?></p>
    </div>
	  </section>

<!-- Photo credit Section -->
	  <section class="photo-credit clearfix">
	  <div class="col-md-5"></div>
		  <div class="team col-md-7 col-md-3">
			  <h3>Photo Credit</h3>
			  <?php if( have_rows('project_team') ): ?>
			  <ul>
				  <?php while( have_rows('project_team') ): the_row(); ?>
				  <li><p><span><?php the_sub_field('role'); ?></span>&nbsp;&nbsp;<a target="_blank" href="<?php the_sub_field('team_member_url'); ?>"><?php the_sub_field('team_member'); ?></a></p></li>
				  <?php endwhile; ?>
			  </ul>
			  <?php endif; ?>
		  </div>
	  </section>


    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
