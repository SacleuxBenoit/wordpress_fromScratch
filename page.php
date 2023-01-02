<?php
get_header();
?>
    <h1 class="text-center text-6xl p-5">
        <?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' )?>
    </h1>
    <div class="grid grid-cols-3">
        <div class="col-start-2">
        <?php
            if (have_posts()):
                the_post();
        ?>
            <article class="bg-cyan-100 m-5 border-2 rounded-lg">
                <h2 class="text-4xl text-gray-300 hover:text-gray-400 p-2"><?php the_title(); ?></h2>
                <span class="text-gray-300 p-2">Le <?php the_time( get_option( 'date_format' ) ); ?> à <?php the_time(); ?></span>
                <p><?php the_content(); ?></p>
            </article>
        <?php
            endif;
        ?>
        </div>
    </div>
<?php
get_footer();