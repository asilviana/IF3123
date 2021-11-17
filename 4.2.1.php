<?php
	$a = 3;
	$b = 5;
	
	$kelipatan = 1000;
	
	for ($i=1; $i<=1000 ; $i++ ) {
	  $hasil3 = $a*$i;
	  if ($hasil3 <= ($kelipatan - 1)){
	    echo $hasil3. " ";
	    $x[$i]=$hasil3;
	  } 
	}
	echo "\n";
	
	for ($i=1; $i<=1000 ; $i++ ) {
	  $hasil5 = $b*$i;
	  if ($hasil5 <= ($kelipatan - 1)){
	    echo $hasil5. " ";
	    $x[$i]=$hasil5;
	  } 
	}
foreach($x as $keseluruhan){
	  if(!in_array($keseluruhan, $y)){
	    $y[] = $keseluruhan;
	    sort($y);
	  }
	}
	
	

?>
