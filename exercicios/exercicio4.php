<?php include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">Exercício 4</h3>
    <div class="text-center">
        <p>Leia	um número e exiba seu sucessor.</p>
    </div>
    <div class="col-md-12">
        <form action="exercicio4.php" method="POST">
            <div class="col-md-12">
            <label for="num">Número</label>
            <input type="number" class="form-control" name="num"/>
            </div>
            <br>
            <div class="col-md-12">
                <button type="submit" class="col-md-12 btn btn-success" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
    </div>

<?php

if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["num"])) {$num = $_POST["num"];} else {$num = 0;}

function exibirSucessor($num) {
    return $num+=1;
}

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <?=exibirSucessor($num);?>
    </div>
<?php }?>

<?php include_once "rodape.php"?>