<?php
$host = 'localhost';
$dbname = 'consumer';
$user = 'root';
$password = 'root';

// セッションからデータを取得
$name = $_POST['name'] ?? '';
$huri = $_POST['huri'] ?? '';
$mail = $_POST['mail'] ?? '';
$tell = $_POST['tell'] ?? '';
$choice = $_POST['choice'] ?? '';
$message = $_POST['message'] ?? '';
$check = $_POST['check'] ?? false;

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$dbname;charset=utf8",
        $user,
        $password,
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // テーブルが存在する場合は削除
    $pdo->exec("DROP TABLE IF EXISTS toiawase");

    // テーブルの作成
    $pdo->exec(
        "CREATE TABLE toiawase (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(128),
            huri VARCHAR(128),
            mail VARCHAR(128),
            tell VARCHAR(11),
            message TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )"
    );

    // データの挿入
    $stmt = $pdo->prepare(
        "INSERT INTO toiawase (name, huri, mail, tell, message) VALUES (?, ?, ?, ?, ?)"
    );
    $stmt->execute([$name, $huri, $mail, $tell, $message]);

    // 完了ページへリダイレクト

} catch (PDOException $e) {
    echo $e->getMessage() . '<br>';
    exit;
  }


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="contact.css">
  <title>Document</title>
</head>
<body>
  <header>
    <h1>ここには会社名が入ります</h1>
    <div class="btn">    
      <a href="#" class="red">ボタン01</a>
      <a href="#" class="gre">ボタン02</a>
    </div>
  </header>
  <div class="wrapper">
    <div class="menu">
      <a href="#" class="menu1">メニュー01</a>
      <a href="#" class="menu1">メニュー02</a>
      <a href="#" class="menu1">メニュー03</a>
    </div>
  </div>
  <img src="mv.png" alt="PC">
  <div class="sec1">
    <h1>お問い合わせ</h1>
    <div class="sousin">
      <p>送信されました</p>
    </div>
  </div>
  <div class="field">
    <div class="btn2">
      <h3>こちらからご購入ください</h3>
      <a href="#" class="red">ネットショップ</a>
    </div>
    <div class="btn2">
      <h3>お気軽にお問い合わせください</h3>
      <a href="#" class="gre">お問い合わせ</a>
    </div>
  </div>
  <div class="spece">    
    <div class="bold">
      <p>ここには会社名が入ります</p>
    </div>
    <p>住所が入ります<br>
    03-1234-5678 <br>
    営業時間：9:00～18:00</p>
  </div>
  <div class="link">
    <div class="flex">
      <a href="#" class="li">リンク01</a>
      <a href="#" class="li">リンク02</a>
      <a href="#" class="li">リンク03</a>
      <a href="#" class="li">リンク04</a>
      <a href="#" class="li">リンク05</a>
      <a href="#" class="li">リンク06</a>
    </div>
    <div class="column">
        <a href="#" class="li">リンク07</a>
    </div>
  </div>
  <footer>
    <p>ここには会社名が入ります©Copyright.</p>
  </footer>
</body>
</html>