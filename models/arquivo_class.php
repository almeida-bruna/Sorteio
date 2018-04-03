<?php
    class LerArquivo{
         
        public function lendoArquivo($arquivo){
            $dados = "";
            $myfile = fopen($arquivo, "r") or die("Unable to open file!");
       
        while(!feof($myfile)) {
            
             $dados = $dados . fgets($myfile) . "<br>";
        }
            fclose($myfile);
            return $dados;
            
     }
        
    }
?>