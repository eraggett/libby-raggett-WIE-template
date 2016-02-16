<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Blank Template</title>
<?php wp_head(); ?>
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    </head>

 <body>
 <div class="container">
            <header class="row">
                <div class="twelve columns">
                
                     <h1><a  href="<?php the_permalink(); ?>"><?php bloginfo('name'); ?></a></h1>
                    <h2><?php bloginfo('description'); ?></h2>
                </div>
            </header>
            <!-- END OF HEADER - BEGIN SECTION CONTENT -->
