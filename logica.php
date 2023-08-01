<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logica PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h2>Formulario</h2>
        <form action="" method="post">
            <div class="mb-3">
                <label for="numero1">Numero 1</label>
                <input type="number" id="numero1" name="numero1" class="form-control">
            </div>
            <div class="mb-3">
                <label for="numero2">Numero 2</label>
                <input type="number" id="numero2" name="numero2" class="form-control">
            </div>
            <div class="mb-3">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control">
            </div>
            <button type="submit">Enviar</button>
        </form>
    </main>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];
        $nome = $_POST["nome"];
        echo ("<ol>");
        if ($nome != "") {
            echo ('<li>Meu nome é ' . $nome . '</li>');
        }

        if ($numero1 != "" && $numero2 != "") {
            $somar = $numero1 + $numero2;
            echo ('<li> Soma: ' . $somar . "</li>");
            
            $subtrair = $numero1 - $numero2;
            echo ('<li> Subtracao: ' . $subtrair . "</li>");           
            
            $dividir = $numero1 / $numero2;
            echo ('<li> Dividisao: ' . $dividir . "</li>");           
            
            $multiplicar = $numero1 * $numero2;
            echo ('<li> Multiplicação: ' . $multiplicar . "</li>");           
            
            $resto = $numero1 % $numero2;
            echo ('<li> Resto: ' . $resto . "</li>");           
        }

        echo ("</ol>");
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>