<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Júlia";
        $sexo = "feminino";
        $idade = 24;

        if ($sexo == "feminino"  && $idade < 25) {
            echo "$nome, sua idade é $idade, ACESSO ACEITO";
        }
        else{
            echo "ACESSO NEGADO";
        }
    ?>
</body>
</html>