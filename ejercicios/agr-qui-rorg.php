<?php
$datos=['javascript','laravel','html','c','c#','c++','ruby','node','java','python','visual basic','assembly language','pascal','perl','angular','express','asp.net','spring','django','ionic','xamarin','php'
];
$cursos =[
    '37' => 'javascript',
    '10' => 'laravel',
    '8' => 'html',
    '9' => 'c',
    '3' => 'c#',
    '56' => 'c++',
    '24' => 'ruby',
    '38' => 'node',
    '92' => 'java',
    '61' => 'python',
    '74' => 'visual basic',
    '1' => 'assembly language',
    '100' => 'pascal',
    '48' => 'perl',
    '85' => 'angular',
    '50' => 'express',
    '60' => 'asp.net',
    '18' => 'spring',
    '1001' => 'django',
    '67' => 'ionic',
    '81' => 'xamarin',
    '57' => 'php'
];

echo "<hr>";
print_r($datos);

echo "<hr>";
echo "Quita el elemento del principio <br>";
$sobrante=array_shift($datos);
print_r($datos);
var_dump($sobrante);


echo "<hr>";
echo "Quita el elemento del final<br>";
$sobrante=array_pop($datos);
print_r($datos);
var_dump($sobrante);

echo "<hr>";
echo "Agrega el elemento del principio <br>";
$agp="Symphony";
echo"Se agrega $agp <br>";
array_unshift($datos, $agp);
print_r($datos);

echo "<hr>";
echo "Agrega el elemento del final <br>";
$agf="React";
echo"Se agrega $agf <br>";
array_push($datos, "React");
print_r($datos);

echo "<hr>";
echo "De key a value y de value a key <br>";
print_r(array_flip($cursos));

echo "<hr>";


