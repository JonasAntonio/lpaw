<?php include_once "cabecalho.php"?>
<div class="container">
    <h3 class="text-center">EXERCÍCIO 07</h3>
    <div class="text-center">
        <p>
            Construa um algoritmo para entrar com um número de 1 a 10 e imprimi-lo o número de vezes correspondente ao seu valor.	
        </p>
    </div>
    <div class="col-md-12">
        <form action="exercicio7.php" method="post">
            <div class="col-md-12">
                <label for="num">Número:</label>
                <input type="number" min="1" max="10" class="form-control" name="num"/>
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

function imprime($num) {
    $numeros = array();
    for ($i=1; $i <= $num; $i++) {
        $numeros[] = $num;
    }

    return $numeros;
}

if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["num"])) {$num = $_POST["num"];} else {$num = 0;}

if(!empty($enviar)) {?>
    <br>
    <div class="col-md-12 text-center">
        <!-- Usando Array -->
        <p>
            <?=implode(", ", imprime($num))?>
        </p>
        <!-- Usando Laço -->
        <!-- <?for ($i=1; $i <= $num; $i++) { ?>
            <p><?=$num?></p>  
        <?}?> -->
    </div>
<?php }?>

</div>

<?php include_once "rodape.php"?>