
<?php
    //Variavel Controller
    $controller=$_GET['controller'];
    //Variavel Modo
    $modo=$_GET['modo'];

    switch($controller) {
        case 'sorteio':

            require_once('controllers/sorteio_controller.php');
            switch($modo) {
                case 'sorteio1':
                    
                   //Inclui o arquivo da controlle
                    require_once('controllers/sorteio_controller.php');
                    //Instanci o objeto da controller
                    $controller_sorteio = new ControllerSorteio();
                    
                    //chama o metodo para realizar o sorteio 1
                    $array = $controller_sorteio->Sorteio_loteria();
                    
                    //chama o metodo para realizar o sorteio 2
                    $array2 = $controller_sorteio->Sorteio_loteria();
                    
                    //chama o metodo para realizar o sorteio 3
                    $array3 = $controller_sorteio->Sorteio_loteria();
                 
                    require_once('views/home.php');
        
                    break;
            }
            
          case 'arquivo':

                require_once('controllers/arquivo_controller.php');
               
                
                switch($modo) {
                    case 'ler_arquivo':
                        
                       
                        require_once('controllers/arquivo_controller.php');
                        //Instanci o objeto da controller
                        $controller_arquivo = new ControllerArquivo();

                        $ler_texto = $controller_arquivo->ler_arquivo();
                        
                        require_once('views/Ler_arquivo/ler_arquivo_view.php');}
    }
            
?>