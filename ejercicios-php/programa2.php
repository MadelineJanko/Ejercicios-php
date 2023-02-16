<?php
    if(isset($_GET["n1"]) && isset($_GET["n2"])){
    $n1=$_GET["n1"];
    $n2=$_GET["n2"];
    $s=0;
    $n=1;
    $z=0;
    $m=1;
    while($n<$n1){
        if($n1%$n==0){
            $s=$s+$n;
        }
        $n=$n+1;
    }
    if($s==$n2){
        while($m<$n2){
            if($n2%$m==0){
                $z=$z+$m;
            }
            $m=$m+1;
        }
        if($z==$n1){
            echo "El numero '$n1' y '$n2' son amigos, <a href='ejercicio2.php'>Retornar</a>";
        }
        else{
            echo "El numero '$n1' y '$n2' no son amigos, <a href='ejercicio2.php'>Retornar</a>";
        }
    }
    else{
        echo "El numero '$n1' y '$n2' no son amigos, <a href='ejercicio2.php'>Retornar</a>";
    }
    }?>