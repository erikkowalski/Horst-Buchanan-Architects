<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>

    <div class="entry-content">
      <?php the_content(); ?>
    </div>
	  <div id="carousel-example-generic" class="carousel fade" data-ride="carousel">
		  <!-- Indicators -->

		  <?php
		  $images = get_field('project_page_gallery');
		  if( $images ): ?>
		  <?php $dataId=0 ?>
		  <ol class="carousel-indicators">
			  <?php foreach( $images as $image ): ?>
			  <li data-target="#carousel-example-generic" id="data<?php echo $dataId ?>" data-slide-to="<?php echo $dataId ?>" class=""></li>
			  <?php $dataId++ ?>
			  <?php endforeach; ?>
		  </ol>

		  <!-- Wrapper for slides -->

		  <div class="carousel-inner" role="listbox">
			  <?php $slideId = 0; ?>

			  <?php foreach( $images as $image ): ?>
			  <div class="item " id="slide<?php echo $slideId;?>">
				  <img class="img-responsive" src="<?php echo $image['url']; ?>" alt="  " />
			  </div>
			  <?php $slideId++; ?>
			  <?php endforeach; ?>
		  </div>


		  <?php endif; ?>


	  </div>


	  <p>
	 </p>


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

			 <section class="photo-credit clearfix">

			 <?php if( have_rows('project_team') ): ?>
			 <ul>
				 <?php while( have_rows('project_team') ): the_row(); ?>
				 <li><p><span><?php the_sub_field('role'); ?></span>&nbsp;&nbsp;<a target="_blank" href="<?php the_sub_field('team_member_url'); ?>"><?php the_sub_field('team_member'); ?></a></p></li>
				 <?php endwhile; ?>
			 </ul>
			 <?php endif; ?>
			 </section>

    </div>

<!-- Project Description Section -->

	 <div class="project-description col-sm-6 col-md-7 ">
		 <p><?php the_field('project_description') ?></p>
    </div>
	  </section>

<!-- Photo credit Section -->



    <footer>
      <?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
    </footer>
    <?php // comments_template('/templates/comments.php'); ?>
  </article>
<?php endwhile; ?>
