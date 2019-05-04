<?php
$biodata = array(   'name'      =>  'Ricky Sukma Dewa',
                    'address'   =>  'Yogyakarta',
                    'hobbies'   => array ('Sleep','Sleep','Sleep'),
                    'school'    =>  array(  'highSchool' => 'SMK Dr. Soetomo Cilacap',
                                            'university' => 'Amikom Yogyakarta'),
                    'skills'    =>  array(  0 => 'Photoshop',
                                            1 => 'Corel',
                                            2 => 'PHP')
                    );
                    
$jsonBiodata = json_encode($biodata);
print($jsonBiodata);
