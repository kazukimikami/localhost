<?php 
function tashizan($a, $b) {
  $c = $a + $b;
  return "${c}<br>";
}
$a = tashizan(4, 5);
echo($a);
$a = tashizan(6, 5);
echo($a);
?>
