
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

	<!-- <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest"> -->
 <!-- custom css -->
    <link rel="stylesheet" href="assets/css/main.css">
	<link  rel="stylesheet"  href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
	<?php wp_head(); ?>
	<title>
		
	</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <?php
                    $logo = get_field('logo');
                ?>
                <a class="navbar-brand" href="#">
                    <img class="logo-header" srcset="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" >
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto main-menu ">
                        <li class="item-menu">
                            <a href="https://loja.duxdefender.com.br/ " target="_blank">Loja</a>
                        </li>
                        <li class="item-menu">
                            <a href="https://www.duxgrupo.com.br/">Dux Grupo</a>
                        </li>
                        <li class="item-menu">
                            <a href="#produtos">Produtos</a>
                        </li>
                        <li class="item-menu">
                            <a href="#ondeUtilizar">Onde Utilizar</a>
                        </li>
                        <li class="item-menu">
                            <a href="#diferenciais">Diferenciais</a>
                        </li>
                        <li class="item-menu">
                            <a href="#certificados">Certificados</a>
                        </li>
                        <li class="item-menu">
                            <a href="#depoimentos">Depoimentos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

