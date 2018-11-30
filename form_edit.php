<!DOCTYPE>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>
    お問い合わせフォーム
  </title>
  <style rel="stylesheet" type="text/css">
  body {	padding: 20px;	text-align: center;}
  h1,h2,h3 {
    margin-bottom: 20px;	padding: 20px 0;	color: #209eff;	font-size: 122%;	border-top: 1px solid #999;	border-bottom: 1px solid #999;
  }
  input[type=text] {
    padding: 5px 10px;	font-size: 86%;	border-radius: 3px ;
  }
  input[name=btn_confirm],input[name=btn_submit],input[name=btn_back],input[name=btn_delete],input[name=btn_edit] {
    margin-top: 10px;	padding: 5px 20px;	font-size: 100%;	color: #fff;	cursor: pointer;	border: none;	border-radius: 3px;	box-shadow: 0 3px 0 #2887d1;	background: #4eaaf1;
  }

  .element_wrap {
    margin-bottom: 10px;	padding: 10px 0;	border-bottom: 1px solid #ccc;	text-align: left;
  }
  label {
    display: inline-block;	margin-bottom: 10px;	font-weight: bold;	width: 150px;
  }
  .element_wrap p {
    display: inline-block;	margin:  0;	text-align: left;
  }
  </style>
</head>

<?php
    //各当の投稿があるかを確認するflag
    $flag = 0;
    $edit_name = "";
    $edit_comment = "";

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
        $edit_name = $pieces[1];
        $edit_comment = $pieces[2];
      }
    }
if($flag == 1):
  ?>

  <body>
    <h1>お問い合わせフォーム</h1>
    <form method="post" action="form.php?id=<?php echo $id ?>">
      <div class="element_wrap">
        <label>氏名</label>
        <input type="text" name="edit_name" value="<?php echo $edit_name ?>">
      </div>
      <div class="element_wrap">
        <label>コメント</label>
        <input type="text" name="edit_comment" value="<?php echo $edit_comment ?>" size="100">
      </div>
    </dev>
      <input type="submit" name="btn_confirm" value="送信">
    </form>
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
