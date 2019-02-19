<?php include_once("cabecalho.php");?>

<div class="container">
    <h3 class="text-center">Exercício 9</h3>
    <div class="text-center">

    </div>
    <div class="col-md-12">
        <form action="exercicio9-backend.php" method="POST">
            <div class="col-md-12">
                <label for="nota">Nota:</label>
                <input type="number" class="form-control" name="nota" min=2 max=100/> 
            </div>
            <div class="col-md-12">
                <label for="quantidade">Quantidade:</label>
                <input type="number" class="form-control" name="quantidade"/> 
            </div>
            <br>
            <div class="col-md-12">
                <button type="submit" class="col-md-12 btn btn-success" name="enviar" value="enviar">Enviar</button>
            </div>
        </form>
    </div>

<?php include_once("rodape.php");?>