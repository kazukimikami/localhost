<script>
let aaa = confirm('タイトルを変更しますか？');
if (aaa) {
  let bbb = 　prompt('新しいタイトルを入力してください');
  alert('3秒後に変わります');
  setTimeout(function(){
    document.querySelector('h1').innerText = bbb;
  }, 3000);
}

</script>
