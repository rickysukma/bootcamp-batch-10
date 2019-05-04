<?php

$data = [['a','c','b','e','d'],[
    'g','e','f'
]];

$datalain = [['g','h','i','j'],['a','c','b','e','d'],['g','e','f']];

// function sort_data($data){
//     foreach ($data as $value) {
        
//     }
// }

echo array_multisort($data,SORT_ASC);