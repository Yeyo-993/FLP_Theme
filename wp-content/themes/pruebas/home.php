<?php
/**
 * Este sera la pagina para ver todas la entradas del blog
 */
get_header(); ?>

<div class="container">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <!--Aqui el html-->
            <div class="row">
                <div class="col-lg-4 col-xl-4">
                    <a href="<?php the_permalink($post->ID); ?>">
                        <img src="<?php the_post_thumbnail_url($post->ID); ?>" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-8 col-xl-8">
                    <a href="<?php the_permalink($post->ID); ?>">
                        <?php the_title(); ?>
                    </a>
                    <?php the_content(); ?>
                </div>
            </div>

        <?php endwhile; ?>

    <?php endif; ?>

</div>


<?php get_footer(); ?>