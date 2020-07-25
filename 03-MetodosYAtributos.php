<?php
/**Atributos:
 * - Son simples variables o arrays
 * - Se define como: public, private o protected
 * 
 * Metodos:
 * - Se acccede a los atributos utilizando la palabra reservada $this-> seguido del nombre del atributo ($this->nombre)
 * - Podemos acceder a otros metodos con $this o self::
 * 
 * 
 */

    class Persona {

        ///atributos
        public $nombre= array();
        public $apellido= array();

        //metodos
        public function guardar($nombre, $apellido)
        {
            $this->nombre[]=$nombre;
            $this->apellido[]=$apellido;
        }

        public function mostrar()
        {
            for($i=0; $i<count($this->nombre); $i++)
            {
                $this->formato($this->nombre[$i], $this->apellido[$i]);
            }
        }

        public function formato($nombre, $apellido)
        {
            echo "Nombre: ".$nombre." | Apellido: ".$apellido."<br>";
        }

        
    }


    $alumno=new Persona();
    $alumno->guardar('Ariel', "Santillan");
    $alumno->guardar("Erick", "Manzano");

    $alumno->mostrar();

?>