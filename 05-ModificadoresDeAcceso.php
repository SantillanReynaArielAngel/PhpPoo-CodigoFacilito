<?php
/**
 * Modificadoress de acceso:
 * - Son simples propiedades que podemos añadirles a nuestros metodos y atributos de nuestra clase,
 *  estas nos ayudadran con los accesos  y la extraccion de metodos o atributos
 * 
 * 
 */

    class Facebook{
        //ATRIBUTOS
        public $nombre;
        public $edad;
        private $pass;

        //metodos

        //constructor:
        public function __construct($nombre,$edad,$pass){
            $this->nombre=$nombre;
            $this->edad=$edad;
            $this->pass=$pass;
        }

        public function verinfo()
        {
            echo 'Nombre: '.$this->nombre."<br>";
            echo 'Edad: '.$this->edad."<br>";
            echo "Password: ".$this->pass."";

            //Para cambiar el password se llamara desde este ootro metodo(requisito de  los private)
            $this->cambiarpass("54321 (Pass Cambiado)");
        
        }
        
        //Los metodos private no pueden ser accedidos atraves de un objeto.
        //Solo podra ser accedido desde otro metodo de la misma clase
        private function cambiarpass($pass)
        {
            $this->pass=$pass;
        }
    }

    $facebook= new Facebook("Santillan Reyna Ariel Angel", 23, "1234");
    $facebook->verinfo();//EN ESTE CASO SI SE PUEDE VER CONTRASENIA YA QUE verinfo() es un metodo que esta en la misma clase

    echo "<br> //////////////////////////////";
    // con "->" accedemos a los atributos o metodos de un  objeto
    echo "<br>".$facebook->nombre;
    echo "<br>".$facebook->edad;
    
    echo "<br> ////////////////////////////// <br>";
    //No se mostrara contrasenia por que se quiere acceder directamente(sin utilizar un metodo de la clase), ya que pass el private
    // lo mismo pasaria si pass seria protectec
    //echo "<br>".$facebook->pass;

    //se tratra de cambiar, pero dara error por que es de tipo private
    //$facebook->cammbiarpass("4321");
    echo "<br>".$facebook->verinfo();
?>