<?php include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">EXERCÍCIO 03</h3>
    <div class="text-center">
        <p>
            Elabore	um programa em PHP que compare três números inteiros e determine 
            qual o maior entre eles. Imprima os três números em ordem crescente e informe 
            o maior.	
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio3.php" method="post">
            <div class="col-md-12">
                <label for="num1">Número 1:</label>
                <input type="number" class="form-control" name="num1"/>
            </div>
            <div class="col-md-12">
                <label for="num2">Número 2:</label>
                <input type="number" class="form-control" name="num2"/>
            </div>
            <div class="col-md-12">
                <label for="num3">Número 3:</label>
                <input type="number" class="form-control" name="num3"/>
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

function ordenar($n1,$n2,$n3) {
    $ordem = array();
    if ($n1 < $n2){
        if ($n2 < $n3){
            $ordem = [$n1, $n2, $n3];
        } elseif ($n1 < $n3) {
            $ordem = [$n1, $n3, $n2];
        } else {
            $ordem = [$n3, $n1, $n2];
        }
    }else{
        if ($n2 < $n3){
            if ($n1 < $n3) {
                $ordem = [$n2, $n1, $n3];
            } else {
                $ordem = [$n2, $n3, $n1];
            }
        } else {
            $ordem = [$n3 ,$n2, $n1];
        } 
    }   
    return $ordem;
}


if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["num1"])) {$num1 = $_POST["num1"];} else {$num1 = 0;}
if(!empty($_POST["num2"])) {$num2 = $_POST["num2"];} else {$num2 = 0;}
if(!empty($_POST["num3"])) {$num3 = $_POST["num3"];} else {$num3 = 0;}
$ordenado = ordenar($num1, $num2, $num3);

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <p> Valores em ordem crescente: 
            <?=implode(', ', $ordenado)?>
        </p>
        <p>Maior: <?=$ordenado[(count($ordenado)-1)]?></p>
    </div>
<?php }?>

</div>

<?php include_once "rodape.php"?>