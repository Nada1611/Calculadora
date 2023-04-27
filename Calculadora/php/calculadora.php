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

<center>
<!--Começo-->

<fieldset>
<form action="calc.php" name="form" id="calc" method="post">
<fieldset>
<!--Números-->
<label> Número 1:
<input type="text" name="N1">
</label>
<label> Número 2:
<input type="text" name="N2">
</label>
<!--Operação-->
</fieldset>
<br>
<input type="submit" name="bt" value="+">
<input type="submit" name="bt" value="-">
<input type="submit" name="bt" value="*">
<input type="submit" name="bt" value="/">
<br>
<br>
<!--Botão reset-->
<input type="reset" name="reset" value="Cancelar"><br>
</center>
</form>
</fieldset>
</body>
</html>