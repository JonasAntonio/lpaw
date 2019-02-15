<?include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">Exercício 1</h3>
    <div class="text-center">
        <p>Elabore um programa em PHP que calcule a 
            média aritmética de	duas notas e exiba o resultado na	tela.
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio1.php" method="POST">
            <div class="col-md-12">
                <label for="a">A:</label>
                <input type="number" class="form-control" name="a" step="0.01"/> 
            </div>
            <div class="col-md-12">
                <label for="b">B:</label>
                <input type="number" class="form-control" name="b" step="0.01"/>
            </div>
            <br>
            <div class="col-md-12">
                <button type="submit" class="col-md-12 btn btn-success" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
    </div>
    
<?php

function calcularMedia($a, $b) {
    $media = ($a + $b)/2;
    return $media;
}

if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["a"])) {$a = $_POST["a"];} else {$a = 0;}
if(!empty($_POST["b"])) {$b = $_POST["b"];} else {$b = 0;}


if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <?=calcularMedia($a, $b);?>
    </div>
<?}?>
</div>
<?include_once "rodape.php"?>