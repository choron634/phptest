<!DOCTYPE>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>
    お問い合わせフォーム
  </title>
  <style rel="stylesheet" type="text/css">
  body {	padding: 20px;	text-align: center;}
  /* .table1 {
    border: 1px solid gray;
  }
  .table1 td {
    border: 1px solid gray;
  } */
  .table1 th {
    /* border: 1px solid gray;   */
    text-align: center; background-color: #DDDDDD;
  }
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
<body>
  <h1>お問い合わせフォーム</h1>
  <form method="post" action="form.php">
    <div class="element_wrap">
      <label>氏名</label>
      <input type="text" name="name" value="">
    </div>
    <div class="element_wrap">
      <label>コメント</label>
      <input type="text" name="comment" value="" size="100">
    </div>
    <div class="element_wrap">
      <label>パスワード</label>
      <input type="text" name="password" value="">
    </div>
    <input type="submit" name="btn_confirm" value="送信">
  </form>
  <table class = "table1" align = "center" position = >
    <tr>
      <th>ID</th><th>お名前</th><th>コメント</th><th>投稿日時</th>
      <?php
      $filename="received_text.txt";
      //ファイルを配列に格納し、さらに変数に格納する
      $lines=file($filename);
      //変数を出力する
      for($i = 0; $i < count($lines); $i++){
        $pieces = explode("<>", $lines[$i]);
        ?>
        <tr>
          <?php
          for($j = 0; $j < count($pieces)-1; $j++){
            ?>
            <td>
              <?php
              echo ($pieces[$j]);
              ?>
            </td>
            <?php
          }
          ?>
        </tr>
        <?php
      }
      ?>
    </table>
      <h2>投稿の削除</h2>
      <form method="post" action="form_delete.php">
        <div class="element_wrap">
          <label>削除する投稿のID</label>
          <input type="text" name="id" value="" size="3">
        </div>
        <input type="submit" name="btn_delete" value="投稿を削除する">
      </form>
      <h3>投稿の編集</h3>
      <form method="post" action="form_edit.php">
        <div class="element_wrap">
          <label>編集する投稿のID</label>
          <input type="text" name="id" value="" size="3">
        </div>
        <input type="submit" name="btn_edit" value="投稿を編集する">
      </form>
    </body>
    </html>
