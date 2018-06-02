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

	/*if (count($price) == 1)
	{
		echo("請輸入正確的數字");
	}
	*/
	
	$sql = $db->query("INSERT INTO products(name, price) VALUES('$name', '$price')"); //新增此資料
	$sql->execute(); //執行
	
	
	

	
	//http://www.runoob.com/mysql/mysql-insert-query.html
	//https://github.com/hashman/hcvs_sample_code
	//www.codedata.com.tw/database/mysql-tutorial-8-storage-engine-datatype/
	//http://easonyo.pixnet.net/blog/post/22966510

}
?>
</body>
</html>
