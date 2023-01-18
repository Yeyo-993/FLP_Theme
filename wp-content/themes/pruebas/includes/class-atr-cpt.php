<?php
/**
 * Este sera el archivo donde gestionaremos los custom post type de wordpress
 */

class ATR_CPT {

    public function atr_cpt_habitaciones() {

        //Etiquetas para el post type
        $labels = array(
            'name'               => _x('habitaciones', 'Post Type General Name', 'pruebas'),
            'singular_name'      => _x('habitaciones', 'Post Type Singular Name', 'pruebas'),
            'menu_name'          => __('habitaciones', 'pruebas'),
            'parent_item_colon'  => __('Menú Padre', 'pruebas'),
            'all_items'          => __('Todas las habitaciones', 'pruebas'),
            'view_item'          => __('Ver Menú', 'pruebas'),
            'add_new_item'       => __('Agregar nueva habitación', 'pruebas'),
            'add_new'            => __('Agregar nueva habitación', 'pruebas'),
            'edit_item'          => __('Editar habitación', 'pruebas'),
            'update_item'        => __('Actualizar habitación', 'pruebas'),
            'search_items'       => __('Buscar habitación', 'pruebas'),
            'not_found'          => __('No se encontraron habitaciones', 'pruebas'),
            'not_found_in_trash' => __('No se encontraron habitaciones en la papelera', 'pruebas')
        );

        //Otras opciones para el post type
        $args = array(
            'label'               => __('habitaciones', 'pruebas'),
            'description'         => __('Sube aqui tus habitaciones', 'pruebas'),
            'labels'              => $labels,
            'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'show_in_nav_menus'   => true,
            'show_in_admin_bar'   => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-admin-multisite',
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
            //habilitar wp rest api
            'show_in_rest'        => true,
            'rest_base' => 'rooms-appi',
            'rest_controller_class' => 'WP_REST_Posts_Controller'
        );

        //Registrar el cpt
        register_post_type('rooms', $args);

        flush_rewrite_rules();

    }

    public function atr_pagination_post( $data ){

        // Paginacion
        $big = 99999999; //Numero maximo de paginas

        $args = array(
            'base'                  => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
            'format'                => '?paged=%#%',
            'current'               => max(1, get_query_var('paged')),
            'show_all'              => false,
            'end_size'              => 1,
            'mid_size'              => 2,
            'prev_next'             => true,
            'prev_text'             => __('« Anterior', 'pruebas'),
            'next_text'             => __('Siguiente »', 'pruebas'),
            'type'                  => 'plain',
            'add_args'              => false,
            'add_fragment'          => '',
            'before_page_number'    => '',
            'after_page_number'     => '',
            'total'                 => $data->max_num_pages
        );

        echo paginate_links($args);

    }

    public function atr_taxonomia_habitaciones(){

        $post_types = ['rooms'];

        $labels = array(
            'name'              => _x('Tipo de habitación', 'taxonomy general name', 'pruebas'),
            'singular_name'     => _x('Tipo de habitación', 'taxonomy singular name', 'pruebas'),
            'search_items'      => __('Buscar Tipo de habitación', 'pruebas'),
            'all_items'         => __('Todos los Tipo de habitación', 'pruebas'),
            'parent_item'       => __('Tipo de habitación Padre', 'pruebas'),
            'parent_item_colon' => __('Tipo de habitación Padre:', 'pruebas'),
            'edit_item'         => __('Editar Tipo de habitación', 'pruebas'),
            'update_item'       => __('Actualizar Tipo de habitación', 'pruebas'),
            'add_new_item'      => __('Agregar nuevo Tipo de habitación', 'pruebas'),
            'new_item_name'     => __('Nuevo Tipo de habitación', 'pruebas'),
            'menu_name'         => __('Tipo de habitación', 'pruebas')
        );

        $args = array(
            'hierarchical'      => true,
            'labels'            => $labels,
            'show_ui'           => true,
            'show_admin_column' => true,
            'query_var'         => true,
            'rewrite'           => array('slug' => 'tipo-de-habitacion'),
            //habilitar wp rest api
            'show_in_rest'      => true,
            'rest_base'         => 'tipo-de-habitacion',
            'rest_controller_class' => 'WP_REST_Terms_Controller'
        );

        register_taxonomy('tipo-de-habitacion', $post_types, $args);

    }

    public function atr_metadatos_cpt(){

        //add_post_meta(64, 'mimetadato', 'un valor cualquiera');
        delete_post_meta(65, 'mimetadato');

        delete_post_meta(65, 'colores');

    }

}