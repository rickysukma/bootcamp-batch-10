<?php

function cetak($loop)
{
    for ($i = 0; $i < $loop; $i++) {
        if($i == 0){
            $cetak[$i] = substr(sha1(rand()), 0, 32);
        }else{
            $key = substr(sha1(rand()), 0, 32);
            if(in_array($key,$cetak)){
                array_pop($cetak);
                $cetak[$i] = 'Data has duplicated ';
                
            }else{
                $cetak[$i] = $key;
            }
        }
         
    }
    return $cetak;
}

print_r(cetak(5));