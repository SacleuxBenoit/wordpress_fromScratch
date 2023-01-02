<?php
get_header();
?>
    <div class="grid grid-cols-3">
        <div class="col-start-2">

        <?php
            if (have_posts()):
                the_post();
        ?>
            <article class="bg-cyan-100 m-5 border border-2 rounded-2xl">
                <h2 class="text-4xl text-gray-300 p-2"><?php the_title(); ?></h2>
                <span class="text-gray-300 p-2">Le <?php the_time( get_option( 'date_format' ) ); ?> à <?php the_time(); ?></span>

                <?php if ( has_post_thumbnail() ): ?>
                <div>
                <?php the_post_thumbnail( 'large' ); ?>
                </div>
                <?php endif; ?>
                <p><?php the_content(); ?></p>
                <!-- affichage des catégories -->
                <?php the_terms( $post->ID, 'category', '<ul class="flex text-white gap-3 m-2">Catégories: <li>', '</li><li>', '</li></ul>' ); ?>
                <!-- affichage des tags -->
                <?php the_terms( $post->ID, 'post_tag', '<ul class="flex text-white gap-3 m-2">Tags: <li>', '</li><li>', '</li></ul>' ); ?>
            </article>
        <?php
            endif;
        ?>
        </div>
    </div>
<?php
get_footer();