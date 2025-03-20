<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valores Anterior e Posterior</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
        margin-top: 50px;
    }

    form {
        background: #f4f4f4;
        padding: 20px;
        display: inline-block;
        border-radius: 5px;
        margin: auto 0;
    }

    input,
    button {
        margin: 5px;
        padding: 10px;
        font-size: 16px;
    }

    .resultado {
        margin-top: 20px;
        font-weight: bold;
    }
    </style>
</head>

<body>

    <form method="post">
        <label for="num">Digite um número:</label>
        <input type="number" name="num" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (!empty($_POST["num"])) {
        $num = $_POST["num"];
        echo "<p class='resultado'>O valor anterior de $num é " . ($num - 1) . " e o posterior é " . ($num + 1) . ".</p>";
    }
    ?>

</body>

</html>