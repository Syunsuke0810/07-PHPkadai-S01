<?php
//直リンクされた場合index.phpにリダイレクト
// if($_SERVER["REQUEST_METHOD"] != "POST"){
// 	header("Location: top.php");
// 	exit();
// }

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['email'];
//メール件名
$subject = "お問い合わせありがとうございます。";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
ご登録ありがとうございます。

以下の内容でご登録いたします。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 お名前 】
{$_POST["name"]}

【 メール 】
{$_POST["email"]}

【 電話番号 】
{$_POST["phone"]}

【 性別 】
{$_POST["sex"]}


【 お住いの地域 】
{$_POST["city"]}

【 住　所 】
{$_POST["address"]}

【 勤め先の施設種類 】
{$_POST["pref"]}

【 お住いの地域 】
{$_POST["genre"]}

【 保有資格 】
{$_POST["skill"]}


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "From: info@f-everyones.jp";
//メール送信
mb_send_mail($to, $subject, $message, $headers); 
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>完了画面</title>
<link rel="stylesheet" href="style3.css">

</head>
<body>
	<h2>登録完了♪</h2>
 	<p>ご登録ありがとうございました。</p>
 	<p>これからも一緒に子ども達の明るい未来を作りましょう！！</p>
 	<p><a href="index.php">マイページへ</p>
</body>
</html>
