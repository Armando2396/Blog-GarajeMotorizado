<?php

require_once('BlogDB.php');

class Articulo{
    private $id;
    private $titulo;
    private $intro;
    private $contenido;
    private $img;
    private $cta;
    private $fecha_hora;


    function __construct($id, $titulo, $intro, $contenido, $img, $cta, $fecha_hora=null){

        $this->id = $id;
        $this->titulo = $titulo;
        $this->intro = $intro;
        $this->contenido = $contenido;
        $this->img = $img;
        $this->cta = $cta;
        if ($fecha_hora === null) {
            $this->fecha_hora = date('Y-m-d H:i:s');
        } else {
            $this->fecha_hora = $fecha_hora;
        }
    }
    
    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getTitulo(){
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getIntro(){
        return $this->intro;
    }
    public function setIntro($intro) {
        $this->intro = $intro;
      }
    public function getContenido(){
        return $this->contenido;
    }
    public function setContenido($contenido){
        return $this->contenido = $contenido;
    }
    public function getImg(){
        return $this->img;
    }
    public function setImg($img){
        return $this->img = $img;
    }
    public function getCta(){
        return $this->cta;
    }
    public function setCta($cta){
        return $this->cta = $cta;
    }
    public function insert(){
        $conexion = BlogDB::connectDB();
        $insercion = "INSERT INTO articulo (titulo, intro, contenido, img, cta, fecha_hora) VALUES (\"".$this->titulo."\", \"".$this->intro."\", \"".$this->contenido."\", \"".$this->img."\", \"".$this->cta."\", NOW())";
        $conexion->exec($insercion);
    }

    public function delete() {
        $conexion = BlogDB::connectDB();
        $borrado = "DELETE FROM articulo WHERE id=\"".$this->id."\"";
        $conexion->exec($borrado);
    }

    public function update(){
        $conexion = BlogDB::connectDB();
        // Prepara la consulta SQL
        $sql = "UPDATE articulo SET titulo = ?, intro = ?, contenido = ?, img = ?, cta = ?, fecha_hora = ? WHERE id = ?";

        // Prepara los datos a insertar
        $params = array($this->titulo, $this->intro, $this->contenido, $this->img, $this->cta, $this->fecha_hora, $this->id);

        // Ejecuta la consulta
        $stmt = $conexion->prepare($sql);
        $result = $stmt->execute($params);

        // Devuelve true si la consulta se ejecutó correctamente, o false si hubo un error
        return $result;
    }

    public static function getArticulos() {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, intro, contenido, img, cta, fecha_hora FROM articulo";
        $consulta = $conexion->query($seleccion);
        $articulos = [];
        while ($registro = $consulta->fetchObject()) {
        $articulos[] = new Articulo($registro->id, $registro->titulo, $registro->intro, $registro->contenido, $registro->img, $registro->cta, $registro->fecha_hora);
        }
        return $articulos;
    }

    public function getFecha_hora(){
        return $this->fecha_hora;
    }

    public static function getArticuloById($id) {
        $conexion = BlogDB::connectDB();
        $seleccion = "SELECT id, titulo, intro, contenido, img, cta, fecha_hora FROM articulo WHERE id=\"".$id."\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $articulos = new Articulo($registro->id, $registro->titulo, $registro->intro, $registro->contenido, $registro->img, $registro->cta, $registro->fecha_hora);
        return $articulos;
    }
        
    
}