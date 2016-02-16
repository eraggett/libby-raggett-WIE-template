<?php get_header(); ?>
    <section class="row">
        <div class="three columns">
        	<!-- BEGIN SIDEBAR -->
        <div class="three columns">
            <?php get_sidebar(); ?>
        </div>
<!-- END SIDEBAR -->
            </div>
            <div class="nine columns">
         
<!-- BEGIN LOOP -->
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
                    <h3><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt();?>
                    <a  href="<?php the_permalink(); ?>" style="color: #FCFBF6">Read More.</a><?php }// end while
            } // end if
            ?>
<!-- END LOOP -->
        </div>
    </section>

    </div>
<?php get_footer(); ?>