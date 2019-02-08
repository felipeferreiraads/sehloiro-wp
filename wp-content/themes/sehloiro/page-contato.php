<?php get_header(); ?>

    <main class="main-contact menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>

        <div class="container">
            <figure class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
            </figure>
            <h2 class="main">Trabalhamos e nos divertimos com o que fazemos,
            venha tomar um café conosco em nosso espaço e conhecer nossa vivência.</h2>
            <div class="map">
                <h3>ESTAMOS LOCALIZADOS EM PINHEIROS, SÃO PAULO - BRASIL</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29257.433928639704!2d-46.70595249770392!3d-23.56200516966543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5798cb16268f%3A0xa94014a3e39a3708!2sPinheiros%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1549216219162" frameborder="0" style="border:0"></iframe>
            </div>
            <div class="bottom">
                <a href="<?php echo site_url('/orcamento/'); ?>" class="ui-button">
                    <span class="icon-angle-right"></span>
                    <span class="text">Solicite um orçamento</span>
                </a>
                <div class="contact">
                    <h3>E-mail</h3>
                    <a href="mailto:contato@sehloirooficial.com.br">contato@sehloirooficial.com.br</a>
                </div>
                <div class="contact">
                    <h3>Nossas redes</h3>
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
        </div>
    </main>

<?php get_footer(); ?>