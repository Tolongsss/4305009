<html>
<body>
<h2>點卷新增</h2>
<form action="" method="POST">
    <input type="text" name="name" value="" placeholder="點卷名稱" required>
    <input type="password" name="price" value="" placeholder="所需點數" required>
    <input type="submit">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dsn = "mysql:host=localhost;dbname=4305009";
    $db = new PDO($dsn, 'root', '');
    $name = $_POST['name'];	  //輸入的點卷名稱
    $price = $_POST['price']; //輸入的所需點數

	
	$sql = $db->query("INSERT INTO products(name, price) VALUES('$name', '$price')"); //新增此資料
	$sql->execute(); //執行
	
	
}
?>
</body>
</html>
