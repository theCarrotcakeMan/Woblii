<?php

// Redirect user if already logged in
//if(is_user_logged_in())
//    return wp_redirect(site_url('/'));

    get_header(); ?>
    
    <section id="articleContainer" class="my-24 mx-auto relative top-0 pt-8 md:pt-10 pl-6 md:pl-0 pr-6 md:pr-0 w-full">
    
        <h1 class="block text-purple-dark text-2xl md:text-3xl text-left max-w-3xl mx-auto w-full">¡Regístrate como Entrepreneur!</h1>
    
        <div id="registerEntrepreneur" class="block w-full">

            <form class="w-full max-w-4xl mx-auto mx-auto flex flex-wrap overflow-hidden p-12" action="">
                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <div class="w-full px-3">
                        <input class="__inputBase" name="name" id="name" type="text" placeholder="Nombre">
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>
                <div class="max-w-1/2 w-1/2 -mx-3 mb-3 pr-2 md:mb-6">
                    <div class="w-full px-3">
                        <input class="__inputBase" name="age" id="age" type="text" placeholder="Edad">
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>
                <div class="max-w-1/2 w-1/2 -mx-3 mb-3 md:mb-6">
                    <div class="w-full px-3">
                        <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Sexo</option>
                            <option value="female">Femenino</option>
                            <option value="male">Masculino</option>
                            <option value="other">No especificar</option>
                        </select>
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>

                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" name="education_degree">
                        <span class="text-sm">Lic. / Dr. / PhD. / Etc. (Se solicitará verificación)</span>
                    </label>
                </div>
                
                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <div class="w-full px-3">
                        <input class="__inputBase" name="name" id="name" type="text" placeholder="Correo electrónico">
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>
                
                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <div class="w-full px-3">
                        <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Selecciona el giro de tu empresa</option>
                            <option value="1">Educación</option>
                            <option value="2">Manufactura</option>
                            <option value="3">Tech</option>
                        </select>
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>
                
                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <div class="w-full px-3">
                        <textarea name="experience" id="experience" class="__inputBase" placeholder="Explica tu experiencia en el giro que elegiste" cols="30" rows="10"></textarea>
                        <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                    </div>
                </div>

                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <label class="md:w-2/3 block text-gray-500 font-bold">
                        <input class="mr-2 leading-tight" type="checkbox" name="has_documentation">
                        <span class="text-sm">Cuento con la documentación que respalda mi proyecto (bocetos, planos, fichas técnicas, etc.)</span>
                    </label>
                </div>

                <div class="w-full -mx-3 mb-3 md:mb-6">
                    <?php echo do_shortcode("[bws_google_captcha]"); ?>
                </div>

                <div class="w-full px-3 mb-3 mt-3 md:mb-0">
                    <input type="submit" value="Guardar" class="block m-auto md:ml-0 min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                </div>
                
            </form>
    
        </div>
    
    </section>

<?php get_footer(); ?>
