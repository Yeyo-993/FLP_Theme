<?php

class ATR_Admin {

    private $theme_name;
    private $version;
    private $build_menupage;

    public function __construct($theme_name, $version) {
        
        $this->theme_name = $theme_name;
        $this->version = $version;
        $this->build_menupage = new ATR_Build_Menupage();

    }

    /**
     * Registra los archivos de estilos en el area de administracion
     */
    public function enqueue_styles($hook) {

        if($hook != 'toplevel_page_res_options_page' && $hook != 'opciones-de-reservas_page_res_submenu_reserva'){
            return;
        }

        wp_enqueue_style(
            $this->theme_name,
            ATR_DIR_URI . 'admin/css/atr-admin.css',
            array(),
            $this->version,
            'all'
        );
    
    }

    /**
     * Registra los archivos de scripts en el area de administracion
     */
    public function enqueue_scripts($hook) {

        if ($hook != 'toplevel_page_res_options_page' && $hook != 'opciones-de-reservas_page_res_submenu_reserva') {
            return;
        }

        wp_enqueue_script(
            $this->theme_name,
            ATR_DIR_URI . 'admin/js/atr-admin.js',
            ['jquery'],
            $this->version,
            true
        );
        
    }
    /**
     * Registra los menus del thema
     * En el area de administracion
     * @version 1.0.0
     * @access public
     */
    public function add_menu(){

        //Agrega el menu
        $this->build_menupage->add_menu_page(
            __('Opciones de Reservas', 'pruebas'),
            __('Opciones de Reservas', 'pruebas'),
            'manage_options',
            'res_options_page',
            [$this, 'controlador_display_menu'],
            'dashicons-flag',
            15
        );

        //Agregamos el submenu
        $this->build_menupage->add_submenu_page(
            'res_options_page',
            __('Submenu reservas', 'pruebas'),
            __('Submenu reservas', 'pruebas'),
            'manage_options',
            'res_submenu_reserva',
            [$this, 'controlador_display_submenu']
        );

        $this->build_menupage->run();

    }

    /**
     * Aqui el html de la pagina del menu en el area de administracion
     */
    public function controlador_display_menu() {

        require_once ATR_DIR_PATH . 'admin/partials/atr-menu-reservas-display.php';

    }

    /**
     * Aqui el html de la pagina del submenu en el area de administracion
     */
    public function controlador_display_submenu() {

        require_once ATR_DIR_PATH . 'admin/partials/atr-submenu-reserva-display.php';

    }
}