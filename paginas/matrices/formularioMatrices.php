<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO MATRICES</title>
</head>
<body>
    <!--Formulario para ingresar el numero de filas y columnas de las matrices-->
    <h3>FORMULARIO PARA INTRODUCIR DATOS</h3>
    <p>Programa que realiza la suma, resta, multiplicación y transpuesta de dos matrices, siempre y cuando, estas se puedan realizar.</p>
    <hr>
    <form action="calculoMatices.php" method = "POST">
        Introduce el número de filas de la matriz 1:
        <input type="number" name = "filasMatriz1">
        <br><br>
        Introduce el número de columnas de la matriz 1:
        <input type="number" name = "columnasMatriz1">
        <br><br>
        Introduce el número de filas de la matriz 2:
        <input type="number" name = "filasMatriz2">
        <br><br>
        Introduce el número de columnas de la matriz 2:
        <input type="number" name = "columnasMatriz2">
        <br><br>
        <INPUT TYPE="submit" VALUE="Calcular">
    </form>
</body>
</html>