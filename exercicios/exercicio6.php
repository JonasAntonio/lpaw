<?include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">EXERCÍCIO 06</h3>
    <div class="text-center">
        <p>Ler dois números inteiros, x e y, e imprimir o quociente e o resto da divisão inteira entre eles.</p>
    </div>
    <div class="col-md-12">
        <form action="exercicio6.php" method="post">
            <div class="col-md-12">
                <label for="x">X:</label>
                <input type="number" class="form-control" name="x"/>
            </div>
            <div class="col-md-12">
                <label for="y">Y:</label>
                <input type="number" min="1" class="form-control" name="y"/>
            </div>
            <br>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <button type="submit" class="col-md-12 btn btn-success" name="enviar" value="enviar">Enviar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

<?php

function quocienteResto($x,$y) {
    if($y!=0) {
        return [
            "quociente" => $x/$y,
            "resto" => $x%$y
        ];
    }
}

if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["x"])) {$x = $_POST["x"];} else {$x = 0;}
if(!empty($_POST["y"])) {$y = $_POST["y"];} else {$y = 0;}
$resultado = quocienteResto($x,$y);

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <p>Quociente: <?=$resultado["quociente"]?></p>
        <p>Resto: <?=$resultado["resto"]?></p>
    </div>
<?}?>

</div>

<?include_once "rodape.php"?>