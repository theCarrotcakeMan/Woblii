<?php

// Redirect user if already logged in
//if(! is_user_logged_in())
//    return wp_redirect(site_url('login'));

    get_header(); ?>
    
    <section id="articleContainer" class="mb-24 mx-auto relative pt-24 md:pt-32 pl-6 md:pl-0 pr-6 md:pr-0 w-full">
    
        <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left max-w-3xl mx-auto w-full">Let's do this together!</h1>
    
        <div id="mainFeed" class="block w-full">
        
            <?php
            $elquery = new WP_Query([
                    "post_type" => "woblii-post",
                    "posts_per_page" => 8
            ]);
            if ($elquery->have_posts()) :
                while ($elquery->have_posts()) :
                    $elquery->the_post();
        
                    get_template_part( 'partials/each', 'post' );
            
                endwhile;
            endif; ?>
    
        </div>
    
    </section>

<?php get_footer(); ?>
