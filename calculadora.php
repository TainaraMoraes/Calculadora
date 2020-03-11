<?php
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];
    
    if($operacao=="soma")
        $resultado = $num1 + $num2;
    elseif($operacao=="subtracao")
        $resultado = $num1 - $num2;
    
    elseif($operacao=="multiplicacao")
        $resultado = $num1*$num2;
    
    else
        $resultado = $num1/$num2;
    echo "O resultado é: $resultado";
?>