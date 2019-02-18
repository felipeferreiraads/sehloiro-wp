<?php get_header(); the_post(); ?>

    <main class="main-media menu-switch">
        <div class="open-menu-mobile">
            <span class="icon-menu"></span>
        </div>

        <div class="top">
            <div class="grid">
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg" alt="SehLoiro">
                    <span>na Mídia</span>
                </div>
            </div>
            <p>Clique na notícia para vê-la completa.</p>
        </div>

        <div class="media-posts">
            <?php
                if( have_rows('midia') ): $count = 0;
                    while ( have_rows('midia') ) : the_row();
                        if($count % 2 === 0):
                            if($count != 0) echo '</div>';
                            echo '<div class="column">';
                        endif;

                        echo
                        '<a href="'.get_sub_field('link').'" class="card-media" target="_blank">
                            <h3>'.get_sub_field('titulo').'</h3>
                            <figure>
                                <img src="'.get_sub_field('imagem').'" alt="'.get_sub_field('titulo').'">
                            </figure>
                        </a>';

                        $count ++;
                    endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </main>

<?php get_footer(); ?>