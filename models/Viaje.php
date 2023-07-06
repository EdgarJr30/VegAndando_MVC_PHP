<?php

namespace Model;

class Viaje extends ActiveRecord {
    protected static $tabla = 'viajes';
    protected static $columnasDB = ['id', 'titulo', 'descripcion', 'ciudad', 'fecha', 'hora1', 'salida1', 'precio', 'imagen', 'estatus_id', 'provinciasalida1', 'provinciasalida2', 'provinciasalida3', 'hora2', 'hora3', 'salida2', 'salida3', 'visitaremos1', 'visitaremos2', 'visitaremos3', 'visitaremos4', 'visitaremos5', 'visitaremos6', 'visitaremos7', 'visitaremos8', /*'imgincluye',*/ 'dificultad', 'dificultadmsg', 'recomendacion', 'frase', 'actvopcional', 'precio2', 'precio3', 'includes1', 'includes2', 'includes3', 'includes4', 'includes5', 'includes6', 'includes7', 'includes8'];

    public function __construct($args = []) {
        $this->id = $args['id'] ?? null;
        $this->titulo = $args['titulo'] ?? '';
        $this->descripcion = $args['descripcion'] ?? '';
        $this->ciudad = $args['ciudad'] ?? '';
        $this->fecha = $args['fecha'] ?? '';
        $this->hora1 = $args['hora1'] ?? '';
        $this->salida1 = $args['salida1'] ?? '';
        $this->precio = $args['precio'] ?? '';
        $this->imagen = $args['imagen'] ?? '';
        $this->estatus_id = $args['estatus_id'] ?? '';
        $this->provinciasalida1 = $args['provinciasalida1'] ?? '';
        $this->provinciasalida2 = $args['provinciasalida2'] ?? '';
        $this->provinciasalida3 = $args['provinciasalida3'] ?? '';
        $this->hora2 = $args['hora2'] ?? '';
        $this->hora3 = $args['hora3'] ?? '';
        $this->salida2 = $args['salida2'] ?? '';
        $this->salida3 = $args['salida3'] ?? '';
        $this->visitaremos1 = $args['visitaremos1'] ?? '';
        $this->visitaremos2 = $args['visitaremos2'] ?? '';
        $this->visitaremos3 = $args['visitaremos3'] ?? '';
        $this->visitaremos4 = $args['visitaremos4'] ?? '';
        $this->visitaremos5 = $args['visitaremos5'] ?? '';
        $this->visitaremos6 = $args['visitaremos6'] ?? '';
        $this->visitaremos7 = $args['visitaremos7'] ?? '';
        $this->visitaremos8 = $args['visitaremos8'] ?? '';
        //$this->imgincluye = $args['imgincluye'] ?? '';
        $this->dificultad = $args['dificultad'] ?? '';
        $this->dificultadmsg = $args['dificultadmsg'] ?? '';
        $this->recomendacion = $args['recomendacion'] ?? '';
        $this->frase = $args['frase'] ?? '';
        $this->actvopcional = $args['actvopcional'] ?? '';
        $this->precio2 = $args['precio2'] ?? '';
        $this->precio3 = $args['precio3'] ?? '';
        $this->includes1 = $args['includes1'] ?? '';
        $this->includes2 = $args['includes2'] ?? '';
        $this->includes3 = $args['includes3'] ?? '';
        $this->includes4 = $args['includes4'] ?? '';
        $this->includes5 = $args['includes5'] ?? '';
        $this->includes6 = $args['includes6'] ?? '';
        $this->includes7 = $args['includes7'] ?? '';
        $this->includes8 = $args['includes8'] ?? '';
    }

    public function validar() {
        if (!$this->titulo) {
            self::$alertas['error'][] = 'El Titulo es Obligatorio';
        }
        if (!$this->descripcion) {
            self::$alertas['error'][] = 'La descripcion es Obligatoria';
        }
        if (!$this->ciudad) {
            self::$alertas['error'][] = 'El Campo Ciudad es Obligatorio';
        }
        if (!$this->fecha) {
            self::$alertas['error'][] = 'El Campo fecha es Obligatorio';
        }
        if (!$this->hora1) {
            self::$alertas['error'][] = 'Al menos una hora debe ser asignada';
        }
        if (!$this->salida1) {
            self::$alertas['error'][] = 'Al menos un lugar de salida debe ser asignado';
        }
        if (!$this->precio) {
            self::$alertas['error'][] = 'El Campo precio es obligatorio';
        }
        if (!$this->imagen) {
            self::$alertas['error'][] = 'La imagen es obligatoria';
        }
        if (!$this->estatus_id) {
            self::$alertas['error'][] = 'El estatus es obligatoria';
        }
        if (!$this->provinciasalida1) {
            self::$alertas['error'][] = 'Al menos una provincia de salida debe ser asignada';
        }
        /*if (!$this->imgincluye) {
            self::$alertas['error'][] = 'Debe incluir la imagen del viaje incluye';
        }*/
        if (!$this->dificultad) {
            self::$alertas['error'][] = 'El grado de dificultad es necesario';
        }
        if (!$this->dificultadmsg) {
            self::$alertas['error'][] = 'El mensaje de dificultad es necesario';
        }
        if (!$this->recomendacion) {
            self::$alertas['error'][] = 'La recomendacion es necesaria';
        }

        return self::$alertas;
    }
}
