<?php

namespace Model;

class LugaresVisitar extends ActiveRecord {
    protected static $tabla = 'lugaresavisitar';
    protected static $columnasDB = ['id', 'lugarvisitar'];

    public $id;
    public $lugarvisitar;
}