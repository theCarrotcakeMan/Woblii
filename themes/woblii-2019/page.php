<?php
    get_header();
    
    the_post(); ?>

    <div id="pageContent" class="my-24 absolute top-0 pt-10">
        
        <h1><?php the_title(); ?></h1>
        
        <div class="flex flex-no-wrap">
            <div class="flex-1 w-full">
                <?php the_content(); ?>
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>
