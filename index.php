<?php
include "class.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="shortcut icon" href="icone.png" />
    <link rel="stylesheet" href="style.css?v=1" />
    <title>IMC - Indice de massa corporea</title>
</head>
<body>

<div class="container">
    <form action="index.php" method="post">

    <div class="header">
        <h1 class="borda" title="Índice de Massa Corpórea">IMC</h1>
    </div>

    <div class="mb-3 borda">
        <div class="lb">
            <label for="at">Altura:</label>
        </div>
        <div class="lbDois">
            <input type="number" name="altura" class="config" id="at" min="0" max="3" step="0.01" placeholder="Metros" autofocus required value="<?php echo $_POST['altura'] ?? ""; ?>" />
        </div>
    </div>

    <div class="mb-3 borda">
        <div class="lb">
            <label for="ps" class="lb">Peso:</label>
        </div>
        <div class="lbDois">
            <input type="number" name="peso" class="config" id="ps" min="0" max="400" step="0.01" placeholder="Kg" required value="<?php echo $_POST['peso'] ?? ""; ?>" />
        </div>
    </div>

    <div class="mb-3">
        <input type="submit" class="config botao" onclick="imc.validar()" value="Calcular" />
    </div>
<?php
if (!empty($_POST)) {
    $a = $_POST['altura'];
    $p = $_POST['peso'];
    $pc = new Imc($p,$a);
    $resultado = $pc->calcular();
?>
    <div class="mb-3">
        
        <p class="ps">
            <?php
                echo $resultado
                     ."\n";
            ?>
        </p>
    </div>
<?php
}
?>
    </form>
</div>

<script src="java.js"></script>

</body>
</html>
