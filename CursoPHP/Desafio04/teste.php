<pre>
    <?php

        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    
        // colocar contra barra \ ante das aspas, dentro das aspas simples.
    
        $dados = json_decode(file_get_contents($url), true);
        // o valor TRUE esta la para que eu receba dados em array, caso contrario receberia como objeto.
    
        //var_dump($dados);

        $cotacao = $dados["value"][0]["cotacaoCompra"];

        echo "A cotacao foi $cotacao"
    ?>
</pre>