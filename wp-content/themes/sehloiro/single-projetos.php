<?php
get_header();
the_post();

$yogamer = get_field('yogamer');
?>

    <main class="main-content menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>

        <div class="container">
            <?php if($yogamer): ?>
            <div class="top">
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-yogamers.jpg" alt="YoGamers">
                </figure>
                <div class="right">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
                    <p><?php the_field('titulo_yogamer'); ?></p>
                    <a href="<?php echo site_url('/projetos/'); ?>">
                        <span class="icon-angle-left"></span>
                        <span>voltar</span>
                    </a>
                </div>
            </div>
            <?php else: ?>
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
            </div>
            <?php endif; ?>

            <div class="<?php echo $yogamer ? 'yogamer' : 'content'; ?>">
                <?php if($yogamer): ?>
                <div class="column">
                    <figure>
                        <img src="<?php the_field('imagem_projeto'); ?>" alt="<?php echo get_the_title(); ?>">
                    </figure>
                    <div class="text-intro">
                        <p class="yodinha">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/yoda-cartoon.jpg" alt="YoDa">
                            <?php the_field('texto_yodinha'); ?>
                        </p>
                    </div>
                </div>
                <div class="column">
                    <?php the_field('descricao'); ?>
                    <a href="<?php the_field('link_para_colaboracao'); ?>" class="button">
                        <span class="icon-angle-right"></span>
                        <span>Seja um YoGamer do Bem</span>
                    </a>
                </div>
                <?php else: ?>
                <figure>
                    <img src="<?php the_field('imagem_projeto'); ?>" alt="<?php echo get_the_title(); ?>">
                </figure>
                <?php the_field('descricao'); ?>
                <?php endif; ?>
            </div>
        </div>
    </main>

<?php get_footer(); ?>