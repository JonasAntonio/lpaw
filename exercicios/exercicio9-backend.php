<?php


if(isset($_POST["enviar"])) $enviar = $_POST["enviar"];
if(!empty($_POST["nota"])) {$nota = $_POST["nota"];} else {$nota = 0;}
if(!empty($enviar)) {

}



function calcular($num) {
    //moedas de 0,01, 0,05, 0,10, 0,25, 0,50, 1,00
    switch($nota){
        case 2:

            break;
        case 5:
                
            break;
        case 10:
                
            break;
        case 20:
        
            break;
        case 50:
                
            break;
        case 100:
                
            break;
        default:
            
            break;
        }
}


function calcularNotas($nota) {
    
}
