<?php get_header(); ?>

<?php if ( have_posts() ) : while( have_posts() ): the_post();?>

<div class="container event-container">
    <div class="row">
        <div class="col-lg-12">
        <h3><?php the_title() ?></h3>

        <div class="pages-text">
            <?php the_content();?>
        </div>
        </div>
    </div>
</div>

<?php endwhile; else:endif;?>


<?php get_footer(); ?>