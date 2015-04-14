<?php
	echo "Sucess";
	echo "<br/>";
	echo $_POST['username'];
	echo "<br/>";
    echo $_POST['userid'];

    $id = $_POST['userid'];
    $name = $_POST['username'];

    $datestring = array("","","");

    $datestring[0] = $_POST['date_push0'];
    $datestring[1] = $_POST['date_push1'];
    $datestring[2] = $_POST['date_push2'];
    var_dump($datestring);
    var_dump($_POST);

   
    for($i=0,$j=strlen($datestring[0]);$i<$j;$i++){
    	if($datestring[0][$i]=='1')
    	{
    		echo "</br>";
    		echo 2015;
    		echo "</br>";
    		echo (int)($i/31+1);
    		echo "</br>";
    		echo ($i%31)+1;
    		echo "</br>";
    	}
	}
	for($i=0,$j=strlen($datestring[1]);$i<$j;$i++){
    	if($datestring[1][$i]=='1')
    	{
    		echo "</br>";
    		echo 2016;
    		echo "</br>";
    		echo (int)($i/31+1);
    		echo "</br>";
    		echo ($i%31)+1;
    		echo "</br>";
    	}
	}
	for($i=0,$j=strlen($datestring[2]);$i<$j;$i++){
    	if($datestring[2][$i]=='1')
    	{
    		echo "</br>";
    		echo 2017;
    		echo "</br>";
    		echo (int)($i/31+1);
    		echo "</br>";
    		echo ($i%31)+1;
    		echo "</br>";
    	}
	}



	$con = mysql_connect('localhost', 'root', '123456')
		or die("fail1");
	mysql_select_db('xunqu')
		or die("fail2");
	mysql_query("SET NAMES UTF8");


	mysql_query(
		"
			CREATE TABLE IF NOT EXISTS `calender_choose` (
			  `id` int(11) NOT NULL,
			  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
			  `year` int(10) NOT NULL,
			  `month` int(10) NOT NULL,
			  `day`  int(10) NOT NULL
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;
		"
	);




	for($i=0,$j=strlen($datestring[0]);$i<$j;$i++){
    	if($datestring[0][$i]=='1')
    	{
    		$month = (int)($i/31+1);
    		$day = ($i%31)+1 ;
    		$insert = "INSERT INTO calender_choose(id, name, year, month, day) 
				 		 VALUES ('{$id}', '{$name}', '2015', '{$month}', '{$day}')";
    		$result=mysql_query($insert,$con);//执行insert语句
			//判断执行结果
			if($result){
				echo "1";
			}
			else{
				echo "2";
			}
    	}
	}
	for($i=0,$j=strlen($datestring[1]);$i<$j;$i++){
    	if($datestring[1][$i]=='1')
    	{
    		$month = (int)($i/31+1);
    		$day = ($i%31)+1 ;
    		$insert = "INSERT INTO calender_choose(id, name, year, month, day) 
				 		 VALUES ('{$id}', '{$name}', '2016', '{$month}', '{$day}')";
    		$result=mysql_query($insert,$con);//执行insert语句
			//判断执行结果
			if($result){
				echo "<script>alert('注册成功！');</script>";
			}
			else{
				echo "<script>alert('注册失败！');</script>";
			}
	    }
	}
	for($i=0,$j=strlen($datestring[2]);$i<$j;$i++){
    	if($datestring[2][$i]=='1')
    	{
    		$month = (int)($i/31+1);
    		$day = ($i%31)+1 ;
    		$insert = "INSERT INTO calender_choose(id, name, year, month, day) 
				 		 VALUES ('{$id}', '{$name}', '2017', '{$month}', '{$day}')";
    		$result=mysql_query($insert,$con);//执行insert语句

			//判断执行结果
			if($result){
				echo '<script>alert("注册成功！！");</script>';
			}
			else{
				echo '<script>alert("注册失败！！");</script>';
			}
   		}
	}

	echo $insert;
	echo 1;
	echo $result;

	mysql_close($con);


?>