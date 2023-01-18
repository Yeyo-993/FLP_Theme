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
       
        $table = $wpdb->prefiz . 'usuarios';
        $data = [
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

        $resultado = $wpdb->insert($table, $data, $formato);
        var_dump($resultado);
        
    }
}