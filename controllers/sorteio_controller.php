<?php
    class ControllerSorteio {
        
        public function Sorteio_loteria(){
            
                require_once('models/sorteio_class.php');
                
                 $sorteio = new CodeGen();
                 
                 return $sorteio->getRandomCode();
        }
        
    }
?>