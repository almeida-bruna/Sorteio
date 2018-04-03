<?php
    //Variavel que manda o objeto sorteio1 para página router.php
    $action="sorteio1";
?>
<!doctype - html5>
<html>
    <head>
    <title>Array</title>
        <link rel="stylesheet" type="text/css" href="css/style_home.css">
        <meta charset="utf-8">
    </head>
    <body>
        <form name="frmsorteio" method="post" action="router.php?controller=sorteio&modo=<?php echo($action)?>">
            <input class="botao1" type="submit" name="btn_prymari" value="Sorteio">
            <a href="views/Ler_arquivo/ler_arquivo_view.php"><div id="botao_arquivo">Ler Arquivo</div></a>
            <?php
                //Entrada do array
                if(isset($_GET['modo'])){
            ?>
                <!--Tabela 1-->
                <table class="tabela">
                        <?php 
                            //For de define os numeros de 1 á 60
                            for($i =1; $i < 61; $i++) { 
                                //Linha de dezenas criadas pelo array
                                if($i == 1 || $i == 11 || $i == 21 || $i == 31 || $i == 41 || $i == 51){
                                    echo("<tr>");
                                }
                                
                                if($array[0] == $i || $array[1] == $i || $array[2] == $i || $array[3] == $i || $array[4] == $i || $array[5] == $i ){
                                    echo "<td class='colunasAzul'>".$i."</td>";
                                }else{
                                    echo "<td class='colunas'>".$i."</td>";
                                }
                                
                                if($i == 10 || $i == 20 || $i == 30 || $i == 40 || $i == 50 || $i == 60){
                                    echo("</tr>");
                                }
                            }
                        ?>
                </table>
                <!--Tabela 2-->
                <table class="tabela">
                    
                        <?php 
                            for($i =1; $i < 61; $i++) { 
                                
                                if($i == 1 || $i == 11 || $i == 21 || $i == 31 || $i == 41 || $i == 51){
                                    echo("<tr>");
                                }
                                
                                if($array2[0] == $i || $array2[1] == $i || $array2[2] == $i || $array2[3] == $i || $array2[4] == $i || $array2[5] == $i ){
                                    echo "<td class='colunasAzul'>".$i."</td>";
                                }else{
                                    echo "<td class='colunas'>".$i."</td>";
                                }
                                
                                if($i == 10 || $i == 20 || $i == 30 || $i == 40 || $i == 50 || $i == 60){
                                    echo("</tr>");
                                }
                            }
                        ?>
                </table>
            <!--Tabela 3-->
            <table class="tabela">
                    
                        <?php 
                            for($i =1; $i < 61; $i++) { 
                                
                                if($i == 1 || $i == 11 || $i == 21 || $i == 31 || $i == 41 || $i == 51){
                                    echo("<tr>");
                                }
                                
                                if($array3[0] == $i || $array3[1] == $i || $array3[2] == $i || $array3[3] == $i || $array3[4] == $i || $array3[5] == $i ){
                                    echo "<td class='colunasAzul'>".$i."</td>";
                                }else{
                                    echo "<td class='colunas'>".$i."</td>";
                                }
                                
                                if($i == 10 || $i == 20 || $i == 30 || $i == 40 || $i == 50 || $i == 60){
                                    echo("</tr>");
                                }
                            }
                        ?>
                </table>
           <?php
                }
            ?>