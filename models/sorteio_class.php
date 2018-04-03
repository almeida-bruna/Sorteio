<?php
    class CodeGen {
        private $codes = array();
        private $minimo;
        private $max;

        public function __construct() {
            $this->minino = 1;
            $this->maximo = 60;
        }

         public function getRandomCode()
            {
              $next = 6; 
                while (count($this->codes) < $next) {
                    
                    $code = mt_rand($this->minino,  $this->maximo);    
                    if (!in_array($code, $this->codes)) {           
                       $this->codes[] = $code;   
                   }      
                }

                return $this->codes;
                     
            }
    }

?>