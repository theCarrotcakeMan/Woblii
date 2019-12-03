<?php
    get_header();
    
    the_post(); ?>
    
    <article id="pageContent" class="mb-24 mx-auto relative pt-20 md:pt-24 pl-6 md:pl-0 pr-6 md:pr-0 w-full" >
        
        <h1 class="text-base block text-purple-dark text-2xl md:text-3xl text-center md:text-left max-w-3xl mx-auto w-full"><?php the_title(); ?></h1>
        
        <div class="max-w-3xl mx-auto flex flex-no-wrap">
            <div class="flex-1 w-full leading-loose md:leading-relaxed">
                <?php the_content(); ?>
            </div>
        </div>
        
    </article>

<?php get_footer(); ?>
