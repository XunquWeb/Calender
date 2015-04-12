<?
	echo "Sucess";
	echo "<br/>";
	echo $_POST['username'];
	echo "<br/>";
    echo $_POST['userid'];

    $datestring = array("","","");

    $datestring[0] = $_POST['date_push0'];
    $datestring[1] = $_POST['date_push1'];
    $datestring[2] = $_POST['date_push2'];

   
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
	for($i=0,$j=strlen($datestring[0]);$i<$j;$i++){
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

?>