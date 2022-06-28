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
?>
