<html>
	<body>
	<h2>表單資料:</h2>
	<form action="post.php" method="POST">
		<input type="text" name="name" value="" placeholder="名稱">
		<input type="text" name="account" value="" placeholder="帳號">
		<input type="text" name="password" value="" placeholder="密碼">
		<input type="submit">
	</form>
	</body>
	
<?php
$dsn = "mysql:host=192.168.32.90;dbname=dbname01";
$db = new PDO($dsn, "dbname01" , "dbname@pwd");
$rs = $db->query("SELECT * FROM users WHERE account = 'user'");
$result = $rs->fetch();

if(($_POST['name']==$result[0])&&($_POST['account']===&result[1])&&($_POST['password']===&result[2]))
{
	print_r("true");
}
else
{
	print_r("error");
}
?>
