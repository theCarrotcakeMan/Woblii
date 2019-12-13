<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<title><?php print_title(); ?></title>
		<link rel="shortcut icon" href="<?php echo THEMEPATH; ?>images/favicon.ico">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://use.typekit.net/vlv7tgy.css">
		<meta http-equiv="cleartype" content="on">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
		<?php wp_head(); ?>
	</head>

	<body class="font-body font-thin leading-relaxed md:leading-normal">
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div id="app" class="container mx-auto relative">

            <div class="fixed top-0 w-full shadow-md mx-auto block container bg-white z-10">
                
                <header class="flex mx-auto mt-0 justify-between flex-no-wrap">
                    <a href="<?php echo site_url('/my-feed'); ?>" class="logo block self-start max-w-12 w-12 m-3" title="Woblii | Let's do this together!">
                        <img src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" class="inline-block contain" alt="">
                    </a>
                    <?php if(! is_user_logged_in()): ?>
                        <nav id="desktopMainNavigation" class="flex-4 self-start hidden lg:block mt-2 ml-3">
                            <ul class="list-none w-auto text-purple-text flex items-end">
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('lets-do-this-together'); ?>">Let's do <br>this together</a>
                                </li>
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('contacto'); ?>">Contacto</a>
                                </li>
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('aviso-de-privacidad'); ?>">Aviso de <br>Privacidad</a>
                                </li>
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('signup'); ?>">Regístrate</a>
                                </li>
                            </ul>
                        </nav>
                    <?php else: ?>
                        <nav id="desktopMainNavigation" class="flex-4 self-start hidden lg:block mt-2 ml-3">
                            <ul class="list-none w-auto text-purple-text flex items-end">
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('lets-do-this-together'); ?>">Let's do <br>this together</a>
                                </li>
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('my-feed'); ?>">Feed</a>
                                </li>
                                <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                    <a href="<?php echo site_url('profile'); ?>">Perfil</a>
                                </li>
                            </ul>
                        </nav>
                        <form class="hidden relative inline-block align-middle" action="<?php echo site_url(); ?>">
                            <input type="text" class="__inputBase bg-purple-dark" name="s" placeholder="Buscar por tema">
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <i class="customIcons search white"></i>
                            </div>
                        </form>
                    <?php endif; ?>
                    <ul id="socialNetworks" class="hidden md:inline-block m-2 flex-1 self-end float-right text-right">
                        <li>
                            <a title="Síguenos en TouTube" target="_blank" href="https://www.youtube.com/channel/UCBuNd7DPV5lViMEjY7PgK6A/?guided_help_flow=5&disable_polymer=true"><i class="customIcons youtube"></i></a>
                            <a title="Síguenos en facebook" target="_blank" href="https://www.facebook.com/Woblii-2245321675514915/"><i class="customIcons facebook"></i></a>
                            <a title="Síguenos en Instagram" target="_blank" href="https://www.instagram.com/woblii"><i class="customIcons instagram"></i></a>
                        </li>
                    </ul>
                    
                    <label for="open_menu" title="Abrir menú principal" class="inline-block lg:hidden text-purple-text text-2xl focus:text-purple-light m-2 toggle-label select-none" id="mobileMenuTrigger">
                        <i class="material-icons text-4xl pt-2">menu</i>
                    </label>
                    <input id="open_menu" name="open_menu" class="toggle-input" type="checkbox" value="selected">
                    <nav id="mobileMainNavigation" class="overflow-hidden fixed z-40 md:hidden toggle-content left--full bg-white shadow-lg w-2/3 p-6 pt-12">
                        <a title="Go to the home page" href="<?php echo site_url(); ?>">
                            <img class="object-none object-contain object-center w-2/3 max-w-xs mt-0 mb-6 mr-auto ml-auto" src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" alt="Woblii">
                        </a>
                        <?php if(! is_user_logged_in()): ?>
                            <ul class="list-none w-full text-purple-text pd-0 mb-6">
                                <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                    <a class="leading-relaxed" href="<?php echo site_url('signup'); ?>">Registro Entrepreneur</a>
                                </li>
                                <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                    <a class="leading-relaxed" href="<?php echo site_url('signup-investor'); ?>">Registro Inversionista</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <ul class="list-none w-full text-purple-text pd-0">
                                <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                    <a class="leading-relaxed" href="<?php echo wp_logout_url( site_url('my-feed') ); ?>">Feed</a>
                                </li>
                                <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                    <a class="leading-relaxed" href="<?php echo wp_logout_url( site_url('profile') ); ?>">Información de perfil</a>
                                </li>
                                <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                    <a class="leading-relaxed" href="<?php echo wp_logout_url( site_url() ); ?>">Salir</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                        <ul class="list-none w-full text-purple-text pd-0 mb-6">
                            <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                <a class="leading-relaxed" href="<?php echo site_url('lets-do-this-together'); ?>">Let's do this together</a>
                            </li>
                            <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                <a class="leading-relaxed" href="<?php echo site_url('aviso-de-privacidad'); ?>">Aviso de Privacidad</a>
                            </li>
                            <li class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                <a class="leading-relaxed" href="<?php echo site_url('contacto'); ?>">Contacto</a>
                            </li>
                            <li class="block mt-6 mb-6 leading-loose text-sm font-hairline">
                                <hr class="block leading-loose mt-6 mb-6 font-body font-hairline text-sm hover:text-purple-text">
                                <ul id="socialNetworks" class="inline-block m-2 -ml-2 self-center w-full text-center">
                                    <li>
                                        <a title="Síguenos en TouTube" target="_blank" href="https://www.youtube.com/channel/UCBuNd7DPV5lViMEjY7PgK6A/?guided_help_flow=5&disable_polymer=true"><i class="customIcons youtube"></i></a>
                                        <a title="Síguenos en facebook" target="_blank" href="https://www.facebook.com/Woblii-2245321675514915/"><i class="customIcons facebook"></i></a>
                                        <a title="Síguenos en Instagram" target="_blank" href="https://www.instagram.com/woblii"><i class="customIcons instagram"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <label for="open_menu" class="overlay -z-10 md:hidden md:invisible"></label>
                </header>
                
            </div>
