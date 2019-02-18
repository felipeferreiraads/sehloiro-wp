<?php get_header(); the_post(); ?>

    <main class="main-home menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>
        <figure class="logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="SehLoiro">
        </figure>
        <h1><?php the_field('frase_1'); ?></h1>
        <div class="brand">
            <span>Sua marca</span>
            <span>Seu patrimônio</span>
        </div>
        <nav class="nav-home">
            <a href="<?php echo site_url('/sobre/'); ?>">Quem Somos</a>
            <a href="<?php echo site_url('/servicos/'); ?>">O que fazemos</a>
            <a href="<?php echo site_url('/midia/'); ?>">Mídia</a>
            <a href="<?php echo site_url('/contato/'); ?>">Onde nos encontrar</a>
            <a href="<?php echo site_url('/projetos/yogamer/'); ?>">Seja um YoGamer do Bem</a>
        </nav>
    </main>

<?php get_footer(); ?>