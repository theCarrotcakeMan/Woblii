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
    
     if($errorMessage): ?>

    <div class="mx-auto w-4/5 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <span class="block sm:inline"><?php echo $errorMessage; ?></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
    </div>
    
<?php
    endif; ?>
    
    <div id="loginWoblii" style="min-height: 80vh;" class="flex justify-around flex-wrap items-center content-around py-48">
        <figure class="flex-1 text-right">
            <img class="inline-block object-none object-contain object-right w-2/5 max-w-xs mr-6" src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" alt="Woblii">
            <h2 class="flex-row block text-purple-dark text-3xl font-semibold mr-6">Let's do this together</h2>
        </figure>
        <article class="flex-1">
            <form class="mt-20 mx-0 w-full max-w-xs bg-white shadow-md border-purple-light rounded px-8 pt-6 pb-8 mb-4" method="post" action="<?php echo site_url('/login'); ?>">
                <div class="mb-4">
                    <input class="__inputBase" name="log" id="log" type="text" placeholder="Usuario">
                </div>
                <div class="mb-6">
                    <input class="__inputBase" name="pwd" id="pwd" type="password" placeholder="******************">
    <!--                <p class="text-red-500 text-xs italic">Please choose a password.</p>-->
                </div>
                <div class="flex items-end justify-end">
                    <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Iniciar
                    </button>
                </div>
            </form>
            <a class="block align-baseline font-medium text-sm text-purple-text leading-loose hover:text-purple-dark" title="Regístrate como emprendedor" href="<?php echo site_url('signup'); ?>">
                ¿Eres emprendedor?
            </a>
            <a class="block align-baseline font-medium text-sm text-purple-text leading-loose hover:text-purple-dark" href="#">
                ¿Olvidó su contraseña?
            </a>
            
        </article>
        
    </div>
    <div id="welcomeWoblii">
        <h1 class="block text-purple-dark text-3xl text-center w-full">¡Bienvenido a Woblii!</h1>
        <div class="flex">
            <div class="flex-1">
                <p class="text-gray-800 text-left font-light leading-snug text-base w-full">
                    Somos la primer comunidad para
                    emprendedores con la finalidad de
                    generar proyectos con todos los
                    elementos necesarios para encontrar
                    Inversionistas y darle vida a tus ideas.
                </p>
            </div>
            <div class="flex-1">
                <img src="<?php echo THEMEPATH."assets/images/message.png"; ?>" alt="">
            </div>
        </div>
    </div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
