<?php
    $errorMessage = !empty($_GET['message']) ? $_GET['message'] : NULL;
    // Redirect user if already logged in
    if(is_user_logged_in())
        wp_redirect(site_url('my-feed'));

    // Try to log in
    if(! $errorMessage && (! empty($_POST) AND $_POST['log'])){
        try{
            $user = wp_signon(compact($_POST), TRUE);
            if ( !is_wp_error( $user ) )
                wp_redirect(site_url('complete-profile'));
            $errorMessage =  $user->get_error_message();
        }catch(Exception $exception){
            echo $exception;
        }
    }

    get_header();
    // If request has error message, display as alert
     if($errorMessage): ?>

    <div class="mx-auto w-4/5 bg-green-100 border border-green-500 text-green-500 px-4 py-3 rounded relative" style="top: 8rem;" role="alert">
        <span class="block sm:inline"><?php echo $errorMessage; ?></span>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
        <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Cerrar</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
      </span>
    </div>

<?php
    endif; ?>

    <div id="loginWoblii" data-section-name="Inicia sesion" class="snapable-window flex justify-around flex-wrap items-center content-around py-48">

		<figure class="w-full md:w-auto text-right">
			<div class="object-none object-contain object-center md:object-rightw-1/2 md:w-2/5 max-w-xs mt-20 md:mt-0 mr-auto ml-auto md:mr-10">
				<img class="w-full block max-w-full" src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" alt="Woblii">
			</div>
            <h2 class="flex-row block font-body text-right text-purple-dark text-3xl font-light max-w-xs mr-auto ml-auto md:mr-10">Let's do this together</h2>
        </figure>
        <article class="w-full md:w-auto md:min-w-1/2">

            <?php get_template_part( 'partials/general', 'login' ); ?>

        </article>


    </div>

    <div id="welcome" data-section-name="Bienvenido" class="snapable-window relative" >
		<section class="absolute center-vertically w-full">
	        <h1 class="block w-full font-body text-purple-dark text-3xl font-light text-center">¡Bienvenido a Woblii!</h1>
	        <div class="flex flex-wrap-reverse content-end">
	            <div class="w-full md:w-1/2 text-center">
	                <p class="inline-block mt-10 px-4 md:px-0 text-gray-800 text-left font-body font-light leading-loose text-xl w-full max-w-sm">
	                    Somos la primer comunidad para
	                    emprendedores con la finalidad de
	                    generar proyectos con todos los
	                    elementos necesarios para encontrar
	                    Inversionistas y darle vida a tus ideas.
	                </p>
	            </div>
	            <div class="w-full md:w-1/2 align-middle mx-auto">
	                <img class="block object-center mx-auto my-6" src="<?php echo THEMEPATH."assets/images/message.png"; ?>" alt="">
	            </div>
	        </div>
		</section>
    </div>

    <home-tabs
        site-url="<?php echo site_url('/'); ?>"
        >
    </home-tabs>

<?php get_footer(); ?>
