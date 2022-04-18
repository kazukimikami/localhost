<?php
function cross($a, $b, $c) {
  $answer = $a * $b * $c;
  return "${answer}<br>";
}
$a = cross(100, 100, 120);
echo ($a);

for ($x = 150; $x <= 170; $x++){
  echo "$x<br>";
}
?>
