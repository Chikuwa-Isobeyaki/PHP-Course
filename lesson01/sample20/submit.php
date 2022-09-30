<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sample20</title>
</head>
<body>
  <!-- $_REQUEST[]でformから受け取り -->
  <!-- $_REQUEST[]はGETとPOSTどちらも対応している -->
  <!-- $_REQUEST[]はURLで不正に操作される恐れがある -->
  <!-- htmlspecialcharsで不正な入力やプログラムが入ってこないようにする -->
  <?php if (!empty($_REQUEST['my_name'])): ?>
   <p>お名前:<?php echo htmlspecialchars($_REQUEST['my_name'], ENT_QUOTES) ; ?></p>
  <?php endif; ?>
</body>
</html>
