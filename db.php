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
?>
