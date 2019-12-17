<div class="mx-0 ml-10 mb-4 w-full" id="loginFormContainer">
    
    <form class="w-full max-w-xs mt-12 mb-8 md:my-12 bg-white shadow-md border-purple-light rounded px-8 pt-6 pb-8" method="post" action="<?php echo site_url('/login'); ?>">
        <div class="mb-4">
            <input class="__inputBase" name="log" id="log" type="text" placeholder="Usuario">
        </div>
        <div class="mb-6">
            <input class="__inputBase" name="pwd" id="pwd" type="password" placeholder="********">
            <!-- <p class="text-red-500 text-xs italic">Please choose a password.</p>-->
        </div>
        <div class="flex items-center md:items-end justify-center md:justify-end">
            <button class="bg-purple-dark text-white hover:bg-purple-light hover:text-purple-dark font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                Entrar
            </button>
        </div>
    </form>
    
    <a class="block w-full max-w-xs align-baseline text-center md:text-left font-body font-medium text-sm text-purple-text leading-loose mb-2 hover:text-purple-dark" title="Regístrate como emprendedor" href="<?php echo site_url('signup'); ?>">
        ¿Eres emprendedor?
    </a>
    <a class="block w-full max-w-xs align-baseline text-center md:text-left font-body font-medium text-sm text-purple-text leading-loose mb-2 hover:text-purple-dark" title="Regístrate como emprendedor" href="<?php echo site_url('signup-investor'); ?>">
        ¿Eres inversionista?
    </a>
    <a class="block w-full max-w-xs align-baseline text-center md:text-left font-body font-medium text-sm text-purple-text leading-loose hover:text-purple-dark" href="#">
        ¿Olvidaste tu contraseña?
    </a>

</div>
