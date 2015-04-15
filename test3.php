<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>calander</title>

<link href="css/calender.css" rel="stylesheet" type="text/css">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="./css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="./css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="./js/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="./js/bootstrap.min.js"></script>

<script type="text/javascript">
	  var today=new Date() ;
	  var FullYear = today.getFullYear(); 	//获取年份
	  var m = today.getMonth();           	//获取月号
	  var month = today.getMonth()+1;     	//获取月份
	  var user_date=new Array();         	//先声明一维 the year  
       for(var i=0;i<3;i++){             	//声明长度为2015-－
          user_date[i]=new Array();      	//在声明二维 
          for(var j=0;j<14;j++){         	//二维长度为20 
             user_date[i][j]=new Array();
             for(var k=0;k<33;k++)
               user_date[i][j][k] = 0; 
       		} 
	   } 
	  var date = today.getDate();	      	//获取日期
	  var day = today.getDay();           	//获取星期
	  var firstDay = day-(date%7-1);      	//!important 计算月初星期数
	  var dir = 0;						  	//向前翻页为0 反之为1
	  var monthsNum=[31,28,31,30,31,30,31,31,30,31,30,31];
	  var isleapyear = FullYear%4;        	//判断闰年
	    


//日历绘制
$(document).ready(function(){	

	var devicewidth = $(window).width();
	var f = firstDay;						//本月第一天的星期数
	

	for(var i=0;i<42;i++){
		$("<li><span></span></li>").appendTo(".month-body").addClass("month-cell"); 
	}
	$(".month-container").css('width',devicewidth); 
	$(".month-head").css('width',devicewidth); 
	$(".month-cell-head").css('width',devicewidth/7); 
	$(".month-cell").css('width',devicewidth/7); 




	if(month<10){
		month="0"+month; 
	}
	if(isleapyear==0){
		monthsNum[1]=29;
	}
	
	if(day==0){
		day = 7;
	}
	if(firstDay==7){                      //如果月初为七，归零
		firstDay =0;
	}
	if(firstDay<0){                       //如果月初为负，加七循环
		firstDay +=7;
	}

	
	for (var j=0;j<=f-1;j++)
	{
		$("li.month-cell span").eq(j).text(monthsNum[(m+11)%12]-(f-1-j)).parent().removeClass("pink").addClass("gray");
	}
	for(var j=1;j<=monthsNum[m];j++){
	  	$("li.month-cell span").eq(f).text(j).parent().addClass("pink");
	  	f++; 
	}
	for (var j=f;j<=41;j++)
	{
		$("li.month-cell span").eq(j).text(j-f+1).parent().removeClass("pink").addClass("gray");
	}

	  
	  

	//for savivng the date in a []

	function featuresave()
	{
		var f = firstDay;
		
		var count=0;

 		for(var j=1;j<=monthsNum[m];j++){
 			var tmp = parseInt($("li.month-cell span").eq(f).text());
		  	var tmpmonth = parseInt(month);
		  if($("li.month-cell span").eq(f).parent().hasClass("green")){
		  	
		  	user_date[FullYear-2015][tmpmonth][tmp] = 1;
		  }
		  else
		  {
		  	user_date[FullYear-2015][tmpmonth][tmp] = 0;

		  }
		  f++; 
	  	}	

	}



	  
	  
	  $("li.month-cell span").eq(day-(date%7+6)%7-1+date).parent().addClass("red");
	  $(".month-head span").eq(1).text(FullYear+"年"+month+"月");




		function refresh(){
				var lastmonth=0;
				var lastyear=FullYear;
				var nextmonth=0;
				var nextyear=FullYear;
				if(month == 1)
				{	lastmonth = 12;lastyear=FullYear-1;}
			    else lastmonth = month-1;
				if(month == 12)
				{	nextmonth = 1;nextyear=FullYear+1;}
			    else nextmonth = month+1;
		



			isleapyear = FullYear%4;        //判断闰年
			  if(isleapyear==0){
				  monthsNum[1]=29;
			  }
			  else{
			  	monthsNum[1]=28;
			  }
			if(dir==0)
				firstDay = (firstDay - (monthsNum[m]%7))%7;
			else
				firstDay = (firstDay + monthsNum[(m+11)%12]%7)%7;

			if(firstDay==7){                     //如果月初为七，归零
				  firstDay =0;
			}
			if(firstDay<0){                       //如果月初为负，加七循环
				  firstDay +=7;
			}
			f=firstDay;
			//alert(f);
			for (var j=0;j<=41;j++)
			{
				$("li.month-cell span").eq(j).parent().removeClass("green");
			}
			for (var j=0;j<=f-1;j++)
			{
				$("li.month-cell span").eq(j).text(monthsNum[(m+11)%12]-(f-1-j)).parent().removeClass("pink").addClass("gray");
				//alert((m+11)%12);
				if(user_date[lastyear-2015][lastmonth][monthsNum[(m+11)%12]-(f-1-j)]==1)
					$("li.month-cell span").eq(j).parent().addClass("green");

			}
			for(var j=1;j<=monthsNum[m];j++){	
				  $("li.month-cell span").eq(f).text(j).parent().addClass("pink");
				  if(user_date[FullYear-2015][month][j]==1)
				  	$("li.month-cell span").eq(f).parent().addClass("green");
				  f++; 
				  	
			}
			for (var j=f;j<=41;j++)
			{
				$("li.month-cell span").eq(j).text(j-f+1).parent().removeClass("pink").addClass("gray");
				if(user_date[nextyear-2015][nextmonth][j-f+1]==1)
					$("li.month-cell span").eq(j).parent().addClass("green");
			}			  
			//$("li.month-cell span").eq(firstDay-1+date).parent().addClass("red");
			if(month<10)
				$(".month-head span").eq(1).text(FullYear+"年0"+month+"月");
			else
				$(".month-head span").eq(1).text(FullYear+"年"+month+"月");

			


		}
	  
	  $(".month-head_pre").click(function(){
  		featuresave();
	  	dir = 0;
  		if(month==1){
  			month=12;
  			m=11;
  			FullYear--;
  		}
  		else{
  			month--;
  			m--;
  			//alert(month);
  		}

  		refresh();
	  });
	  $(".month-head_next").click(function(){
  		featuresave();
 
  		dir = 1;
  		if(month==12){
  			month=1;
  			m=0;
  			FullYear++;
  			
  		}
  		else{
  			month++;
  			m++;
  		}
  		refresh();
	  });




	$(".month-cell ").each(function() {
		//alert(123);
		$(this).click(function(){
			//alert($(this).text());
			if($(this).hasClass("green"))
			{
				$(this).removeClass("green");
				if(!$(this).hasClass("gray"))	
				{
						$(this).addClass("pink");
				}
				else{
					if($(this).text()>20)
					{
						//alert($(this).value);
							featuresave();
					  		
							dir = 0;
					  		if(month==1){
					  			month=12;
					  			m=11;
					  			FullYear--;
					  		}
					  		else{
					  			month--;
					  			m--;
					  			//alert(month);
					  		}
					  		user_date[FullYear-2015][month][$(this).text()] = (user_date[FullYear-2015][month][$(this).text()]+1)%2;
					  		refresh();
					}
					else{
						  		featuresave();
						  	
						  		dir = 1;
						  		if(month==12){
						  			month=1;
						  			m=0;
						  			FullYear++;
						  			
						  		}
						  		else{
						  			month++;
						  			m++;
						  		}
						  		user_date[FullYear-2015][month][$(this).text()] = (user_date[FullYear-2015][month][$(this).text()]+1)%2;
						  		refresh();
					}

				}
			}
			else{
				if(!$(this).hasClass("pink"))
				{
					if($(this).text()>20)
					{
						//alert($(this).value);
							featuresave();
					  		
							dir = 0;
					  		if(month==1){
					  			month=12;
					  			m=11;
					  			FullYear--;
					  		}
					  		else{
					  			month--;
					  			m--;
					  			//alert(month);
					  		}
					  		user_date[FullYear-2015][month][$(this).text()] = (user_date[FullYear-2015][month][$(this).text()]+1)%2;
					  		refresh();
					}
					else{
						  		featuresave();
						  	
						  		dir = 1;
						  		if(month==12){
						  			month=1;
						  			m=0;
						  			FullYear++;
						  			
						  		}
						  		else{
						  			month++;
						  			m++;
						  		}
						  		user_date[FullYear-2015][month][$(this).text()] = (user_date[FullYear-2015][month][$(this).text()]+1)%2;
						  		refresh();
					}
				}
				else
				{
					$(this).removeClass("pink");
					$(this).addClass("green");	
				}
			}


		});
	});

})


	function postdate()
	{


		var datestring=new Array();
		for(var i=0;i<=2;i++){
			datestring[i] = '';
			for(var j=1;j<13;j++){
				for(var k=1;k<32;k++){
					datestring[i] = datestring[i] + user_date[i][j][k];
				}
			}
		}

		
		var msg = document.getElementById("msg");
		var f = document.user_info;
		var userName = f.user_name.value;
		var userId   = f.user_id.value;


		var temp = document.createElement("form");        
	    temp.action = "process.php";        
	    temp.method = "post";        
	    temp.style.display = "none";        
	            
        var opt = document.createElement("textarea");        
        opt.name = "date_push0";        
        opt.value = datestring[0];      
        temp.appendChild(opt);

        var opt3 = document.createElement("textarea");        
        opt3.name = "date_push1";        
        opt3.value = datestring[1];        

        temp.appendChild(opt3);
        var opt4 = document.createElement("textarea");        
        opt4.name = "date_push2";        
        opt4.value = datestring[2];        
        temp.appendChild(opt4);

        var opt1 = document.createElement("textarea");        
        opt1.name = "username";        
        opt1.value = userName;        
        temp.appendChild(opt1);

        var opt2 = document.createElement("textarea");        
        opt2.name = "userid";        
        opt2.value = userId;             
        temp.appendChild(opt2);

    	temp.submit();   
	}


	function saveUserInfo()
	{
	    featuresave_out();
		postdate();
	}
  
	function featuresave_out()
	{

		var f = firstDay;
		var count=0;
 		for(var j=1;j<=monthsnum[m];j++){
 			var tmp = parseInt($("li.month-cell span").eq(f).text());
		  	var tmpmonth = parseInt(month);
		  	if($("li.month-cell span").eq(f).parent().hasClass("green")){
		  		user_date[FullYear-2015][tmpmonth][tmp] = 1;
		  	}
		  	else
		  	{
		  		user_date[FullYear-2015][tmpmonth][tmp] = 0;
		  	}
		  	f++; 
	  	}
	}


</script>

</head>



<body>
<div class="month-container">
      <div class="month-head"><span class="glyphicon glyphicon-chevron-left month-head_pre" aria-hidden="true"></span><span></span><span  class="glyphicon glyphicon-chevron-right month-head_next" aria-hidden="true"></span></div>
      <ul class="month-body">
      <div class="month-cell-head blue"><span>日</span></div>    
      <div class="month-cell-head blue"><span>一</span></div>
      <div class="month-cell-head blue"><span>二</span></div>
      <div class="month-cell-head blue"><span>三</span></div>
      <div class="month-cell-head blue"><span>四</span></div>     
      <div class="month-cell-head blue"><span>五</span></div>      
      <div class="month-cell-head blue"><span>六</span></div>
      </ul>
      <div class="clear"></div>
</div>
<div class="submit_date">
	<div id="msg"></div>
		<form name="user_info" method="post" action="">
		姓名：<input type="text" name="user_name" /><br />
		学号：<input type="text" name="user_id" /><br />
		<input type="button" value="提交表单" onClick="saveUserInfo()">
</div>
</body>
</html>