<?php
    class Vehiculo{

        public $motor=false;
        public $marca;
        public $color;


        public function estado()
        {
            if($this->motor)
            {
                echo 'Es motor esta encendido<br>';
            }
            else
            {
                echo 'El motor esta apagado<br>';
            }
        }

        
        public function encender()
        {
            if($this->motor)
            {
                echo 'CUIDADO!!! el motor ya esta encendido<br>';
            }
            else
            {
                $this->motor=true;
                echo "El ahora ya esta encendido<br>";
            }
        }

        //PRUEBA DE HERENCIA CON UN PRIVATE
        private function saludo()
        {
            echo "Saludo desde el metodo private de vehiculo<br>";
        }

    }

    //Provando la clase
    $vehiculo=new Vehiculo();
    //$vehiculo->estado();
    //$vehiculo->encender();

    //si llammos a saludo nos dara heero yya que al ser privaddo solo puede ser accediddo desde otro  metodo de la clase
    //$vehiculo->saludo();

    //AHORA PSAREMOS A REALIZAR HERENCIA
    class Moto extends Vehiculo{

        public function estadoMoto()
        {
            $this->estado();
        }

    }

    $moto = new Moto();
    //$moto->estado();
    //$moto->encender();
    //$moto->estadoMoto();
    
    class Cuadrimoto extends Moto
    {
        // SE HERENDAN TODOS LOS METODOS Y ATRIBUTOS DE LAS CLASES ANNTECESORAS
    }
    $cuadrimoto = new Cuadrimoto();
    echo "Cuadrimoto ".$cuadrimoto->estado();//se  puede usar el metodo estodo() que esta en  vehiculo.


?>