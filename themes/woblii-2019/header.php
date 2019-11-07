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

	<body>
		<!--[if lt IE 9]>
			<p class="chromeframe">Estás usando una versión <strong>vieja</strong> de tu explorador. Por favor <a href="http://browsehappy.com/" target="_blank"> actualiza tu explorador</a> para tener una experiencia completa.</p>
		<![endif]-->
		<div class="container mx-auto">

            <div class="fixed w-full mx-auto block container bg-white">
                
                <header class="flex mx-auto mt-6 justify-between flex-no-wrap">
                    <a href="<?php echo site_url(); ?>" class="logo block self-start max-w-12 w-12" title="Woblii">
                        <img src="<?php echo THEMEPATH."assets/images/woblii-logo.svg"; ?>" class="inline-block contain" alt="">
                    </a>
                    <nav id="desktopMainNavigation" class="flex-4 self-end hidden lg:block">
                        <ul class="list-none w-auto text-purple-text flex items-end">
                            <li class="hover:text-purple-dark mr-8 leading-snug text-lg font-body font-light align-baseline">
                                <a href="<?php echo site_url(); ?>">Let's do <br>this together</a>
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
                    <ul id="socialNetworks" class="flex-1">
                        <li>
                            <a href="#"><i class="customIcons youtube"></i></a>
                            <a href="#"><i class="customIcons facebook"></i></a>
                            <a href="#"><i class="customIcons instagram"></i></a>
                        </li>
                    </ul>
                    <a href="#" title="Abrir menú principal" class="inline-block lg:hidden text-purple-text focus:text-purple-light" id="mobileMenuTrigger">
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
