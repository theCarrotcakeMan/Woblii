<?php
    get_header();
    
    the_post(); ?>
    
    <article id="pageContent" class="my-24 mx-auto absolute top-0 pt-10 w-full" >
        
        <h1 class="block text-purple-dark text-3xl text-left w-full"><?php the_title(); ?></h1>
        
        <div class="max-w-3xl mx-auto flex flex-no-wrap">
            <div class="flex-1 w-full leading-relaxed">
                <?php the_content(); ?>
            </div>
        </div>
        
    </article>

<?php get_footer(); ?>
