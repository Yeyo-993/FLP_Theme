<?php

class ATR_Database{

    protected $usuarios;

    public function __construct(){

        global $wpdb;
        $this->usuarios = "SELECT * FROM {$wpdb->prefix}usuarios";

    }

    public function atr_get_usuarios(){

        global $wpdb;

        $sql = $this->usuarios;
        // $resultado = $wpdb->get_var( $sql, 3, 2 );
        // $resultado = $wpdb->get_row($sql, ARRAY_N, 2);
        $resultado = $wpdb->get_results($sql, OBJECT_K);
        // var_dump($resultado);
    }

    public function atr_insert_usuarios(){

        global $wpdb;
       
        $tabla = $wpdb->prefix . 'usuarios';
        $datos = [
            'id'        => null,
            'nombre'    => 'Alvaro',
            'apellido'  => 'Fernandez',
            'telefono'  => 28894256132
        ];
        $formato = [
            '%d',
            '%s',
            '%s',
            '%d'
        ];

        $resultado = $wpdb->insert($tabla, $datos, $formato);
        var_dump($resultado);
        
    }

    public function atr_replace_usuarios(){

        global $wpdb;

        $tabla = $wpdb->prefix . 'usuarios';
        $datos = [
            'id'        => 5,
            'nombre'    => 'Alicia',
            'apellido'  => 'Campos',
            'telefono'  => 9888565456
        ];
        $formato = [
            '%d',
            '%s',
            '%s',
            '%d'
        ];

        $resultado = $wpdb->replace($tabla, $datos, $formato);
        var_dump($resultado);

    }

    public function atr_update_usuarios(){

        global $wpdb;

        $tabla = $wpdb->prefix . 'usuarios';
        $datos = ['nombre' => 'Jesus'];
        $formato = ['%s'];
        $where = [
            'id' => 4,
            'nombre' => 'Alvaro'
        ];
        $where_format = ['%d', '%s'];

        $resultado = $wpdb->update($tabla, $datos, $where, $formato, $where_format);
        var_dump($resultado);

    }

    public function atr_delete_usuarios() {

        global $wpdb;

        $tabla = $wpdb->prefix . 'usuarios';
        $where = [
            'id' => 5,
            'nombre' => 'Alicia'
        ];
        $where_format = ['%d', '%s'];

        $resultado = $wpdb->delete($tabla, $where, $where_format);
        var_dump($resultado);

    }

    public function atr_sql_personalizado(){

        global $wpdb;
        $tabla = $wpdb->prefix . 'usuarios';
        $sql = "SELECT * FROM $tabla WHERE id = %d AND nombre = %s";
        $args = [2, 'Andrea'];

        $query = $wpdb->prepare($sql, $args);
        $wpdb->show_errors(false);
        $resultado = $wpdb->query( $query );
        var_dump($wpdb->num_rows);

        if( $resultado !== false ){

            if( $resultado != 0 ){

                var_dump($wpdb->last_result);

            }else{
                
                echo "No se encontraron resultados para esta consulta";

            }
        }else{

            echo "Ha ocurrido un error en la consulta";

        }
    }

}