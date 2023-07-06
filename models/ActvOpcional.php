<?php

namespace Model;

class ActvOpcional extends ActiveRecord {
    protected static $tabla = 'actv_opcional';
    protected static $columnasDB = ['id', 'actividad', 'viaje_id'];

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->actividad = $args['actividad'] ?? '';
        $this->viaje_id = $args['viaje_id'] ?? '';
    }

    // public function validar() {
    //     if (!$this->viaje_id) {
    //         self::$alertas['error'][] = 'Seleccionar un viaje es Obligatorio';
    //     }
    //     return self::$alertas;
    // }
}
