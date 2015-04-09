<?php
	mysql_connect('localhost', 'conan', 'aptx4869')
		or die("fail1");
	mysql_select_db('sjtu123')
		or die("fail2");
	mysql_query("SET NAMES UTF8");

	
	

	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$password = $_POST['password'];
		$stu_num = $_POST['stu_num'];
	
		$sql2 = "UPDATE user ".
			"SET name = '{$name}', password = '{$password}', student_number = '$stu_num' ".
			"WHERE id = {$id}";

		$result2 = mysql_query($sql2)
			or die("fail4");

		if($result2){
			echo "<script>alert('success!');</script>";
		}	
	}




	$sql1 = "SELECT * FROM user";
	$result1 = mysql_query($sql1)
		or die("fail3");

	echo '<table border="2">';
	echo <<<TR
	<tr>
		<td>编号</td>
		<td>姓名</td>
		<td>密码</td>
		<td>学号</td>
		<td>操作</td>
	</tr>
TR;
	while($row = mysql_fetch_array($result1)){
		echo <<<TR
		<form action="{$_SERVER["PHP_SELF"]}" method="post">	
			<tr>
				<td><input type="hidden" name="id" value="{$row[0]}"}>{$row[0]}</td>
				<td><input type="text" name="name" value="{$row[1]}"></td>
				<td><input type="text" name="password" value="{$row[2]}"></td>
				<td><input type="text" name="stu_num" value="{$row[3]}"></td>
				<td><input type="submit" name="submit" value="修改"></td>
			</tr>
		</form>
TR;
	}

	echo "</table>";
	

	mysql_close();

?>