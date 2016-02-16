<?php 
	/* Template Name: Search Page */
	get_header();
	?>
    <div class="row">
        <div class="eight columns">
<!-- FUNCTIONALITY -->
        <h1><?php  printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>' ); ?></h1>
            <?php 
	
	if (have_posts()) :
	while (have_posts()) :
	the_post();
	?>                                   
	<h2><?php  the_title(); ?></h2>
                    <?php 
	the_content();
	endwhile;
	endif;
	?>
  <!---->
        </div>
        <div class="four columns">
            <?php  get_sidebar(); ?>
        </div>
    </div>
<?php  get_footer(); ?>