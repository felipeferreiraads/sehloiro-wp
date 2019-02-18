<?php
get_header();

$posts = new WP_Query(['post_type' => 'projetos', 'posts_per_page' => 50, 'order' => 'asc']);
?>

    <main class="main-projects menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>

        <figure class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
        </figure>
        <div class="top">
            <h2>Conheça projetos que já realizamos</h2>
            <a href="#" class="scroll-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/arrows.jpg" alt="Próximo">
            </a>
        </div>
        <div class="media-posts">
        <?php while($posts->have_posts()): $posts->the_post(); $yogamer = get_field('yogamer'); ?>
            <div class="card-project">
                <?php the_title('<h3>', '</h3>'); ?>
                <figure>
                    <img src="<?php the_field('imagem_projeto'); ?>" alt="<?php echo get_the_title(); ?>">
                </figure>
                <p><?php the_field('resumo'); ?></p>
                <?php if($yogamer) :?>
                <span class="text"><?php the_field('frase_yogamer_do_bem'); ?></span>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="ui-button read-more">
                    <span class="icon-angle-right"></span>
                    Leia +
                </a>
            </div>
        <?php endwhile; ?>
        </div>
    </main>

<?php get_footer(); ?>