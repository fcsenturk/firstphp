<?php

function ucgen($a){
    for ($b = 1; $b <= $a; $b++){
        echo "0"; echo "<br>";
        $c=$b;

            for ($e = 1; $e <= $c && $c<$a; $e++)
            echo "0"." ";

        
    }
}
ucgen(15)


?>