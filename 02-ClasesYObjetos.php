<?php
    class Persona{

        //atributos
        public $nombre="Pedro";


        //Metodos
        public function hablar($mensaje){
            echo $mensaje;
        }

    }


    //PRIMERO SE CREA UN OBJETO PARA PODER ACCEDER A SUS ATRIBUTOS Y METODOS
    $persona =  new Persona(); //se instancia una clase a la variable $persona(de cual se conviete en objeto con atributos y metodos)
    //echo $persona->nombre; //con -> se accede a tributos o funciones del objeto

    $persona->hablar("Hola Santillan");
?>