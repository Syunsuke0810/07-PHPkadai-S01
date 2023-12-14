<?php

//各項目を内容を取得
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$sex = $_POST['sex'];
$city = $_POST['city'];
$address = $_POST['address'];
$genre = $_POST['genre'];
$skill = $_POST['skill'];

//チェックボックスの内容をスラッシュ区切りで取り出す
// $reason = implode('/', $_POST['reason']);

// $time = date('Y-m-d H:i:s') . "\n";
file_put_contents('insert.php',$name.$email.$phone.$sex.$city.$address.$genre.$skill."\n",FILE_APPEND);

?>

<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="utf-8">
<title>確認画面</title>
<link rel="stylesheet" href="style2.css">


</head>
<body>
  
  <form action="insert.php" method="post">
 		<h2>ご登録内容確認</h2>
	 	<div class="input-area">
		 	<p>名前</p>
		 	<?php echo htmlspecialchars($name,ENT_QUOTES,'UTF-8');?>
		</div>

		<div class="input-area">
		 	<p>メール</p>
		 	<?php echo htmlspecialchars($email,ENT_QUOTES,'UTF-8');?>
	 	</div>

		 <div class="input-area">
		 	<p>電話番号</p>
		 	<?php echo htmlspecialchars($phone,ENT_QUOTES,'UTF-8');?>
	 	</div>

	 	<div class="input-area">
		 	<p>性別</p>
		 	<?php echo $sex;?>
	 	</div>

	 	<div class="input-area">
		 	<p>都道府県</p>
		 	<?php echo $city;?>
	 	</div>

		 <div class="input-area">
		 	<p>住　所</p>
		 	<?php echo $address;?>
	 	</div>

		 <div class="input-area">
		 	<p>お勤め先の施設種類</p>
		 	<?php echo $genre;?>
	 	</div>

		 <div class="input-area">
		 	<p>保有資格</p>
		 	<?php echo $skill;?>
	 	</div>

	 	
	 	<div class="input-area">
	 		<input type='button' onclick='history.back()' value='戻る' class="btn-border">
	 		<input type="submit" name="submit" value="送信" class="btn-border">
	 		<input type="hidden" name="name" value="<?php echo $name;?>">
	 		<input type="hidden" name="email" value="<?php echo $email;?>">
			 <input type="hidden" name="phone" value="<?php echo $phone;?>">
	 		<input type="hidden" name="sex" value="<?php echo $sex;?>">
			 <input type="hidden" name="city" value="<?php echo $city;?>">
			 <input type="hidden" name="address" value="<?php echo $address;?>">
			 <input type="hidden" name="genre" value="<?php echo $genre;?>">
	 		<input type="hidden" name="skill" value="<?php echo $skill;?>">

	 	</div>
	</form>
</body>
</html>
