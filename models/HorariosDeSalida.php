<?php

namespace Model;

class HorariosDeSalida extends ActiveRecord {
    protected static $tabla = 'horariosdesalida';
    protected static $columnasDB = ['id', 'hora', 'provincia', 'lugar'];

    public $id;
    public $hora;
    public $provincia;
    public $lugar;
}