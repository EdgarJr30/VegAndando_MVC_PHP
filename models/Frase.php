<?php

namespace Model;

class Frase extends ActiveRecord {
    protected static $tabla = 'frases';
    protected static $columnasDB = ['id', 'frase'];

    public $id;
    public $frase;
}