<?php
//コメントの入力方法

/*
複数行に分けたい時はこちらを使う
コメントは自分のメモ書きとしてや
他人に見せてどういう意図で動かしてるかを示すために使う
*/

//変数の代入方法
$a = 10;
$b = 30;
$a += 10;
//文字列の最後にはセミコロン(;)

/*
出力するときはecho クォーテーション('')
文字列を結合するときはドット(.)
変数は一番最後に代入した結果がechoされる
改行するには<br>、しないと連続で文字列が表示される
下記は２つとも同じ意味で
20行目のダブルクォーテーション("")に変数を入れると変数展開という
見やすくするために文字列の間にはスペースを入れたほうがいい
*/
echo 'a=' . $a;
echo '<br>';
echo "a=$a";
echo '<br>';
echo 'b=' . $b;
echo '<br>';

//複数のデータを一つの変数で使いたい場合には配列を使う
$c = array(
  'りんご',
  'ごりら',
  'らっぱ'
);
echo $c[0];
echo '<br>';
/*
変数の隣にある数字はインデックスと呼ばれ、先頭から０、１、２となる
また、次の宣言でも上記と同じ意味になる
*/
$d = [
  'りんご',
  'ごりら',
  'らっぱ'
];
echo $d[2];
echo '<br>';

/*
インデックスは通常数字で配列にアクセスするが特定の文字列にして
アクセスすることもできる
これを連想配列という
*/
$a = array(
  'win'   => 'あなたの勝ちです！',
  'lose'  => 'あなたの負けです。',
  'even'  => '引き分けです。'
);
echo $a['win'];
echo '<br>';

//データの演算をする場合、演算子を使う
$nyan = 100;
//足し算
echo $nyan + 100;
echo '<br>';
//引き算
echo $nyan - 100;
echo '<br>';
//掛け算
echo $nyan * 100;
echo '<br>';
//割り算
echo $nyan / 100;
echo '<br>';
//余剰(割り算の余り)
echo $nyan % 7;
echo '<br>';

/*
PHPでは、比較演算子を使用する。
比較演算子とは、2つの値を比較して等しければAを実行、等しくないならBを実行
といった具合に次の処理を決めること。
echoでは出力される内容は値だけだが、var_dumpを使えば値と型を
知ることができる。
*/
//等しい、等しくない
var_dump($nyan == 100);
echo '<br>';
var_dump($nyan != 100);
echo '<br>';
//(型も含めて)等しい、等しくない
var_dump($nyan === 100);
echo '<br>';
var_dump($nyan !== 'にゃん');
echo '<br>';
//より大きい、小さい
var_dump($nyan > 101);
echo '<br>';
var_dump($nyan < 101);
echo '<br>';
//より大きいか等しい、より小さいか等しい
var_dump($nyan >= 101);
echo '<br>';
var_dump($nyan <= 100);
echo '<br>';

/*
条件分岐(if文)
結果がtrueならechoで出力されるがelseなら出力しない
など、処理を選択できる
*/
$weight = 80;
if($weight >= 90){
  echo 'あなたは少々太りすぎているようです。';
}else{echo 'あなたは健康的な体重です。';
}
echo '<br>';

/*
ループ処理(for文)
決まった回数分処理を繰り返したい場合に使う
*/
for($val = 1; $val <= 10; $val++){
  echo $val;
}
echo '<br>';

/*
ループ処理(while文)
指定した処理がtrueになるまで処理を繰り返し行いたい時に使う
*/









?>
<hr>
<a href="/hoge.php">こちら</a>
