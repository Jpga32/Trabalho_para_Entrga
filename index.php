<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Cadastro de itens</h1>    
<hr>

<form action="" method="POST">

<article>

<label for="produto">Nome do Produto:</label>
<input type="text" id="produto" name="produto">

</article>

<?php
    $fabricante = ["Samsung","Asus","LG","Apple","Motorola"] ;
?>


<article>

<select>Selecione o fabricante abaixo:

<option> <?=$fabricante[0]?> </option>
<option> <?=$fabricante[1]?> </option>
<option> <?=$fabricante[2]?> </option>
<option> <?=$fabricante[3]?> </option>
<option> <?=$fabricante[4]?> </option>

</select>

</article>

</form>
</body>
</html>