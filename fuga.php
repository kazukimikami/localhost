<?php
  $name = $_GET['name'];
  $birth = (int)DateTime::createFromFormat('Y-m-d', $_GET['birth-day'])->format('Y');
  // date('Y-m-d', $_GET['birth-day']);
  $today = (int)date("Y");
  $age = $today - $birth;
  echo("<div id='msg'>${name}さんは${age}才です</div>");
?>
<a href="/hoge.php">fuga</a>
<script>
a = 3;
b = 5;
console.log('a + bは' + (a + b) + 'です');
setTimeout(function(){
  document.querySelector('#msg').innerText = 'ほげーーー';
}, 1000)
</script>
