<?php
	$user='root';
	$pwd='123456';
	$con = mysql_connect('localhost', $user, $pwd) or die("<script>window.location='error.html'</script>");	
	mysql_select_db('xunquweb',$con) or die("<script>window.location='error.html'</script>");
	$id = $_POST['user_id'];
	$data=$_POST['data'];
	if(!ereg("^[0-9]+$",$id))die("<script>window.location='error.html'</script>");
	if(!ereg("^[0-9 ]+$",$data))die("<script>window.location='error.html'</script>");
	$ary=explode(" ",$data);
	foreach($ary as &$x)mysql_query("INSERT INTO ct(id,dt)  VALUES (".$id.",".$x.")")or die("<script>window.location='error.html'</script>");
	mysql_close($con);
	echo '<script>window.location='success.html'</script>';
?>
