<?php
$courses =[
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];
foreach ($courses as $key => $value) {
    echo "$value <br>";
}
echo"<hr>";
function upper($course, $key){
    echo strtoupper($course).": $key <br>";
}

echo "*uper<br>";
array_walk($courses, 'upper');
echo"<hr>";
echo "*array key exists<br>";
echo array_key_exists('frontend',$courses);
echo"<hr>";
echo "*in array<br>";
echo in_array('javascript',$courses);
echo"<hr>";
echo "*array keys<br>";
print_r(array_keys($courses));
echo"<hr>";
echo "*array values<br>";
print_r(array_values($courses));