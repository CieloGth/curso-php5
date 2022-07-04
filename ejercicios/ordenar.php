<?php
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

echo"<pre>";
var_dump($cursos);

echo "<hr>";
echo "ordenar alfabeticamente <br>";
// sort($cursos);
// var_dump($cursos);

echo "<hr>";
echo "ordenar alfabeticamente de reversa <br>";
// rsort($cursos);
// var_dump($cursos);

echo "<hr>";
echo "ordenar por numero <br>";
// ksort($cursos);
// var_dump($cursos);

echo "<hr>";
echo "ordenar por numero de reversa  <br>";
// krsort($cursos);
// var_dump($cursos);

echo "<hr>";
echo "empezar dede el array 9 <br>";
var_dump(array_slice($cursos,9));

echo "<hr>";
echo "acomodar de 5 en 5 <br>";
var_dump(array_chunk($cursos,5));
