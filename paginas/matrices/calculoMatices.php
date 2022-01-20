<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULO MATRICES</title>
</head>
<body>
    <h3>OPERACIONES DE LA MATRICES</h3>
    <p>Programa que realiza la suma, resta, multiplicación y transpuesta de dos matrices, siempre y cuando, estas se puedan realizar.</p>
    <hr>
    <?php

    /**
     * Funcion que llena una matriz con numeros aleatorios.
     * $filas: Numero de filas que tendra la matriz.
     * $columnas: Numero de columnas que tendra la matriz.
     * $matriz: Matriz resultante, despues de llenar con numeros aleatorios.
     */
    function llenarMatriz($filas, $columnas) {
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                $matriz[$i][$j] = rand(1, 20);
            }
        }
        return $matriz;
    }

    /**
     * Funcion que muestra una matriz en pantalla.
     * $matrizImprimir: Matriz a imprimir.
     * $filas: Numero de filas de la matriz.
     * $columnas: Numero de columnas de la matriz.
     */
    function imprimirMatriz($matrizImprimir, $filas, $columnas) {
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                echo "[".$matrizImprimir[$i][$j]."] " ;
            }
            echo "<br>";
        }
    }

    /**
     * Funcion que calcula la matriz transpuesta.
     * $matrizTranspuesta: Matriz transpuesta.
     * $filas: Numero de filas de la matriz.
     * $columnas: Numero de columnas de la matriz.
     */
    function calcularMatrizTranspuesta($matrizTranspuesta, $filas, $columnas) {
        for ($i = 0; $i < $filas; $i++) {
            for ($j = 0; $j < $columnas; $j++) {
                echo "[".$matrizTranspuesta[$j][$i]."] " ;
            }
            echo "<br>";
        }
    }

    //Recibe los parametros mandamos por el metodo POST.
    $filasMatriz1 = $_REQUEST['filasMatriz1'];
    $columnasMatriz1 = $_REQUEST['columnasMatriz1'];
    $filasMatriz2 = $_REQUEST['filasMatriz2'];
    $columnasMatriz2 = $_REQUEST['columnasMatriz2'];

    echo "Matriz 1 de $filasMatriz1 x $columnasMatriz1 <br>";
    $matriz1 = llenarMatriz($filasMatriz1, $columnasMatriz1);
    imprimirMatriz($matriz1, $filasMatriz1, $columnasMatriz1);

    echo "Matriz 2 de $filasMatriz2 x $columnasMatriz2 <br>";
    $matriz2 = llenarMatriz($filasMatriz2, $columnasMatriz2);
    imprimirMatriz($matriz2, $filasMatriz2, $columnasMatriz2);

    //Condicion que comprueba que tanto la suma, como la resta se puedan hacer.
    if ($filasMatriz1 == $filasMatriz2 && $columnasMatriz1 == $columnasMatriz2) {
        $sePuede = true;
    } else {
        $sePuede = false;
    }

    if ($sePuede) {
        //Realiza la suma
        for($i = 0; $i < $filasMatriz1; $i++){
            for($j = 0; $j < $columnasMatriz1; $j++){
                   $matrizSumada[$i][$j] = $matriz1[$i][$j] + $matriz2[$i][$j];
             }
        }
        echo "Resultado de la suma: <br>";
        imprimirMatriz($matrizSumada, $filasMatriz1, $columnasMatriz1);

        //Realiza la resta
        for($i = 0; $i < $filasMatriz1; $i++){
            for($j = 0; $j < $columnasMatriz1; $j++){
                   $matrizRestada[$i][$j] = $matriz1[$i][$j] - $matriz2[$i][$j];
             }
        }
        echo "Resultado de la resta: <br>";
        imprimirMatriz($matrizRestada, $filasMatriz1, $columnasMatriz1);        
    } else {
        echo "La suma no se puede realizar porque las matrices no son del mismo orden.<br>";
        echo "La resta no se puede realizar porque las matrices no son del mismo orden.<br>";
    }

    //Condicion que comprueba que la multiplicacion se pueda hacer
    if ($columnasMatriz1 == $filasMatriz2) {
        $sePuede = true;
    } else {
        $sePuede = false;
    }

    if ($sePuede) {
        //Realiza la multiplicacion
        for ($i = 0; $i < $columnasMatriz2; $i++) {
            for ($j = 0; $j < $filasMatriz1; $j++) {
                $suma = 0;
                for ($k = 0; $k < $columnasMatriz1; $k++) {
                    $suma += $matriz1[$j][$k] * $matriz2[$k][$i];
                }
                $matrizProducto[$j][$i] = $suma;
            }
        }
        echo "Resultado de la multiplicación: <br>";
        imprimirMatriz($matrizProducto, $filasMatriz2, $columnasMatriz2);  
    } else {
        echo "La multiplicacion no se puede realizar porque el número de columnas de la primera matriz debe coincidir con el número de filas de la segunda matriz.<br>";
    }

    echo "Matriz Transpuesta 1: <br>";
    calcularMatrizTranspuesta($matriz1, $filasMatriz1, $columnasMatriz1);
    echo "Matriz Transpuesta 2: <br>";
    calcularMatrizTranspuesta($matriz2, $filasMatriz2, $columnasMatriz2);

    ?>
</body>
</html>