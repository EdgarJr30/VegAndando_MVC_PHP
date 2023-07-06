<?php

namespace Model;

class ViajeIncluye extends ActiveRecord {
    protected static $tabla = 'elviajeincluye';
    protected static $columnasDB = ['id', 'incluyeimg'];

    public $id;
    public $incluyeimg;
}