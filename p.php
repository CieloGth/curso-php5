<?php
    $dato ='Estudio PHP';
    var_dump($dato);
    echo  "<br>";
    echo $dato[0]. "<br>";
    echo $dato[2]. "<br>";
    echo $dato[4]. "<br>";
    echo $dato[6]. "<br>";
    echo $dato[8]. "<br>";
    echo $dato[10]."<br>";

    $pos="Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore dolorem exercitationem reiciendis, eaque ducimus sapiente corrupti sed id ab quae architecto autem quas rerum corporis debitis unde nihil, totam eius.<br>";
    echo  "<br>";
    var_dump($pos);
    echo  "<br>";
    $extraer=substr($pos,0,100);
    var_dump($extraer);
    echo  "<br>";
    echo"$extraer...[ver mas]  <br>";

    $data ="JavaScript, PHP, Laravel, JQuery, Node";
    $tags = explode(', ', $data);
    echo  "<br>";
    var_dump($tags);
    echo  "<br>";

    $course = " Curso de PHP ";
    $course = ltrim($course);
    echo "<pre>";
    echo "Quiero aprender $course, y otr texto";
    echo "</pre>";

    //alterar
    $text ="pHp es un LenGuaJe";
    echo $text. "<br>";
    echo strtolower($text)."<br>";
    echo strtoupper($text)."<br>";
    echo ucfirst($text)."<br>";
    echo lcfirst($text)."<br>";
    
    echo  "<br>";
    echo "<hr>";
    echo  "<br>";

    //reemplazar
    $slug = str_replace(' ', '-', $text);
    echo $slug ."<br>";

    echo  "<br>";
    echo "<hr>";
    echo  "<br>";

    //modificacion 
    $code =39;
    echo $code ."<br>";
    echo str_pad($code, 8, "#") ."<br>";
    $etiqueta= "<h1>".$text."</h1>";
    echo $etiqueta;
    echo strip_tags($etiqueta);

    echo  "<br>";
    echo "<hr>";
    echo  "<br>";

    $palabra = "El padre le guiñó un ojo al hijo al ver el ñandú que veía en sus sueños y teñía la añoranza de verlo. Cuando el jarrón cayó se hizo añicos y el ñandú voló.";

    echo strtoupper($palabra)."<br>";
    echo "<br>";
    echo mb_strtoupper($palabra)."<br>";
    echo "<br>";
    

    echo  "<br>";
    echo "<hr>";
    echo  "<br>";

?>
