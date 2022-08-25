<?php

get_header();
?>

<div class="row">
    <div class="col">
        <?php
            if (have_posts()):
                while(have_posts()):
                    the_post();
                    ?>
                    <article>
                        <h2 class="text-3xl text-center"><a href="<?php echo get_permalink()?>"><?php the_title()?></a></h2>
                        <!-- <p class="pt-6"><?php the_content()?></p> -->
                        <?php if ( has_post_thumbnail() ): ?>
                            <div class="imagesIndex"><a href="<?php echo get_permalink()?>"><?php the_post_thumbnail( 'medium' );?></a></div>
                        <?php
                        endif;
                    ?>
                    </article>
                    <?php
                endwhile;
            else:
                ?>
                    <p>Aucun poste n'a été trouvé</p>
                <?php
            endif;
        ?>
    </div>
</div>
<?php
    get_footer();
?>