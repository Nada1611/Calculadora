<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet"  href="css/calc.css">
    <link rel="shortcut icon" href="assets/icone.png" type="imagem">
</head>
<body>

<div id="op">

<?php

if (isset($_POST["bt"])){  
$N1 = $_POST["N1"];
$N2 = $_POST["N2"];
$OP = $_POST["bt"];

switch($OP){

    case '+':
        $res= $N1 + $N2;
        break;
        case '-':
            $res= $N1 - $N2;
            break;
            case '*':
                $res= $N1 * $N2;
                break;
                case '/':
                    $res= $N1 / $N2;
                    break;

}



echo "<br><h2> O resultado da op ($OP) é = $res </h2>";



}

?>
</div>
</body>
</html>