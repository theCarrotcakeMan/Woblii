<?php
    $errorMessage = NULL;
    // Redirect user if already logged in
    if(is_user_logged_in())
        wp_redirect(site_url());

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
    // If request has error message, display as alert
     if($errorMessage): ?>

    <div class="mx-auto w-4/5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline"><?php echo $errorMessage; ?></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
    </div>
    
<?php
    endif; ?>
    
    <div id="loginWoblii" style="height: 100vh" class="flex justify-around flex-wrap items-center content-around py-48">
        <figure class="flex-1 w-full md:w-auto text-right">
            <img class="inline-block object-none object-contain object-right w-1/2 md:w-2/5 max-w-xs mr-10" src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" alt="Woblii">
            <h2 class="flex-row block font-body text-purple-dark text-3xl font-semibold mr-10">Let's do this together</h2>
        </figure>
        <article class="flex-1 w-full md:w-auto">
            
            <?php get_template_part( 'partials/general', 'login' ); ?>
            
        </article>
        
    </div>

    <div id="welcomeWoblii" style="height: 100vh;">
        <h1 class="block w-full text-purple-dark text-3xl text-center font-body">¡Bienvenido a Woblii!</h1>
        <div class="flex">
            <div class="flex-1">
                <p class="text-gray-800 text-left font-body font-light leading-snug text-base w-full">
                    Somos la primer comunidad para
                    emprendedores con la finalidad de
                    generar proyectos con todos los
                    elementos necesarios para encontrar
                    Inversionistas y darle vida a tus ideas.
                </p>
            </div>
            <div class="flex-1 align-middle mx-auto">
                <img src="<?php echo THEMEPATH."assets/images/message.png"; ?>" alt="">
            </div>
        </div>
    </div>
    <div id="whatIsWoblii" style="height: 100vh">
        <div class="flex">
            <div class="flex-1">
                <img src="<?php echo THEMEPATH."assets/images/message.png"; ?>" alt="">
            </div>
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
