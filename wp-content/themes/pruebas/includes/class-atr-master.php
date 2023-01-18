<?php

class ATR_Master {
    
    protected $cargador;
    protected $theme_name;
    protected $version;

    public function __construct() {

        $this->theme_name = "FLP_Pruebas";
        $this->version = "1.0.0";

        $this->cargar_dependencias();
        $this->cargar_instancias();
        $this->set_idiomas();
        $this->definir_admin_hooks();
        $this->definir_public_hooks();

    }

    private function cargar_dependencias() {

        /**
         * La clase responsable de iterar las acciones y los filtros del nucleo del thema.
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-cargador.php';

        /**
         * La clase responsable de definir la funcionalidad de la internacionalizacion del theme.
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-i18n.php';

        /**
         * La clase responsable de definir menus y submenus en el area de la administracion.
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-build-menupage.php';

        /**
         * La clase responsable de definir todas las acciones en el area de administracion.
         */
        require_once ATR_DIR_PATH . 'admin/class-atr-admin.php';

        /**
         * La clase responsable de definir todas la acciones del lado del cliente o publico que visitan el sitio.
         */
        require_once ATR_DIR_PATH . 'public/class-atr-public.php';

        /**
         * La clase responsable de crear nuevos widgets.
         * widgets personalizados para un sidebar
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-widgets.php';

        /**
         * La clase responsable de crear los cpt
         * Custom Post Type
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-cpt.php';

        /**
         * La clase responsable de crear los metaboxes
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-metaboxes.php';

        /**
         * La clase responsable de crear consultas a la base de datos
         */
        require_once ATR_DIR_PATH . 'includes/class-atr-database.php';

    }

    private function set_idiomas() {

        $atr_i18n = new ATR_i18n();
        $this->cargador->add_action('plugins_loaded', $atr_i18n, 'load_theme_textdomain');

    }

    public function registro_widgets() {

        register_widget('ATR_Widgets');
    
    }

    private function cargar_instancias() {

        /**
         * Crear una instancia del cargador que se utilizara para registrar los ganchos con WordPress.
         */
        $this->cargador         = new ATR_Cargador;
        $this->atr_admin        = new ATR_Admin( $this->get_theme_name(), $this->get_version() );
        $this->atr_public       = new ATR_Public( $this->get_theme_name(), $this->get_version() );
        $this->atr_cpt          = new ATR_CPT();
        $this->atr_metaboxes    = new ATR_Metaboxes;
        $this->atr_database     = new ATR_Database;


    }

    private function definir_admin_hooks() {

        //Encolamiento de archivos de css y js
        $this->cargador->add_action('admin_enqueue_scripts', $this->atr_admin, 'enqueue_styles');
        $this->cargador->add_action('admin_enqueue_scripts', $this->atr_admin, 'enqueue_scripts');

        $this->cargador->add_action('admin_menu', $this->atr_admin, 'add_menu');

        //Ganchos para widgets
        $this->cargador->add_action('widgets_init', $this, 'registro_widgets');

        //Ganchos para CPT
        $this->cargador->add_action('init', $this->atr_cpt, 'atr_cpt_habitaciones');
        $this->cargador->add_action('init', $this->atr_cpt, 'atr_taxonomia_habitaciones');
        $this->cargador->add_action('init', $this->atr_cpt, 'atr_metadatos_cpt');

        //Ganchos para metaboxes
        $this->cargador->add_action('add_meta_boxes', $this->atr_metaboxes, 'atr_add_caja_personalizada');
        $this->cargador->add_action('save_post', $this->atr_metaboxes, 'atr_save_metacaja_datos');

    }

    private function definir_public_hooks() {

        $this->cargador->add_action('wp_enqueue_scripts', $this->atr_public, 'enqueue_styles');
        $this->cargador->add_action('wp_enqueue_scripts', $this->atr_public, 'enqueue_scripts');

        //add menu frontend
        $this->cargador->add_action('init', $this->atr_public, 'atr_theme_support');

        //Registro sidebar
        $this->cargador->add_action('init', $this->atr_public, 'atr_register_sidebars');
    }

    public function get_theme_name() {
        return $this->theme_name;
    }

    public function get_version() {
        return $this->version;
    }

    public function get_cargador() {
        return $this->cargador;
    }

    public function run() {
        $this->cargador->run();
    }
}