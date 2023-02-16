<?php
    if(isset($_POST["cadena"])){
        $cadena=$_POST["cadena"];
        $min=strtolower($cadena); //convierte a minusculas
        $may=strtoupper($cadena); //convierte a mayusculas
        $espa=str_replace(' ','',$min);
        $inv=strrev($espa);
        if(strcmp($espa,$inv)==0){
    echo "La cadena '$cadena' SI es palindromo, <a href='ejercicio1.php'>Retornar</a>";
        }
        else{
            echo "La cadena '$cadena' NO es palindromo, <a href='ejercicio1.php'>Retornar</a>";
        }
    }
?>