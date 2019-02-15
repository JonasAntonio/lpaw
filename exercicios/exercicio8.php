<?include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">EXERCÍCIO 08</h3>
    <div class="text-center">
        <p>
            Construa um algoritmo que leia o salário de 3 pessoas, 
            escreva o maior valor e a diferença percentual para o menor valor.
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio8.php" method="post">
            <div class="col-md-12">
                <label for="sal1">Salário 1:</label>
                <input type="number" class="form-control" name="sal1" step="0.01"/>
            </div>
            <div class="col-md-12">
                <label for="sal2">Salário 2:</label>
                <input type="number" class="form-control" name="sal2" step="0.01"/>
            </div>
            <div class="col-md-12">
                <label for="sal3">Salário 3:</label>
                <input type="number" class="form-control" name="sal3" step="0.01"/>
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

function calcularPorcentagem($maior, $menor) {
    if($maior != 0) {
        return ($menor * 100)/$maior;
    }
}

if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["sal1"])) {$sal1 = $_POST["sal1"];} else {$sal1 = 0;}
if(!empty($_POST["sal2"])) {$sal2 = $_POST["sal2"];} else {$sal2 = 0;}
if(!empty($_POST["sal3"])) {$sal3 = $_POST["sal3"];} else {$sal3 = 0;}
$ordenado = ordenar($sal1, $sal2, $sal3);
$maior = $ordenado[(count($ordenado)-1)];
$menor = $ordenado[0];
$diferença = calcularPorcentagem($maior, $menor);

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <p>Maior: <?=$maior?></p>
        <p>Diferença percentual: <?=$diferença?>%</p>
    </div>
<?}?>

</div>

<?include_once "rodape.php"?>