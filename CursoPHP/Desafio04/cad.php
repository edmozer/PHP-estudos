<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
    <header>
        
    </header>
    <section>
        <h1>Conversor de reais para dolares</h1>

        <?php 

        $dataatual = date("d-m-Y");
        $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
                $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

        // colocar contra barra \ ante das aspas, dentro das aspas simples.

        $dados = json_decode(file_get_contents($url), true);
        // o valor TRUE esta la para que eu receba dados em array, caso contrario receberia como objeto.

        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

    $n = $_GET['numero'] ?? 0;
    $conversor = $n / $cotacao;
    $dolar = number_format($conversor, 2, '.', '');

    echo "O valor desejado para ser convertido é R$$n.<br>";
    echo "A cotação de hoje, $dataatual, é de $cotacao.<br>";
    echo "Portanto, o valor de R$$n é de U$<b>$dolar.</b><br>";
    ?>
        <form action="" method="get">
            <p>Voltar para a pagina inicial: </p>
            <input type="button" value="Clique aqui" onclick="history.go(-1)">
            
        </form>
    </section>
</body>
</html>
