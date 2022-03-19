<?php
    

    class Controlador{
        
        function __construct(){

            require ("../modelo/modelo.php");
            $this->modelo = new Modelo();

        }
        public function altaFlashCard($descripcion, $audio, $imagen, $tipo){
            $this->modelo->alta($descripcion, $audio, $imagen, $tipo);
        }
        public function actualizarFlashCard($id,$descripcion, $audio, $imagen, $tipo){
            $this->modelo->modificar($id,$descripcion, $audio, $imagen, $tipo);
        }
        public function eliminarFlashCard($id){
            //ifisset o vista
            $this->modelo->borrado($id);

        }
        //función de listado de flashcards en html
        public function listarFlashCard(){
           return $this->modelo->listar();
        }
        public function idFlashCard($id){
           return $this->modelo->obtenerId($id);
        }
    }

?>