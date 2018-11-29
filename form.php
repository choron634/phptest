  <?php
    //ファイルの中身を読む
      $file_name = "count.txt";

      $count = file_get_contents($file_name);
    //1を足す
      $count += $count + 1;

    //上書きする
      $a = fopen("count.txt", "w");
      @fwrite($a, "$count");
      fclose($a);

      $name = $_POST['name'];
      $comment = $_POST['comment'];
      $data = data('Y-m-d');



      //$contents = "$count.'<>'.$name.'<>'.$comment.'<>'.$data"

      file_put_contents('received_text.txt', "yahoo!", FILE_APPEND);

  ?>
