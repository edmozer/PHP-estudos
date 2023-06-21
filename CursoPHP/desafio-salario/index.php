<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <?php 
          $valor1 = $_GET['sal'];
          $resto = $valor1 % 1300;
          $qtdDivisoes = intval($valor1 / 1300);
         
        
        ?>
        <main>
            <h1>Informe o seu salario</h1>
            <form action="<?= $_SERVER['PHP_SELF']?>" method="get">
                <label for="Sal">Salario</label>
                <input type="number" name="sal" id="sal">
                <input type="submit" value="Calcular">
            </form>
        </main>

        <section id="resultado">
            <h2>Resultado final</h2>
            <?php 
                echo "Quem recebe um salario de $valor1 ganha $qtdDivisoes salario(s) minimo(s) e $resto reais.";
                
            ?>



        </section>
    
</body>
</html>