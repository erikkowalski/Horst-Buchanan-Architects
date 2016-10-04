<footer class="content-info">
  <div class="container">
	  <nav class="nav-footer">
		  <?php
		  if (has_nav_menu('footer_navigation')) :
		  wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']);
		  endif;
		  ?>
	  </nav>
	  <div class="copyright">
		  <p>Copyright &copy; <?php echo date(Y) ?> Horst Buchanan Architects Inc.</p>
	  </div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
</footer>
