<?php

get_header();
?>
    <div class="grid grid-cols-3">
        <div class="col-start-2">
        <?php
            if (have_posts()):
                while (have_posts()):
                    the_post();
        ?>
            <article class="grid bg-cyan-100 m-4 border-2">
                <h2 class="text-2xl text-slate-400 text-center"><a href="<?= get_permalink(); ?>"><?php the_title(); ?></a></h2>

                <?php if ( has_post_thumbnail() ): ?>

                <div class="justify-self-center m-3">
                    <?php the_post_thumbnail( 'medium_large' ); ?>
                </div>
                <?php endif?>
                <p class="m-2"><?= get_the_excerpt()?></p>
        <?php
                endwhile;
            else:
        ?>
            <p>Aucun post n'a été trouvé</p>
        <?php
            endif;
        ?>
        </div>
    </div>
<?php
get_footer()