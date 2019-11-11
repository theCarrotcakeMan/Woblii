<?php

// Redirect user if already logged in
if(! is_user_logged_in())
    return wp_redirect(site_url('login'));

$errorMessage = NULL;
    
    // Try to log in
    if(! empty($_POST) AND $_POST['log']){
        try{
            $user = wp_signon(compact($_POST), TRUE);
            if ( !is_wp_error( $user ) )
                wp_redirect(site_url());
            $errorMessage =  $user->get_error_message();
        }catch(Exception $exception){
            echo $exception;
        }
    }
    
    get_header();

    if($errorMessage): ?>

        <div class="mx-auto w-4/5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
            <span class="block sm:inline"><?php echo $errorMessage; ?></span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
          </span>
        </div>
        
    <?php
    endif; ?>
<section id="articleContainer" class="my-24 mx-auto absolute top-0 pt-10 w-full">

    <h1 class="block text-purple-dark text-3xl text-left w-full">Let's do this together!</h1>

    <div id="mainFeed" class="block w-full">
    
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post(); ?>

                <article class="w-full max-w-3xl mx-auto mb-12 bg-purple-light rounded overflow-hidden shadow-base">
                    <img class="w-full" src="https://via.placeholder.com/500x320?text=Placeholder+image" alt="Placeholder image">
                    <div class="px-6 py-4">
                        <div class="my-6 flex">
                            <div class="flex items-center">
                                <img style="max-width: 4rem!important;max-height: 4rem!important;" src="https://via.placeholder.com/48x48" class="w-10 h-10 rounded-bl-sm mr-4" alt="<?php echo get_the_author(); ?>">
                                <div class="text-sm inline-block align-middle">
                                    <a class="relative inline-block align-middle text-blue-600 font-medium no-underline hover:underline" title="Visita el perfil de <?php echo get_the_author(); ?>" href="#"><?php echo get_the_author(); ?></a>
                                    <p class="text-gray-600 my-0">Aug 18</p>
                                </div>
                            </div>
                        </div>
                        <div class="font-bold text-xl mb-2"><a href="#"><?php the_title(); ?></a></div>
                        <p class="text-gray-700 font-hairline text-base">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </article>
        
            <?php
            endwhile;
        endif; ?>

    </div>

</section>

<?php get_footer(); ?>
