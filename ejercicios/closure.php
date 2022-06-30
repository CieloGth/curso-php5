<?php
    $greet = function($name) //variable que requiere logica
    {
        return "Hola, $name";
    };
    echo $greet('cielo');

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    function greet (Closure $lang, $name ){
        return $lang($name);
    }
    $es= function($name){return "Hola $name! en Español";};
    $in= function($name){return "Hello $name! en Ingles";};
    $fr= function($name){return "Salut $name! en Frances";};
    $ch= function($name){return "你好 (Nǐ hǎo) $name! en Chino";};
    $po= function($name){return "Olá $name! en Portuges";};
    $it= function($name){return "Ciao $name! en Italiano";};
    $al= function($name){return "Hallo $name! en Aleman";};
    $ja= function($name){return "こんにちは (Kon'nichiwa) $name! en Japones";};
    $ru= function($name){return "Привет (Privet) $name! en Ruso";};
    $ir= function($name){return "Dia dhuit $name! en Irlandes";};
    $ar= function($name){return "مرحبا (marhaban) $name! en Arabe";};
    $ru= function($name){return "Buna ziua $name! en Rumano";};
    $ga= function($name){return "Ola $name! en Gallego";};
    $ta= function($name){return "สวัสดี (S̄wạs̄dī) $name! en Tailandes";};
    $pe= function($name){return "سلام $name! en Persa";};
    
    echo greet($es,'Cielo');

    echo "<br>";
    echo "<hr>";
    echo "<br>";

    $id =[$es,$in,$fr,$ch, $po, $it, $al, $ja, $ru, $ir, $ar, $ru, $ga, $ta, $pe];

    foreach ($id as $key => $value) {
        echo greet($value,'Cielo')." <br>";
    }

?>