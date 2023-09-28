<!DOCTYPE html>
<html>
<head>
    <title>Verificação de idade</title>
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
</head>
<body>
    <h1 align="center">Posso Votar?</h1>

    <div class="m">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="idade">Sua idade:</label>
        <input type="number" id="idade" name="idade" required>
        <button type="submit">Verificar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $idade = intval($_POST["idade"]);

        if ($idade < 16) {
            $mensagem = "Você não pode votar.";
        } elseif ($idade >= 16 && $idade <= 18) {
            $mensagem = "O voto é facultativo.";
        } elseif ($idade >= 19 && $idade <= 65) {
            $mensagem = "O voto é obrigatório.";
        } else {
            $mensagem = "O voto é facultativo.";
        }

        echo "<p>$mensagem</p>";
    }
    ?>
    </div>
</body>
</html>