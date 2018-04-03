<?php
    class ControllerArquivo {
               
        public function ler_arquivo(){
             
            if($_SERVER['REQUEST_METHOD']=='POST'){
                
                 require_once('models/arquivo_class.php');
                //Tratamnto de arquivo
                $arq = basename($_FILES['arquivo']['name']);
                
                $caminho = $_FILES['arquivo']['tmp_name'];
                if(strstr($arq,'.txt')){
                    
                $arquivo_class = new LerArquivo();
                    
                     return $arquivo_class->lendoArquivo($caminho);
                }else{
                    echo("Este nao é um arquivo txt");
                }
                
            }
        
        }
        
     }
        
    
?>