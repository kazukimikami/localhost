<?php
  if ($_COOKIE && array_key_exists('stanby', $_COOKIE)) {
    if (!$_GET['name']) {
      echo('名前は必須です');
      exit;
    }
    if (!$_GET['birthday']) {
      echo('誕生日は必須です:(');
      exit;
    }
    include 'db.php';
    $pdo = getPDO();

    $stmt = $pdo->prepare('INSERT INTO users (name, password, birthday) VALUES (:name, :password, :birthday)');
    $result = $stmt->execute([
      ':name' => $_GET['name'],
      ':password' => $_GET['password'],
      ':birthday' => $_GET['birthday']
    ]);
    setcookie('stanby', null);
    echo '登録が完了しました';
  } else {
    echo '登録は完了しています';
  }
?>
<hr>
<a href="/index.php">トップへ戻る</a>
