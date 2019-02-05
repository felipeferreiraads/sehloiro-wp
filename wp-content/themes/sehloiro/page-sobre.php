<?php get_header(); ?>

    <main class="main-about menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>
        <div class="container">
            <figure class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
            </figure>
            <div class="top">
                <h2>Somos uma empresa especialista em gestão de marcas</h2>
                <div class="social">
                    <span class="text">conecte-se conosco</span>
                    <div class="grid">
                        <a href="https://www.facebook.com/SehLoirooficial/" target="_blank">
                            <span class="icon-facebook"></span>
                        </a>
                        <a href="https://www.instagram.com/sehloirooficial/" target="_blank">
                            <span class="icon-instagram"></span>
                        </a>
                        <a href="https://www.instagram.com/sehloirooficial/" target="_blank">
                            <span class="icon-twitter"></span>
                        </a>
                        <a href="https://www.youtube.com/channel/UCuhVlANZXUATGv1dRmwcUzA" target="_blank">
                            <span class="icon-youtube"></span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="content">
                <h3>História</h3>
                <div class="grid">
                    <div class="timeline">
                    <?php while ( have_rows('timeline') ) : the_row();
                        $imagem = get_sub_field('adicionar_imagem_simples');
                        $imagem_dupla = get_sub_field('adicionar_imagem_dupla'); ?>
                            <div class="item">
                                <span><?php the_sub_field('ano'); ?></span>
                                <?php the_sub_field('descricao') ;?>
                                <?php if($imagem): ?>
                                <div class="image simples">
                                    <img src="<?php the_sub_field('imagem_simples');?>" alt="<?php the_sub_field('ano'); ?>">
                                </div>
                                <?php endif; ?>
                                <?php if($imagem_dupla): ?>
                                <div class="image">
                                    <img src="<?php the_sub_field('imagem_dupla_1');?>" alt="<?php the_sub_field('ano'); ?>" class="half">
                                    <img src="<?php the_sub_field('imagem_dupla_2');?>" alt="<?php the_sub_field('ano'); ?>" class="half">
                                </div>
                                <?php endif; ?>
                            </div>
                    <?php endwhile; ?>
                    </div>
                </div>
            </div>
            <div class="brands">
                <h3>Marcas</h3>
                <div class="grid">
                <?php while ( have_rows('marcas') ) : the_row(); ?>
                    <div class="item">
                        <img src="<?php the_sub_field('imagem_marcas'); ?>" alt="Marca">
                    </div>
                <?php endwhile; ?>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>