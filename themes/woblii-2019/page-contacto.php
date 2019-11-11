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

    <section id="articleContainer" class="my-24 absolute w-full top-0 pt-10">
        
        <form class="w-full max-w-3xl mx-auto mx-auto rounded overflow-hidden shadow-md p-12">
            <h1 class="block text-purple-dark text-3xl text-center w-full">Contáctanos</h1>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Nombre
                    </label>
                    <input class="__inputBase" id="first-name-field" type="text" placeholder="John Doe">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Correo
                    </label>
                    <input class="__inputBase" id="email-field" type="text" placeholder="mail@example.com">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
           <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <textarea class="__inputBase resize-none" rows="5" id="email-field" type="text" placeholder="¿En qué te podemos ayudar?"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            
           <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3 mb-6 md:mb-0">
                    <input type="submit" value="Enviar" class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
            </div>
           
          
        </form>
        
    </section>

<?php get_footer(); ?>
