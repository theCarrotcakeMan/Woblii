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
                
                <header class="flex mx-auto mt-0 md:mt-6 justify-between flex-no-wrap">
                    <a href="<?php echo site_url('/my-feed'); ?>" class="logo block self-start max-w-12 w-12 m-2" title="Woblii | Let's do this together!">
                        <img src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" class="inline-block contain" alt="">
                    </a>
                    <nav id="desktopMainNavigation" class="flex-4 self-start hidden lg:block ml-3">
                        <ul class="list-none w-auto text-purple-text flex items-end">
                            <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                <a href="<?php echo site_url('lets-do-this-together'); ?>">Let's do <br>this together</a>
                            </li>
                            <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                <a href="<?php echo site_url('faq'); ?>">Preguntas <br>Frecuentes</a>
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
                    <ul id="socialNetworks" class="hidden md:inline-block m-2 flex-1 self-end float-right text-right">
                        <li>
                            <a title="Síguenos en TouTube" target="_blank" href="https://youtube.com/"><i class="customIcons youtube"></i></a>
                            <a title="Síguenos en facebook" target="_blank" href="https://facebook.com/"><i class="customIcons facebook"></i></a>
                            <a title="Síguenos en Instagram" target="_blank" href="https://instagram.com/"><i class="customIcons instagram"></i></a>
                        </li>
                    </ul>
                    
                    <label for="open_menu" title="Abrir menú principal" class="inline-block lg:hidden text-purple-text text-2xl focus:text-purple-light m-2 toggle-label select-none" id="mobileMenuTrigger">
                        <i class="material-icons pt-4">menu</i>
                    </label>
                    <input id="open_menu" name="open_menu" class="toggle-input" type="checkbox" value="selected">
                    <nav id="mobileMainNavigation" class="overflow-hidden fixed z-40 md:hidden toggle-content left--full bg-white shadow-md w-2/3 p-6 pt-12">
                        <?php if(! is_user_logged_in()): ?>
                            <ul class="list-none w-full text-purple-text pd-0 mb-6">
                                <li class="block leading-loose mb-4 text-base font-body font-light">
                                    <a class="leading-relaxed" href="<?php echo site_url('signup'); ?>">Regístrate como Entrepreneur</a>
                                </li>
                                <li class="block leading-loose mb-4 text-base font-body font-light">
                                    <a class="leading-relaxed" href="<?php echo site_url('signup-investor'); ?>">Regístrate como Inversionista</a>
                                </li>
                            </ul>
                        <?php endif; ?>
                        <ul class="list-none w-full text-purple-text pd-0 mb-6">
                            <li class="block leading-loose mb-4 text-base font-body font-light">
                                <a class="leading-relaxed" href="<?php echo site_url('lets-do-this-together'); ?>">Let's do this together</a>
                            </li>
                            <li class="block leading-loose mb-4 text-base font-body font-light">
                                <a class="leading-relaxed" href="<?php echo site_url('faq'); ?>">Preguntas Frecuentes</a>
                            </li>
                            <li class="block leading-loose mb-4 text-base font-body font-light">
                                <a class="leading-relaxed" href="<?php echo site_url('contacto'); ?>">Contacto</a>
                            </li>
                            <li class="block leading-loose mb-4 text-base font-body font-light">
                                <a class="leading-relaxed" href="<?php echo site_url('aviso-de-privacidad'); ?>">Aviso de Privacidad</a>
                            </li>
                            <?php if( is_user_logged_in()): ?>
                                <ul class="list-none w-full text-purple-text pd-0">
                                    <li class="block leading-loose mb-4 text-base font-body font-light">
                                        <a class="leading-relaxed" href="<?php echo wp_logout_url( site_url() ); ?>">Salir</a>
                                    </li>
                                </ul>
                            <?php endif; ?>
                            <li class="block mt-6 mb-6 leading-loose text-sm font-hairline">
                                <ul id="socialNetworks" class="inline-block m-2 self-start float-left">
                                    <li>
                                        <a title="Síguenos en TouTube" target="_blank" href="https://youtube.com/"><i class="customIcons youtube"></i></a>
                                        <a title="Síguenos en facebook" target="_blank" href="https://facebook.com/"><i class="customIcons facebook"></i></a>
                                        <a title="Síguenos en Instagram" target="_blank" href="https://instagram.com/"><i class="customIcons instagram"></i></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                    <label for="open_menu" class="overlay -z-10 md:hidden md:invisible"></label>
                </header>
                
                
            </div>
