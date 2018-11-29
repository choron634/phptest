<!DOCTYPE>
<html lang="ja">
<head>
  <meta charset='utf-8'>
  <title>
    お問い合わせフォーム
  </title>
  <style rel="stylesheet" type="text/css">
  body {	padding: 20px;	text-align: center;}
  h1 {
    margin-bottom: 20px;	padding: 20px 0;	color: #209eff;	font-size: 122%;	border-top: 1px solid #999;	border-bottom: 1px solid #999;
  }
  input[type=text] {
    padding: 5px 10px;	font-size: 86%;	border-radius: 3px;
  }
  input[name=btn_confirm],input[name=btn_submit],input[name=btn_back] {
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
      <textarea  name="commnt" cols="30" rows="5"></textarea>
    </div>
    <input type="submit" name="btn_confirm" value="入力内容を確認する">
  </form>
</body>
</html>


<!-- <action = "form.php" method = "post">
<input type = "text" name ="comment">
<action = "form.php" method = "get>"
</div>
<form>
<div>
<action = "form.php" method = "post">
<input
<div class="button">
<button type="submit">Send your message</button>
</div>
</form>
</body>
</html> -->
