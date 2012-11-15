<?php get_header(); ?>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span10">
			<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
			 get_template_part( 'loop', 'index' );
			?>
    </div>
    <div class="span2">
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>