<?php
    get_header();
    
    the_post(); ?>

    <div id="pageContent">
        <h1 class="block text-purple-dark text-3xl text-center w-full"><?php the_title(); ?></h1>
        <div class="flex flex-no-wrap">
            <div class="flex-1 w-full">
                <?php the_content(); ?>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
