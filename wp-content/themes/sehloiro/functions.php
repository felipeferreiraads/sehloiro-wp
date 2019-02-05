<?php
include('inc/form-contact.php');

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

add_filter('use_block_editor_for_post', '__return_false');

register_nav_menus([
    'menu-mobile' => esc_html__( 'Header', 'curso-positivo' )
]);


add_action('init', 'custom_post_types', 0);
function custom_post_types() {
    $labels = [
        'name' => _x('Projetos', 'Projetos'),
        'singular_name' => _x('Projeto', 'Projeto'),
        'add_new' => _x('Adicionar Projeto', 'Nova projeto'),
        'add_new_item' => __('Nova Projeto'),
        'edit_item' => __('Editar Projeto'),
        'new_item' => __('Nova Projeto'),
        'view_item' => __('Ver Projeto'),
        'search_items' => __('Procurar Projetos'),
        'not_found' =>  __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Projetos'
    ];

    $args = [
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => true,
        'menu_position' => null,
        'taxonomies' => ['category'],
        'supports' => ['title', 'thumbnail', 'excerpt', 'category', 'editor']
    ];

    register_post_type('projetos', $args);
    flush_rewrite_rules();
}