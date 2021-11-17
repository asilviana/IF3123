<?php
$jk = "l";
$u = 21;
$bb = 170;

if ($jk == "p") {
  if ($u >=21 && $bb > 150) {
    echo "Obat 1";
  }
  if ($u >= 21 && $bb<150) {
    echo "obat 2";
  }
  if ($u <= 21 && $bb >150) {
    echo "obat 2";
  }
  if ($u <= 21 && $bb < 150){
    echo "Obat 3";
  }
} 

if($jk == "l"){
  if ($u <=21 && $bb < 150) {
    echo "Obat 1";
  }
  if ($u !=21 && $bb < 150) {
    echo "Obat 3";
  }
  else{
    echo "data salah";
  }
}else {
  echo "Masukan data dengan Benar! ";
}

?>
