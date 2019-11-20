<?php
$input_line = trim(fgets(STDIN));
$s=explode(" ",$input_line);
$N=$s[0];
$M=$s[1];
for ($i = 0; $i < $N; $i++){
  $a=trim(fgets(STDIN));
  $a=explode(" ",$a);
  $total=$a[0]-($a[1]*5);
  if($total>=$M){
    echo "合格"."\n"; 
  }
}
  

?>
