<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Questão 01</title>
</head>
<style></style>
<body>

    <main>
        <h1>Sua média</h1>
        <p> 
            <?php 
                $nota1 = $_REQUEST["nota1"];
                $nota2 = $_REQUEST["nota2"];
                $nota3 = $_REQUEST["nota3"];
                $nota4 = $_REQUEST["nota4"];

                $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

                echo "A média das suas notas é $media";
            ?>
        </p>
    </main>    

</body>
</html>