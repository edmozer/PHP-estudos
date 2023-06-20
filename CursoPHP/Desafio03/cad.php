<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interacao com fomularios</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <header>
        
    </header>
    <section>
        <h1>Conversor de reais para dolares</h1>

        <?php 
    $n = $_GET['numero'];
    $conversor = $n / 4.81;
    $dolar = number_format($conversor, 2, '.', '');

    echo "O valor desejado para ser convertido é $n.<br>";
    echo "A cotação atual é de 4,81.<br>";
    echo "Portanto, o valor de $n em dólares é <b>$dolar.</b><br>";
    ?>
        <form action="" method="get">
            <p>Voltar para a pagina inicial: </p>
            <input type="button" value="Clique aqui" onclick="history.go(-1)">
            
        </form>
    </section>
</body>
</html>
