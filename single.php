<?php get_header(); ?>
    <section class="row">
        <div class="two columns">
        nbsp;
        </div>
         <div class="eight columns">
        
<!-- BEGIN SINGLE PHP -->
            <?php if (have_posts()) {
					while (have_posts() ) {
						
						the_post();?>
                /* OUR DATA CONTEXT IS DEFINED  */              
                
                    <h3><?php the_title(); ?></h3>
                    <?php the_content();
					}
			}?>
           
<!-- END SINGLE PHP -->
        </div>
    </div>
<?php get_footer(); ?>