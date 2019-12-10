<?php

// Redirect user if already logged in
if(is_user_logged_in())
    return wp_redirect(site_url('/'));

get_header(); ?>

<section id="articleContainer" class="mb-24 mx-auto relative pt-20 md:pt-24 pl-6 md:pl-0 pr-6 md:pr-0 w-full">

    <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left max-w-3xl mx-auto w-full">¡Regístrate como Inversionista!</h1>

    <div id="registerEntrepreneur" class="block w-full">

        <form class="w-full max-w-4xl mx-auto mx-auto flex flex-wrap overflow-hidden md:p-12" method="post" action="<?php echo site_url('signup-investor'); ?>">
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="first_name" id="first_name" type="text" placeholder="Nombre">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="last_name" id="last_name" type="text" placeholder="Apellido(s)">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="max-w-1/2 w-1/2 mb-3 pr-2 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="age" id="age" type="text" placeholder="Edad">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            <div class="max-w-1/2 w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <div class="relative">
                        <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <option value="">Sexo</option>
                            <option value="female">Femenino</option>
                            <option value="male">Masculino</option>
                            <option value="other">No especificar</option>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 py-4 px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="user_rfc" id="user_rfc" type="text" placeholder="RFC *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="user_email" id="user_email" type="text" placeholder="Correo electrónico">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="user_pass" id="user_pass" type="password" placeholder="Contraseña *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <div class="relative">
                        <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                            <?php
                            $terms_range = get_terms( [
                                'taxonomy'      => 'investment-range',
                                'hide_empty'    => false
                            ] );
                            ?>
                            <option value="">Selecciona el rango de inversión</option>
                            <?php
                            foreach ($terms_range as $myTerm): ?>
                                <option value="<?php echo $myTerm->slug; ?>"><?php echo $myTerm->name; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 py-4 px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                    </div>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea name="experience" id="experience" class="__inputBase" placeholder="Cuéntanos sobre tu experiencia en negocios" cols="30" rows="6"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <label class="md:w-2/3 block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="accept_terms">
                    <span class="text-sm text-base font-hairline">Acepto compartir mis datos de inversionista con Woblii</span>
                </label>
            </div>
            
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-4 md:mb-6">
                <h3 class="text-xl text-base font-hairline">Información de la empresa</h3>
            </div>
            
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="company_name" id="company_name" type="text" placeholder="Nombre de la Empresa">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
        
            <div class="w-1/2 mb-3 md:mb-6 ml-4">
                <div class="w-full px-3">
                    <input class="__inputBase" name="company_year_started" id="company_year_started" type="text" placeholder="Nombre de la Empresa">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            
            <div class="w-1/2 mb-3 md:mb-6 ml-4">
                <div class="w-full px-3">
                    <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        <?php
                        $terms_lines = get_terms( [
                            'taxonomy'      => 'line-of-service',
                            'hide_empty'    => false
                        ] );
                        ?>
                        <option value="">Selecciona el giro de tu empresa</option>
                        <?php
                        foreach ($terms_lines as $myTerm): ?>
                            <option value="<?php echo $myTerm->slug; ?>"><?php echo $myTerm->name; ?></option>
                        <?php
                        endforeach;
                        ?>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 py-4 px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea name="experience" id="experience" class="__inputBase" placeholder="Explica tu experiencia en el campo de tu empresa" cols="30" rows="6"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6 ml-4">
                <?php echo do_shortcode("[bws_google_captcha]"); ?>
            </div>

            <div class="w-full px-3 mb-3 mt-3 md:mb-0">
                <input type="submit" value="¡Crear mi cuenta!" class="block m-auto md:ml-0 min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>

        </form>

    </div>

</section>

<?php get_footer(); ?>
