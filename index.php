<?php get_header(); ?>
    <section class="row">
        <div class="three columns">
        	<h4>Sidebar</h4>
            </div>
            <div class="nine columns">
         
<!-- BEGIN LOOP -->
            <?php 
            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();?>
                    <h3><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <?php the_excerpt();?>
                    <a  href="<?php the_permalink(); ?>">Read More.</a><?php }// end while
            } // end if
            ?>
<!-- END LOOP -->
        </div>
    </section>
<?php get_footer(); ?>