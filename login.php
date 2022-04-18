<?php
  include 'db.php';
  $pdo = getPDO();

  $stmt = $pdo->prepare('SELECT * FROM users WHERE name = :name AND password = :password');
  $stmt->execute([':name' => $_GET['name'], ':password' => $_GET['password']]);
  $result = $stmt->fetch();

  if ($result) {
    echo('ログイン成功');
    setcookie('user_id', $result['id']);
  } else {
    echo('パスワードが不正です');
  }
?>
<hr>
<a href="/members.php">会員専用ページへ</a>
<a href="/index.php">トップへ戻る</a>
