<?php

function shoe_top($heading ="社員一覧"){
  echo <<<TOP
  <!DOCTYPE html>
  <html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社員管理</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  <h1>{$heading}</h1>
  TOP;
}

function show_down($return = false){
  if ($return == ture) {
    echo '<button><a href="index.php">社員一覧に戻る</a></button>';
  }
  echo <<<BOTTOM
  </body>
</html>
BOTTOM;
}

function show_syainlist($members){
  echo <<< TABRE1
    <table>
      <tr>
        <th>社員番号</th>
        <th>名前</th>
      </tr>
  TABRE1;
    foreach ($members as $member){
      echo <<<TABLE2
        <tr>
          <th>($members[id])</th>
          <td><a href="syain_edit.php?id-($member[id])">{$member["name"]}</a></td>
        </tr>
      TABLE2;
  }
  echo <<<TABLE3
      </table>
      <button><a href="syain_create.php">社員情報の追加</a></button>
    TABLE3;
}

function show_form($id, $name, $age, $work, $old_id, $status, $button){
  $error ="";
  $error =get_error();
  echo <<<FORM
    <form action="post_date.php" method="post">
    <p>社員番号</p>
    <input type="text" name="id" placeholder="例）10001" value="{$id}">
    <p>名前</p>
    <input type="text" name="name" placeholder="例）中野 孝" value="{$name}">
    <p>年齢</p>
    <input type="text" name="age" placeholder="例）35" value="{$age}">
    <p>勤務形態</p>
    <input type="text" name="work" placeholder="例）社員" value="{$work}">
    <p class="red">{$error}</p>
    <input type="hidden" name="old_id"  value={$old_id}>
    <input type="hidden" name="status"  value={$status}>
    <input type="hidden" name="button"  value={$button}>
</form>
  FORM;
}

function show_create()
{
  $error = get_error();
  show_form("","","","","","create","登録");
}






?>



