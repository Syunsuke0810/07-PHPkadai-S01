<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="top.css">
  <title>Document</title>
</head>
<body>
  
  <button class="button" onclick="redirectToIndex()">
    新規会員登録
  </button>

  <script>
    function redirectToIndex() {
      // ボタンをクリックしたときにindex.phpにリダイレクトする
      window.location.href = 'index.php';
    }
  </script>

</body>
</html>