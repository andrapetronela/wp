<?php 
get_header();
    while(have_posts()) {
        the_post(); 
    } ?>
    
<div class="page">
   <div id="page-container">
       <h1 class="page-title">
           <?php the_title(); ?>
        </h1>
        <h2 class="page-description">
            <?php the_content() ?>
        </h2>
   </div>
   <?php get_footer() ?>
</div>
   

    