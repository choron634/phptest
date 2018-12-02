index.phpをブラウザで実行する。

処理
・新規投稿
index.phpでフォームを記入→form.phpで$_POSTを用いて送信データを取得し、フォーマットを整えてreceived_text.txtファイルを上書きする。
この際、新規投稿であればcount.txtの値に1を足した値がIDとなる。
index.php上でreceived.txtから、パスワード以外の情報を読み込み、表示する。

・投稿の削除
index.phpでidを記入→form_delete.phpで$_POSTを用いてidを取得し、received_text.txtでidの一致する投稿を探す。
投稿がなければその旨を表示。
投稿があればその投稿を除いた全投稿をファイルに上書きする。

・投稿の編集
index.phpでidを記入→form_edit.phpで$_POSTを用いてidを取得し、received_text.txtでidの一致する投稿を探す。
投稿がなければその旨を表示。
投稿があればその投稿の名前、コメントを記入した状態でhtmlでフォームを表示。
また、この際パスワードの記入欄も空欄で表示する。
編集内容を再びform.phpに送信し、$_POSTで受け取る。この時、記入されたパスワードがreceived_text.txt内のパスワードと一致すればファイルを上書きする。
記入されたパスワードが一致しなかった場合、その旨を表示する。