<?php
for ($i=1; $i <=37 ; $i++) {
  $P=0;
  for ($j=1; $j<=$i ; $j++) {
    if ($i % $j == 0) {
      $P+=1;
    }
  }
  if($P<=2){
    echo $i.'<br>';
  }
}
 ?>
