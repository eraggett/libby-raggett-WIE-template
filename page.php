<?php get_header(); ?>
    <div class="row">

<!-- MAKE THIS COLUMN NINE WIDTH -->
        <div class="nine columns">
            <?php if (have_posts()) :           
                while (have_posts()) : the_post(); ?> 
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile;
            endif; ?>
        </div>
<!-- ADD IN A THREE WIDTH COLUMN - COMPLETE THE TWELVE REQUIREMENT WIDTH -->
<!-- BEGIN SIDEBAR -->
        <div class="three columns">
            <h3>Sidebar Text</h3>
            <p>This is the sidebar content to put in here.</p>
        </div>
<!-- END SIDEBAR -->
    </div>
<?php get_footer(); ?>