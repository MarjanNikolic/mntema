<?php get_header(); ?>

<?php $topSlider = new WP_Query(array(
    'post_type' => 'page',
    'posts_per_page' => 5,
)); ?>
<div class="headsshow">
    <div class="headsshow__inner">
    <?php 
    if($topSlider->have_posts()){
        while($topSlider->have_posts()) {
            $topSlider->the_post(); ?>
            <a href="<?php the_permalink(); ?>">
            <div class="headsshow__inner--content">
                <h1 class="headsshow__inner--title"><?php the_title(); ?></h1>
                <h3 class="headsshow__inner--text"><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></h3>
            </div>
            </a>
        <?php }
    }
    ?>
    </div>
</div>
  
<?php get_footer(); ?>