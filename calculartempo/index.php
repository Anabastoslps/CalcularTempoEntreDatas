<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF_8"/>
        <title>Celke</title>
    </head>
    <body>
        <h2>Calcular tempo entre duas datas</h2>

        <?php
        
        $entrada = new DateTime("2020-02-19 09:00:00");
        $saida = new DateTime("2023-08-08 09:00:00");
        
        echo "Entrada: " . $entrada->format('d/m/y H:i:s') . "<br>";
        echo "Saida: " . $saida->format('d/m/y H:i:s') . "<br><br>";
        
        //calcular o intervalo entre as datas
        $intervado = $entrada->diff($saida);
        
        var_dump($intervalo);

        //calcular o tempo entre as duas datas
        echo $intervalo->y. "anos," . $intervalo->m . " meses," . $intervalo->d . "dias. <br>";

        //Total de dias
        echo $intervalo->days . " dias. <br>";

        //obter o intervalo em segundos
        echo $saida->getTimestamp() - $entrada->getTimestamp() . " segundos. <br>";

        //obter o intervalo em minutos
        echo ($saida->getTimestamp() - $entrada->getTimestamp())/60 . " minutos. <br>";

         //obter o intervalo em horas
         echo (($saida->getTimestamp() - $entrada->getTimestamp())/60) / 60 . " horas. <br>";
        ?>
    </body>
</html>