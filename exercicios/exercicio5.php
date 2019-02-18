<?php include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">EXERCÍCIO 05</h3>
    <div class="text-center">
        <p>
            Calcular a média final dadas as notas das 3 provas e produzir uma saída com a 
            média e a situação do aluno de acordo com o seguinte critério: média >= 7, 
            aprovado; 5 < média < 7, recuperação; média < 5, reprovado.
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio5.php" method="post">
            <div class="col-md-12">
                <label for="nota1">Nota 1:</label>
                <input type="number" class="form-control" name="nota1" step="0.01" min="0" max="10"/>
            </div>
            <div class="col-md-12">
                <label for="nota2">Nota 2:</label>
                <input type="number" class="form-control" name="nota2" step="0.01" min="0" max="10"/>
            </div>
            <div class="col-md-12">
                <label for="nota3">Nota 3:</label>
                <input type="number" class="form-control" name="nota3" step="0.01" min="0" max="10"/>
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
if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["nota1"])) {$nota1 = $_POST["nota1"];} else {$nota1 = 0;}
if(!empty($_POST["nota2"])) {$nota2 = $_POST["nota2"];} else {$nota2 = 0;}
if(!empty($_POST["nota3"])) {$nota3 = $_POST["nota3"];} else {$nota3 = 0;}

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <?=calcularNotas($nota1, $nota2, $nota3);?>
    </div>
<?php }

function calcularNotas($n1,$n2,$n3) {
    $media = ($n1+$n2+$n3)/3;

    if($media < 5) {
        return "Reprovado";
    } elseif($media < 7) {
        return "Recuperação";
    } else {
        return "Aprovado";
    }
    
}
?>

</div>

<?php include_once "rodape.php"?>