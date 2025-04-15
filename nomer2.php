<?php
$orang = [
    [
    'nama' => 'John Doe',
    'umur' => '25 tahun',
    'jenis_kelamin' => 'L'
    ],
    [
    'nama' => 'Jane Doe',
    'umur' => '30 tahun',
    'jenis_kelamin' => 'P'
    ],
    [
    'nama' => 'Bob Smith',
    'umur' => '20 tahun',
    'jenis_kelamin' => 'L'
    ]
];
function casting($orang){
    $hasilCasting=[];
    foreach($orang as $value){
        $value['umur']= (int) $value['umur'];
        $value['jenis_kelamin']=$value['jenis_kelamin'] == 'L'? 'Laki-laki' : 'Perempuan';
        $hasilCasting[]=$value;
    }
    return $hasilCasting;
}
$hasilCasting= casting($orang);
print_r($hasilCasting);