

<?php
get_header();
?>
<select>
    <option value="accident">Accident</option>
    <option value="kidnapped">Kidnapped</option>

</select>
<?php
$args = array(
    'post_type' => 'news',
    'posts_per_page'=>2,
    'tax_query' => array(
        array(
            'taxonomy' => 'subjects',
            'field'    => 'slug',
            'terms'    => 'accident',
        ),
    ),
);
$query = new WP_Query( $args );
while ( $query->have_posts()):
    $query->the_post();
    echo '<br>';
    ?>
    <div>
        <div class='post-title'>
            <?php the_title(); ?>
        </div>
        <div class="user_vote" <?php the_content(); ?> >
        </div>
    </div>
    <?php
    
endwhile;
// internDebug($query);
?>



<?php get_footer(); ?> 