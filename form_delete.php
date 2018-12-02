<?php

    //各当する投稿があるかを確認するflag
    $flag = 0;

    $id = $_POST['id'];

    // バッファ
    $buf = "";

    // ファイル読みこみ
    $lines = file("received_text.txt");
    // 全行をループして検証
    foreach ( $lines as $v ) {

    $pieces = explode("<>", $v);

    if ($pieces[0] ==  $id) {
      $flag = 1;
    }
     else{
       $buf .= $v;
     }
    }
    // ファイル書きこみ
    $file = fopen("received_text.txt","w");
    fwrite($file, $buf);
    fclose($file);
if($flag == 1): ?>
<!DOCTYPE>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>
    投稿を削除しました。
  </title>
</head>
<body>
<p>投稿を削除しました</p>
<input class="btn btn-primary col-sm-4 col-sm-offset-4" type="button" onClick="location.href='form_receive.php'" value="ホームへ">
</body>
</html>
<?php else: ?>
  <html lang="ja">
  <head>
    <meta charset='utf-8'>
    <title>
      投稿が存在しません。
    </title>
  </head>
  <body>
  <p>投稿が存在しません</p>
  <input class="btn btn-primary col-sm-4 col-sm-offset-4" type="button" onClick="location.href='form_receive.php'" value="ホームへ">
  </body>
  </html>
<?php endif ?>
