<?php

function cetak($int){
    for($i = 1; $i <= $int; $i++){
        for($j = 1; $j <= $int; $j++ ){
            if($j == 1){
                echo '* ';
            }elseif($j == 5){
                echo '* ';
            }elseif($i == 3){
                echo '* ';
            }else{
                echo '= ';
            }
        }
        echo '<br>';
    }
}

cetak(5);