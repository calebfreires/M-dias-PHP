<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias aritmética e ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $v1 = $_GET['valor1'];
        $p1 = $_GET['peso1'];
        $v2 = $_GET['valor2'];
        $p2 = $_GET['peso2'];

        $ma = ($v1 + $v2) / 2;

        $mp = (( $v1 * $p1 ) + ( $v2 * $p2 )) / ($p1 + $p2);

    ?>

    <main>
        <h2>Médias Aritméticas</h1>
            <!-- Enviando os dados para o próprio arquivo -->
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1º valor</label>
            <input type="number" name="valor1" id="number" required>

            <label for="peso1">1º peso</label>
            <input type="number" name="peso1" id="number" required>

            <label for="valor2">2º valor</label>
            <input type="number" name="valor2" id="number" required>

            <label for="peso2">2º peso</label>
            <input type="number" name="peso2" id="number" required>

            <input type="submit" value="Calcular Média">
        </form> 
    </main>

    <section>
        <h2>Cálculo das Médias</h2>

        <?php 
            echo "<p>Analisando os valores de $v1 e $v2</p>";

            echo "
                <ul>
                    <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <strong>". number_format($ma, 2, ",", ".") ."</strong></li>
                    <li>A <strong>Média Aritmética Ponderada</strong> com pesos $p1 e $p2 é igual a <strong>". number_format($mp, 2, ",", ".") ."</strong></li>
                </ul>"
        ?>


    </section>
</body>
</html>