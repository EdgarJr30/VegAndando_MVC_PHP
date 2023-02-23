<?php

namespace Model;

class Estatus extends ActiveRecord {
    protected static $tabla = 'estatus';
    protected static $columnasDB = ['id', 'status'];

    public $id;
    public $status;
}