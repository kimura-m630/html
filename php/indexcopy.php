<?php
session_start();
$errors = [];
$submitted = false;

// 初期値設定
$name = $huri = $mail = $tell  = $message = '';
$check = $choice = false;
$buttonText = '確認';
$actionUrl = $_SERVER['PHP_SELF'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームからのデータ取得
    $name = $_POST['name'] ?? '';
    $huri = $_POST['huri'] ?? '';
    $mail = $_POST['mail'] ?? '';
    $tell = $_POST['tell'] ?? '';
    $choice = $_POST['choice'] ?? '';
    $message = $_POST['message'] ?? '';
    $check = isset($_POST['check']);

    // エラーチェック
  if (empty($name)) {
    $errors[] = "お名前を入力してください。";
  }

  if (empty($huri)) {
    $errors[] = "フリガナを入力してください。";
  }

  if (empty($mail)) {
    $errors[] = "メールアドレスを入力してください。";
  } elseif (strpos($mail, '@') === false) {
    $errors[] = "メールアドレスに@を含めてください。";
  }

  if (empty($tell)) {
    $errors[] = "電話番号を入力してください。";
  } elseif (!preg_match('/^\d{10}$|^\d{11}$/', $tell)) {
    $errors[] = "電話番号は10桁または11桁の数字で入力してください。";
  }

  if ($choice === 'option0') {
    $errors[] = "お問い合わせ項目を選択してください。";
  }

  if (empty($message)) {
    $errors[] = "お問い合わせ内容を入力してください。";
  }

  if (!$check) {
    $errors[] = "個人情報保護方針に同意する必要があります。";
  }


    // エラーがない場合、セッションにデータを保存
    if (empty($errors)) {
        $_SESSION['name'] = $name;
        $_SESSION['huri'] = $huri;
        $_SESSION['mail'] = $mail;
        $_SESSION['tell'] = $tell;
        $_SESSION['choice'] = $choice;
        $_SESSION['message'] = $message;
        $_SESSION['check'] = $check;

        // 確認ページにリダイレクト
        header("Location: task8-1.php");
        exit;
    }
}

?>
!
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
    <p>お問い合わせや業務内容に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。<br>
    後ほど担当者よりご連絡させていただきます。</p>
  </div>

  <div class="wrapper">
  <div class="errors">
      <?= implode('<br>', $errors) ?>
  </div>
    <form action="<?= $actionUrl ?>" method="post">
      <div class="qes bottom top_margin">
        <div class="cate">
          <label><h4>お名前</h4></label>
          <div class="ess">必須</div>
        </div>
        <input type="text" class="input" name="name" placeholder="山田太郎" value="<?= $name?>">
      </div>
      <div class="qes bottom">
        <div class="cate">
          <label><h4>フリガナ</h4></label>
          <div class="ess">必須</div>
        </div>
        <input type="text" class="input" name="huri" placeholder="ヤマダタロウ" value="<?=$huri?>">
      </div>
      <div class="qes bottom">
        <div class="cate">
          <label><h4>メールアドレス</h4></label>
          <div class="ess">必須</div>
        </div>
        <input type="text" class="input" name="mail" placeholder="info@fast-creademy.jp" value="<?= $mail ?>">
      </div>
      <div class="qes bottom">
        <div class="cate">
          <label><h4>電話番号</h4></label>
          <div class="ess">必須</div>
        </div>
        <input type="text" class="input" name="tell" placeholder="info@fast-creademy.jp"value="<?=$tell?>">
      </div>
      <div class="qes bottom">
        <div class="cate">
          <label><h4>お問い合わせ項目</h4></label>
          <div class="ess">必須</div>
        </div>
        <select name="choice" class="input">
          <option value="option0" <?= $choice === 'option0' ? 'selected' : '' ?>>選択してください</option>
          <option value="option1" <?= $choice === 'option1' ? 'selected' : '' ?>>選択肢1</option>
          <option value="option2" <?= $choice === 'option2' ? 'selected' : '' ?>>選択肢2</option>
        </select>
      </div>
      <div class="qes bottom">
        <div class="cate">
          <label><h4>お問い合わせ内容</h4></label>
          <div class="ess">必須</div>
        </div>
        <textarea class="message input" name="message" placeholder="こちらにお問い合わせ内容を入力してください。"><?= htmlspecialchars($message) ?></textarea>
      </div>
      <div class="qes bottom  nobet">
        <div class="cate">
          <label><h4>個人情報保護方針</h4></label>
          <div class="ess">必須</div>
        </div>
        <div class="cate left">
        <input type="checkbox" class="box" name="check" <?= $check ? 'checked' : '' ?>><a href="#" color: darkgreen style="color: darkgreen"value="<?=$check?>">個人情報保護方針
          </a>
          <p>に同意します。</p>
        </div>
      </div>
      <div class="btn sec1">
      <input type="submit" class="gre" value="<?=$buttonText?>">
      </div>
    </form>
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