<?php
    

    class Controlador{
        
        function __construct(){

            require ("../modelo/modelo.php");
            $this->modelo = new Modelo();

        }
        public function altaFlashCard($descripcion, $audio, $imagen, $tipo){
            $this->modelo->alta($descripcion, $audio, $imagen, $tipo);
        }
        public function actualizarFlashCard($descripcion, $audio, $imagen, $tipo){
            $this->modelo->modificar($descripcion, $audio, $imagen, $tipo);
        }
        public function eliminarFlashCard($id){
            //ifisset o vista
            $this->modelo->borrar($id);

        }
        //función de listado de flashcards en html
        public function listarFlashCard(){
            $this->modelo->listar();
        }
    }

?>