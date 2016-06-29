<?php

echo 'Juego Vida';
echo '</br>';

$arreglo[0]=array(0,0,0,0,0,0);
$arreglo[1]=array(0,0,0,0,0,0);
$arreglo[2]=array(0,0,1,1,0,0);
$arreglo[3]=array(0,0,0,1,1,0);
$arreglo[4]=array(0,0,0,1,0,0);
$arreglo[5]=array(0,0,0,0,0,0);

for($i=0;$i<10;$i++) {
    imprime_array($arreglo);
    $arreglo=arreglo($arreglo);//print_r(arreglo($arreglo));

}

function pinta($num){
if($num==1){
    return '<td bgcolor="black">'.$num.'</td>';
}else{
    return '<td>'.$num.'</td>';
}

}//fin funcion pinta

function imprime_array($arr){
    $sum=0;
    $todos=0;

    echo '<table border="2">';

    for($i=0;$i<count($arr);$i++) {
        $c=0;
        $a = $arr[$i];
        echo '<tr>';
        for ($j = 0; $j < count($arr); $j++) {
            echo pinta($a[$j]);
            if ($a[$j] == 1) {
                $sum++;
            }
            $todos++;
        }
        echo '</tr>';
    }

    echo '</table>';

    echo $sum.'</br>';
}//fin imprime array

function arreglo($arreglo1){
    $c=0;

    $nuevoArreglo=array();

for($i=0;$i<(count($arreglo1));$i++) {
    for ($j = 0; $j < (count($arreglo1)); $j++) {

        $tamArr=count($arreglo1);

        $c1=($i-1<0)?null:$arreglo1[$i - 1][$j];
        
        if($i==0){
                $c2 = 0;
        }else{
            if($j==0){
                $c2=0;
            }else{
            $c2=$arreglo1[$i - 1][$j - 1];
            }
        }

        if($i==0){
             $c3=0;
        }else{
            if($j+1==$tamArr){
                $c3=0;
            }else {
                $c3 = $arreglo1[$i - 1][$j + 1];
            }
        }

        $c4=($j-1<0)?null:$arreglo1[$i][$j - 1];

        $c5=($j+1>=$tamArr)?null:$arreglo1[$i][$j + 1];

        if($i+1>=$tamArr){
            $c6=0;
        }else{
            if($j!=0){
                $c6=$arreglo1[$i + 1][$j - 1];
            }else{
                $c6=0;
            }
        }

        $c7=($i+1>=$tamArr)?null:$arreglo1[$i + 1][$j];

        if($i+1==$tamArr){
            $c8=0;
        }else{
            if($j+1==$tamArr){
                $c8=0;
            }else{
                $c8=$arreglo1[$i + 1][$j + 1];
            }
        }

        $c =  $c1+ $c2 + $c3 +
                $c4 + $c5 +
                $c6 + $c7 + $c8;

        $nuevoArreglo[$i][$j]=nuevoValor($c,$arreglo1[$i][$j]);

    }
}

    return $nuevoArreglo;
}//fin funcion arreglo

function nuevoValor($cont,$val){
    $newValor=0;
    if($cont<2 || $cont >3){
        $newValor=0;
    }else if($cont==3){
        $newValor=1;
    }else{
        $newValor=$val;
    }

    return $newValor;
}

function contador($ar,$o,$ab){
    $contador=0;
    if($ar != null){
        if($ar==1){
        $contador++;
        }
    }
    if($o==1){
        $contador++;
    }
    if($ab != null){
        if($ab==1){
            $contador++;
        }
    }

    return $contador;
}//fin funcion contador

?>