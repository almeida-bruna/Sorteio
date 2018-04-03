<?php
 //Variavel que manda o objeto ler_arquivo para página router.php
$action="ler_arquivo";
?>

<!doctype - html5>
<html>
    <head>
    <title>Abrir arquivo</title>
        <link rel="stylesheet" type="text/css" href="../../css/style_home.css">
        <meta charset="utf-8">
    </head>
    <body>
        <form name="frmarquivo" enctype="multipart/form-data" method="post" action="../../router.php?controller=arquivo&modo=<?php echo($action)?>">
            <table id="tabela_arq">
                <tr>
                   <td class="coluna_arq">
                    <input type="file" name="arquivo">
                    </td>
                  <td class="coluna_arq">
                      <input type="submit" name="btnler" value="Ler arquivo">
                    </td>
                </tr>
                <tr>
                    <td class="coluna_texto" colspan="2">
                        <?php
                            //If que retorna o resultado da router.php
                            if(isset($_GET['modo'])){
                                echo ($ler_texto);
                            }
                        ?>
                   </td>
                </tr>
            </table>
           
        </form>
    </body>
</html>