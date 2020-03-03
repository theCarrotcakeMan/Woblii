<div class="relative mx-auto md:mx-0 md:ml-10 mb-4 w-full" id="loginFormContainer">

    <form class="w-full max-w-xs mx-auto mt-12 md:my-12 mb-4 px-8 pt-6 pb-8 bg-white shadow-md border-purple-light rounded" method="post" action="<?php echo site_url('/login'); ?>">
        <div class="mb-4">
            <input class="__inputBase border-purple-dark" name="log" id="log" type="text" placeholder="Correo electrónico">
        </div>
        <div class="mb-6">
            <input class="__inputBase border-purple-dark" name="pwd" id="pwd" type="password" placeholder="********">
            <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p>-->
        </div>
        <div class="flex items-center md:items-end justify-center md:justify-end">
            <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-text font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Entrar
            </button>
        </div>
    </form>

    <a class="block w-full max-w-xs mx-auto align-baseline text-center md:text-left font-body font-medium text-sm text-purple-text leading-loose mb-2 hover:text-blue-600 hover:underline" title="Regístrate como emprendedor" href="<?php echo site_url('signup'); ?>">
        ¿Eres emprendedor?
    </a>
    <a class="block w-full max-w-xs mx-auto align-baseline text-center md:text-left font-body font-medium text-sm text-blue-600 leading-loose hover:text-blue-600 hover:underline" href="#">
        ¿Olvidaste tu contraseña?
    </a>

</div>
