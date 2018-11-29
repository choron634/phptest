<!DOCTYPE html>
<html lang = “ja”>
<head>
  <meta charset = “UTF-8”>
  <title>フォームからデータを受け取る</title>
</head>
<body>
  <form>
  <div>
    <action = “form.php” method = “get”>
    <input type = "text" name ="comment">
  </div>
  <div class="button">
    <button type="submit">Send your message</button>
  </div>
  </form>
</body>
</html>

<?php
$comment = $_GET["comment"];
echo $comment;
file_put_contents("received_text.txt","$comment"."\n",FILE_APPEND);
?>
