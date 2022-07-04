<?php
    $front=['html','css','javascript','react','vue','typescript','elm','angular','jquery','swift'];
    $back=['python','ruby','php','java','c#','perl','c++','kotlin','javascript','scala'];
    
    $quiero= ['jquery','express','html','css','javascript','spring','xamarin','angular','php','java','c#','python','visual basic',];

    echo "<hr>";
echo "Unir frontend y backend <br>";
print_r(array_merge($front,$back));
echo "Unir frontend, backend y los que quiero <br>";
print_r(array_merge($front,$back,$quiero));

    $front1=[
        "a"=>'html',
        "b"=>'css',
        "c"=>'javascript',
        "d"=>'react',
        "e"=>'vue',
        "f"=>'typescript',
        "g"=>'elm',
        "h"=>'angular',
        "i"=>'jquery',
        "j"=>'swift'
    ];
    $back1=[
        "a"=>'python',
        "b"=>'ruby',
        "c"=>'php',
        "d"=>'java',
        "e"=>'c#',
        "f"=>'perl',
        "g"=>'c++',
        "h"=>'kotlin',
        "i"=>'javascript',
        "j"=>'scala'
    ];
    echo "Unir recursivo frontend1 y backend1 <br>";
    print_r(array_merge_recursive($front1,$back1));

    echo "<hr>";
    $len=['html','css','react','php','sql'];
    $cat=['frontend','style','framework','bakcend','base de datos'];
    echo "combinar <br>";
    print_r(array_combine($cat,$len));