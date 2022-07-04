<?php
$front=['html','css','javascript','react','vue','typescript','elm','angular','jquery','swift'];
$back=['python','ruby','php','java','c#','perl','c++','kotlin','javascript','scala'];

$quiero= ['jquery','express','html','css','javascript','spring','xamarin','angular','php','java','c#','python','visual basic',];

echo "diferencias que tiene frontend sobre los que quiero <br>";
print_r(array_diff($front,$quiero));
echo "diferencias que tiene los que quiero sobre frontend <br>";
print_r(array_diff($quiero,$front));
echo "<hr>";
echo "diferencias que tiene backend sobre los que quiero <br>";
print_r(array_diff($back,$quiero));
echo "diferencias que tiene los que quiero sobre backend <br>";
print_r(array_diff($quiero,$back));
echo "<hr>";
echo "diferencias que tienen backend, frontend y los que quiero <br>";
print_r(array_diff($back,$front,$quiero));
echo "diferencias que tienen frontend, backend y los que quiero <br>";
print_r(array_diff($front,$back,$quiero));
echo "diferencias que tienen los que quiero, backend y frontend  <br>";
print_r(array_diff($quiero,$back,$front));
echo "diferencias que tienen los que quiero, frontend y backend <br>";
print_r(array_diff($quiero,$front,$back));
echo "<hr>";
echo "Unir frontend y backend <br>";
print_r(array_merge($front,$back));
echo "Unir frontend, backend y los que quiero <br>";
print_r(array_merge($front,$back,$quiero));

echo "<hr>";