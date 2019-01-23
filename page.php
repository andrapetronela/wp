<?php 
get_header();
    while(have_posts()) {
        the_post(); 
    } ?>
    
<div class="banner">
    <h1 class="page-title"><?php the_title(); ?></h1>
    <p>I am a paragraph.</p>
</div>
    