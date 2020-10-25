<?php
    if ($_POST['radio1'] == "suma") {
        $suma = $_REQUEST['Valor1'] + $_POST['Valor2'];
        echo "La suma es: " . $suma;
    }
    if($_POST['radio1']== "resta"){
        if($_POST['Valor1']>$_POST['Valor2']){
            $resta=$_POST['Valor1'] - $_POST['Valor2'];
            echo "La resta es: " . $resta;
        } else{
            $resta=$_POST['Valor2'] - $_POST['Valor1'];
            echo "La resta es: " . $resta;
        }
    }
    if($_POST['radio1']== "multiplicar"){
        $multiplicar=$_POST['Valor1']* $_POST['Valor2'];
        echo "La multiplicación es: " . $multiplicar;
    }
    if($_POST['radio1']== "division"){
        $div=$_POST['Valor1']/ $_POST['Valor2'];
        echo "La división es: " . $div;
    }
?>