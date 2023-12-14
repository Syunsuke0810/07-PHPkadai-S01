<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>会員登録フォーム</title>
</head>
<body>
  
</body>
</html>
<body>
 	<form action="confirm.php" method="post">
 		<h2>会員登録フォーム</h2>
	 	<div class="input-area">
		 	<p>名前</p>
		 	<input type="text" name="name" placeholder="例）田中　太郎" required>
		</div>

		<div class="input-area">
		 	<p>メール</p>
		 	<input type="text" name="email" placeholder="例）abc@abc.com" required>
	 	</div>

     <div class="input-area">
		 	<p>電話番号</p>
		 	<input type="text" name="phone" placeholder="例）03-0000-1234" required>
    </div>

     <div class="input-area">
		 	<p>性別</p>
		 	<input type="text" name="sex" placeholder="例）男性／女性" required>
	 	</div>

     </div>
     <div class="input-area">
		 	<p>都道府県</p>
		 	<input type="text" name="city" placeholder="例）東京都" required>
	 	</div>

     </div>
     <div class="input-area">
		 	<p>住　所</p>
		 	<input type="text" name="address" placeholder="例）葛飾区番台んのほし" required>
	 	</div>

	 	</div>
     <div class="input-area">
		 	<p>勤め先の施設種類</p>
		 	<input type="text" name="genre" placeholder="例）認可保育園／小規模保育園" required>
	 	</div>

     </div>
     <div class="input-area">
		 	<p>保有資格</p>
		 	<input type="text" name="skill" placeholder="例）保育士／児童発達管理者／幼稚園教諭" required>
	 	</div>

     
	 	<div class="input-area">
	 		<input type="submit" name="submit" value="確認画面へ" class="btn-border">
	 	</div>
	</form>
</body>
</html>
