<?php
class Modelo{
    function __construct(){
        // require ('./config/configdb.php');
        require ('../operaciones/operacionesbd.php');
        $this->operaciones = new Operaciones();
        
        //llamar operaciones bd

    }
    public function alta($descripcion, $audio, $imagen, $tipo){

        $consulta = "INSERT INTO Flashcards (descripcion, audioUrl, img, tipo) VALUES ($descripcion,$audio, $imagen, $tipo);";
        // echo $consulta;
       if($this->operaciones->consulta($consulta)){
           return true;
       }else{
           return false;
       }


        
    }
    public function modificar(){
        // return
    }
    public function borrado(){
        //delete from
    }
    public function listar(){
        //select
    }
    
    function devolverId(){
      return $this->conexion->ultimoInsert_id();
     }
  
}
