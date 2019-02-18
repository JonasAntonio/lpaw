<?php include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">Exercício 2</h3>
    <div class="text-center">
        <p>
            Elabore um programa em PHP que, a partir de um número inteiro e positivo, 
            escreva todos os seus divisores. Por exemplo: se o número for 6, os divisores 
            serão: 1, 2, 3 e 6. 
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio2.php" method="POST">
            <div class="col-md-12">
                <label for="num">Número:</label>
                <input type="number" class="form-control" name="num"/> 
            </div>
            <br>
            <div class="col-md-12">
                <button type="submit" class="col-md-12 btn btn-success" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
    </div>

    <?php
    function divisores($num) {
        $divisores = array();
        $i=1;
        for($i=1; $i<=$num; $i++) {
            if ($num % $i == 0) {
                $divisores[] = $i;
            }
        }
        return $divisores;
    }
    
    if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
    if(!empty($_POST["num"])) {$num = $_POST["num"];} else {$num = 0;}

    if(!empty($enviar)) {?>
        <br>
        <div class="col-md-12 text-center">
            <?=implode(', ', divisores($num))?>
        </div>
    <?php }?>
</div>

<?php include_once "rodape.php"?>