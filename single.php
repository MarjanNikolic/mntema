<?php get_header(); ?>

<div class="single-main">
<?php 
if (have_posts()) {
    while (have_posts()) {
        the_post();?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div> <?php
    }
}
?>
</div>

<?php get_footer(); ?>