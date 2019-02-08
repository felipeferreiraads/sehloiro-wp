<!DOCTYPE html>
<html>
<head>
    <?php wp_head(); ?>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,800" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="open-menu">
            <span>Menu</span>
            <div class="bars">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
            <div class="circle"></div>
        </div>
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/menu.jpg" alt="Menu">
        </div>
    </header>


    <nav class="main-menu">
        <a href="<?php echo site_url('/sobre/'); ?>">Sobre</a>
        <a href="<?php echo site_url('/servicos/'); ?>">Serviços</a>
        <a href="<?php echo site_url('/projetos/'); ?>">Projetos</a>
        <a href="<?php echo site_url('/midia/'); ?>">Mídia</a>
        <a href="<?php echo site_url('/contato/'); ?>">Contato</a>
    </nav>