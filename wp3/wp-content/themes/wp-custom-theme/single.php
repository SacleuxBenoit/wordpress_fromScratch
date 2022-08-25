<?php

get_header();
?>

<div class="row">
    <div class="col">
        <?php
            if (have_posts()):
                the_post();
                ?>
                    <article class="ml-10">
                        <h2 class="text-3xl text-center"><?php the_title()?></h2>
                        <h1><?php the_title(); ?></h1>
                        <div><?php the_time( get_option( 'date_format' ) ); ?></div>
                        <?php if ( has_post_thumbnail() ): ?>
                        <div class="float float-left">
                            <?php the_post_thumbnail( 'medium' ); ?>
                            <?php the_terms( $post->ID, 'post_tag', '<ul><li>', '</li><li>', '</li></ul>' ); ?>
                        </div>
                    <?php
            endif;
            ?>
            <div class="pr-10"><?php the_content(); ?></div>
                </article>
            <?php
            endif;
        ?>
    </div>
</div>
<?php
    get_footer();
?>