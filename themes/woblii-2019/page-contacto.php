<?php
    $errorMessage = NULL;
    
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

    <section id="articleContainer" class="mb-24 relative w-full pt-16">
        
        <form class="w-full max-w-3xl mx-auto mx-auto overflow-hidden p-12">
            <h1 class="block text-purple-dark text-2xl md:text-3xl text-center w-full max-w-3xl">Contáctanos</h1>
            <div class="flex flex-wrap -mx-3 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre
                    </label>
                    <input class="__inputBase" id="first-name-field" type="text" placeholder="John Doe">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Correo
                    </label>
                    <input class="__inputBase" id="email-field" type="text" placeholder="mail@example.com">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
           <div class="flex flex-wrap -mx-3 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea class="__inputBase resize-none" rows="5" id="email-field" type="text" placeholder="¿En qué te podemos ayudar?"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
           </div>

           <?php echo do_shortcode("[bws_google_captcha]"); ?>
            
           <div class="flex flex-wrap -mx-3">
                <div class="w-full px-3 mb-3 mt-3 md:mb-0">
                    <input type="submit" value="Enviar correo" class="block m-auto min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
           </div>
            
        </form>
        <figure class="flex-1 w-full hidden md:visible -mt-8 md:w-auto text-center md:text-right">
            <img class="inline-block object-none object-contain object-right w-1/2 md:w-2/5 max-w-xs mr-10" src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" alt="Woblii">
            <h2 class="flex-row block font-body text-center md:text-right text-purple-dark text-3xl font-semibold mr-10">Let's do this together</h2>
        </figure>
    </section>

<?php get_footer(); ?>
