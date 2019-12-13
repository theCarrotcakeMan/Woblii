<?php
    
    // Redirect user if already logged in
    if(is_user_logged_in())
        return wp_redirect(site_url('/'));
    if(!empty($_POST) && !empty($_POST['signup_submit'])){
        return register_woblii_user($_POST);
    }

    get_header(); ?>

<section id="articleContainer" class="max-w-3xl mb-24 mx-auto relative pt-24 md:pt-32 pl-6 md:pl-0 pr-6 md:pr-0 w-full">

    <h1 class="block text-purple-dark text-2xl md:text-3xl text-center md:text-left mx-auto w-full">¡Regístrate como Entrepreneur!</h1>

    <div id="registerEntrepreneur" class="block w-full">

        <form class="w-full max-w-3xl mx-auto mx-auto flex flex-wrap overflow-hidden md:px-12" method="post" action="<?php echo site_url('signup'); ?>">
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
                        <select name="gender" id="gender" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
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

            <div class="w-full mb-3 md:mb-6 ml-4">
                <label class="block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="education_degree">
                    <span class="text-sm text-base font-hairline">Lic. / Dr. / PhD. / Etc. (Se solicitará verificación)</span>
                </label>
            </div>

            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="user_email" id="user_email" type="text" placeholder="Correo electrónico *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>
            
            <div class="w-full md:max-w-1/2 md:w-1/2 mb-3 md:mb-6">
                <div class="w-full px-3">
                    <input class="__inputBase" name="user_pass" id="user_pass" type="password" placeholder="Contraseña *">
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <div class="relative">
                        <select name="line_of_business" id="line_of_business" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-2 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <?php
                        $terms = get_terms( [
                                    'taxonomy'      => 'line-of-business',
                                    'hide_empty'    => false,
                                ] );
                        ?>
                            <option value="">Selecciona el giro de tu empresa</option>
                        <?php
                            foreach ($terms as $myTerm): ?>
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

            <div class="w-full mb-3 md:mb-6">
                <div class="w-full px-3">
                    <textarea name="experience" id="experience" class="__inputBase" placeholder="Explica tu experiencia en el giro que elegiste" cols="30" rows="6"></textarea>
                    <p class="hidden text-red-500 text-xs italic">Este campo es requerido.</p>
                </div>
            </div>

            <div class="w-full mb-3 md:mb-6 ml-4">
                <label class="block text-gray-500 font-bold">
                    <input class="mr-2 leading-tight" type="checkbox" name="has_documentation">
                    <span class="text-sm text-base font-hairline">Cuento con la documentación que respalda mi proyecto (bocetos, planos, fichas técnicas, etc.)</span>
                </label>
            </div>

            <input type="hidden" name="role" id="role" value="entrepreneur">
            <input type="hidden" name="signup_submit" id="signup_submit" value="true">
            
            <div class="w-full mb-3 md:mb-6 ml-4">
                <?php echo do_shortcode("[bws_google_captcha]"); ?>
            </div>

            <div class="w-full px-3 mb-3 mt-3 md:mb-0">
                <input type="submit" value="¡Crear tu cuenta!" class="block m-auto md:ml-0 min-w-1/12 cursor-pointer bg-purple-dark text-white hover:bg-purple-light hover:shadow-md hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
            </div>

        </form>

    </div>

</section>

<?php get_footer(); ?>
