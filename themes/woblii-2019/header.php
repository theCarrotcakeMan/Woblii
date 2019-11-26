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
		<div class="container mx-auto relative">

            <div class="fixed top-0 left-0 w-full shadow-md mx-auto block container bg-white z-10">
                
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
                        </ul>
                    </nav>
                    <ul id="socialNetworks" class="flex-1 self-end float-right text-right">
                        <li>
                            <a title="Síguenos en TouTube" target="_blank" href="https://youtube.com/"><i class="customIcons youtube"></i></a>
                            <a title="Síguenos en facebook" target="_blank" href="https://facebook.com/"><i class="customIcons facebook"></i></a>
                            <a title="Síguenos en Instagram" target="_blank" href="https://instagram.com/"><i class="customIcons instagram"></i></a>
                        </li>
                    </ul>
                    <a href="#" title="Abrir menú principal" class="inline-block lg:hidden text-purple-text text-2xl focus:text-purple-light m-2" id="mobileMenuTrigger">
                        <i class="material-icons">menu</i>
                    </a>
                </header>
                
                <nav style="height: 100vh; right: -50vw;" id="mobileMainNavigation" class="flex-4 self-end block lg:hidden fixed w-1/2 top-0 bg-white p-10">
                    <ul class="list-none w-auto text-purple-text flex items-end">
                        <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-middle">
                            <a href="<?php echo site_url(); ?>">Let's do <br>this together</a>
                        </li>
                        <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-middle">
                            <a href="<?php echo site_url('faq'); ?>">Preguntas <br>Frecuentes</a>
                        </li>
                        <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-middle">
                            <a href="<?php echo site_url('contacto'); ?>">Contacto</a>
                        </li>
                        <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-middle">
                            <a href="<?php echo site_url('aviso-de-privacidad'); ?>">Aviso de <br>Privacidad</a>
                        </li>
                        <li>
                            Insert Social networks here
                        </li>
                    </ul>
                </nav>
                
            </div>
