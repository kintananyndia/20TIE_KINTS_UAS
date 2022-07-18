<?php

class tabung
{
    function luasVolume($r, $t)
    {
        echo "Phi : 3.14 <br>";
        echo "Jari - Jari : " . $r . "<br>";
        echo "Tinggi : " . $t . "<br>";

        $luas = 2 * 3.14 * $r * ($r + $t);
        $volume = 3.14 * $r * $r * $t;
        echo "Volume  tabung adalah  " . $volume . "<br>";
        echo "___________________________<br>";
        echo "Luas permukaan tabung adalah " . $luas . "<br>";
        echo "___________________________<br>";
    }

    function luasSelimut($r, $t)
    {
        $luasSelimut = 2 * 3.14 * $r * $t;
        echo "Luas Selimut Tabung adalah " . $luasSelimut . "<br>";
        echo "___________________________";
    }
}
