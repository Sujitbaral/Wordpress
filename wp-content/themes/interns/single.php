<?php get_header(); ?>
<div class="container">
<?php
if(have_posts()) : 
    while (have_posts()) :the_post(); ?>
    <div class="single-news-arhieve">
        <h1> <?php the_title(); ?> </h1>
        <?php the_content(); ?>
    </div>
    <?php endwhile;
    endif ?>
</div>
<?php get_footer(); ?>