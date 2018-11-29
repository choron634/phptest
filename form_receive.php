<!DOCTYPE html>
<html lang = “ja”>
<head>
  <meta charset = “UTF-8”>
  <title>フォームからデータを受け取る</title>
</head>
<body>
  <form action = "form.php" method = "post">
    <table>
      <tr>
        <td>名前</td>
        <td><input type = "text" name = "name"></td>
        <!-- <td colspan = "2" align = "center">
          <input type = "submit" value = "入力">
        </td> -->
      </tr>
      <tr>
        <td>
          コメント
        </td>
        <td height = "100"><input type = "text" name = "comment" size = "100"></td>
        <!-- <td colspan = "2" align = "center">
          <input type = "submit" value = "入力">
        </td> -->
    </table>
    <div class="button">
      <button type="submit">Send your message</button>
    </div>
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
