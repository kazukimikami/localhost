<?php
  function getPDO() {
    try {
      return new PDO(
        'mysql:dbname=hoge;host=localhost;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
      );
    } catch (PDOException $e) {
      header('Content-Type: text/plain; charset=UTF-8', true, 500);
      exit($e->getMessage());
    }
    // header('Content-Type: text/html; charset=utf-8');
  }

  $pdo = getPDO();

  $result = null;
  if ($_COOKIE && array_key_exists('user_id', $_COOKIE)) {
    $stmt = $pdo->prepare('SELECT * FROM users WHERE id = :id');
    $stmt->execute([':id' => $_COOKIE['user_id']]);
    $result = $stmt->fetch();
  }
?>

<?php if ($result) { ?>
  <h1>マイページ</h1>
  <a href="/logout.php">ログアウト</a>
<?php } else { ?>
  <h1>ログイン</h1>
  <form action="/login.php">
    お名前：<input name="name"></br>
    パスワード：<input name="password" type="password"></br>
    <button>ログインする</button>
  </form>

  <h1>会員登録</h1>
  <form action="/registration.php">
    お名前：<input name="name"></br>
    パスワード：<input name="password" type="password"></br>
    誕生日：<input name="birthday" type="date"></br>
    <button>会員登録する</button>
  </form>
<?php } ?>
