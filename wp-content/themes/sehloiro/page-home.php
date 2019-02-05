<?php get_header(); ?>

    <main class="main-home menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>
        <figure class="logo">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="SehLoiro">
        </figure>
        <h1>Sua marca é seu patrimônio</h1>
        <p>Transforme Ideias em grandes negócios</p>
        <nav class="nav-home">
            <a href="<?php echo site_url('/'); ?>">Quem Somos</a>
            <a href="<?php echo site_url('/servicos/'); ?>">O que fazemos</a>
            <a href="<?php echo site_url('/portfolio/'); ?>">Portfólio</a>
            <a href="<?php echo site_url('/contato/'); ?>">Onde nos encontrar</a>
            <a href="<?php echo site_url('/projetos/yogamer/'); ?>">Seja um YoGamer do Bem</a>
        </nav>
    </main>

<?php get_footer(); ?>