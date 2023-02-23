<?php

namespace Model;

class Detalles extends ActiveRecord {
    protected static $tabla = 'detalles';
    protected static $columnasDB = ['id', 'lugaresavisitar_id', 'elviajeincluye_id', 'horariosdesalida_id', 'frase_id'];

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->lugaresavisitar_id = $args['lugaresavisitar_id'] ?? '';
        $this->elviajeincluye_id = $args['elviajeincluye_id'] ?? '';
        $this->horariosdesalida_id = $args['horariosdesalida_id'] ?? '';
        $this->frase_id = $args['frase_id'] ?? '';
    }
}
