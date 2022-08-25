<?php
get_header();
?>

<div class="row">
    <div class="col">
        <?php
            if (have_posts()):
                the_post();
                ?>
                    <article class="bg-slate-400">
                        <h2 class="text-3xl text-center"><?php the_title()?></h2>
                        <p class="pt-6"><?php the_content()?></p>
                    </article>
                <?php
            endif;
        ?>
    </div>
</div>
<?php
    get_footer();
?>