<?php
error_reporting(0);

$name = $_POST['name'];
$comment = $_POST['comment'];
$password = $_POST['password'];
$edit_name = $_POST['edit_name'];
$edit_comment = $_POST['edit_comment'];
$edit_password = $_POST['edit_password'];
date_default_timezone_set('Asia/Tokyo');
$date = date('Y-m-d G:i');
$id = $_GET['id'];


$mode = 0;//0:first post 1:edit mode
$password_correct = 0;//if password is correct 1

if($edit_name != ""){
  $mode = 1;
}
if($mode == 0):
  //ファイルの中身を読む
  $file_name = "count.txt";

  $count = file_get_contents($file_name);
  //1を足す
  $count = (int)$count + 1;

  //上書きする
  $a = fopen("count.txt", "w");
  @fwrite($a, "$count");
  fclose($a);

  file_put_contents('received_text.txt', "$count"."<>"."$name"."<>"."$comment"."<>"."$date"."<>"."$password"."\r\n", FILE_APPEND);

  ?>
  <!DOCTYPE>
  <html lang="ja">
  <head>
    <meta charset='utf-8'>
    <title>
      送信完了
    </title>
  </head>
  <body>
    <p>送信完了しました！</p>
    <input class="btn btn-primary col-sm-4 col-sm-offset-4" type="button" onClick="location.href='form_receive.php'" value="ホームへ">
  </body>
  </html>
<?php else:
  $buf = "";
  $lines = file("received_text.txt");
  // 全行をループして検証
  foreach ( $lines as $v ) {

    $pieces = explode("<>", $v);

    if ($pieces[0] ==  $id) {
      if($pieces[4] != $edit_password."\r\n"){
        ?>
        <!DOCTYPE>
        <html lang="ja">
        <head>
          <meta charset='utf-8'>
          <title>
            エラー
          </title>
        </head>
        <body>
          <p>パスワードが違います。</p>
          <input class="btn btn-primary col-sm-4 col-sm-offset-4" type="button" onClick="location.href='form_receive.php'" value="ホームへ">
        </body>
        </html>
        <?php
      }
      else
      {
        $pieces[1] = "$edit_name";
        $pieces[2] = "$edit_comment";
        $buf .= $pieces[0]."<>".$pieces[1]."<>".$pieces[2]."<>".$pieces[3]."<>".$pieces[4];
        $password_correct = 1;
      }
    }
    else
    {
      $buf .= $v;
    }
  }
  if($password_correct == 1){
    $file = fopen("received_text.txt","w");
    fwrite($file, $buf);
    fclose($file);
    ?>
    <!DOCTYPE>
    <html lang="ja">
    <head>
      <meta charset='utf-8'>
      <title>
        編集完了
      </title>
    </head>
    <body>
      <p>投稿を編集しました</p>
      <input class="btn btn-primary col-sm-4 col-sm-offset-4" type="button" onClick="location.href='form_receive.php'" value="ホームへ">
    </body>
    </html>
    <?php
  }
endif;
?>
