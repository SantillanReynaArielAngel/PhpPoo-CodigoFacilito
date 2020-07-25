<?php
/**
 * 
 * _construc: 
 * - Al iniciar la clase el metodo se ejecuta al comienzo de manera autoamatica.
 * - Debe  ser  definido como publico
 * - No dece retorna nada.
 * 
 * _destruct:
 * - Este metodo tambien se ejecuta de manera automatica pero al final de la clase
 * - Debe  ser  definido como publico
 * - No dece retorna nada. 
 */

    class Loteria
    {
        //atributos
        public $numero;
        public $intentos;
        public $resultado=false;

        //Metodos
        public function __construct($numero, $intentos)
        {
            $this->numero=$numero;
            $this->intentos=$intentos;
        }

        public function sortear()
        {
            $minimo=$this->numero/2;
            $maximo=$this->numero*2;
            for($i=0; $i<$this->intentos; $i++)
            {               
                //$int el resultado del intento
                $int=rand($maximo,$minimo);
                //delf:: funciona como el $this->
                self::intentos($int);
            }
        }

        public function intentos($int)
        {
            if($int==$this->numero)
            {
                echo "<b>".$int." == ".$this->numero."</b><br>";
                $this->resultado=true;
            }
            else
            {
                echo $int." != ".$this->numero."<br>";
            }
        }

        public function __destruct()
        {
            if($this->resultado)
            {
                echo "Felicidades has ganado en ".$this->intentos." intentos.";
            }
            else
            {
                echo "Que lastima, has perddido en ".$this->intentos." intentos.";
            }
        }


    }    

    $loteria=new Loteria(10,5);
    $loteria->sortear();

?>