<?php

$a = "Basa basi aja";

$reverse = explode(' ', $a);
echo "Metode penggunaan fungsi pada php :". strrev($a). "\n ";

echo "Metode menggunakan Array :";
foreach (array_reverse($reverse) as $balik){
  echo " ". strrev($balik)."";
}

?>
