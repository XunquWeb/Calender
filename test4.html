<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>calander</title>

<link href="css/calender.css" rel="stylesheet" type="text/css">
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script type="text/javascript">

//日历
$(document).ready(function(){	
	//绘制月历体
	//alert($(window).width());
	//$(".month-container").style.width=$(window).width(); 
		var devicewidth = $(window).width();
		
	
	 for(var i=0;i<42;i++){
	 $("<li><span></span></li>").appendTo(".month-body").addClass("month-cell"); 
	 }

	 	$(".month-container").css('width',devicewidth); 
		$(".month-head").css('width',devicewidth); 
		$(".month-cell-head").css('width',devicewidth/7); 
		$(".month-cell").css('width',devicewidth/7); 

	  var today=new Date()  
	  
	  var FullYear = today.getFullYear(); //获取年份
	  var m = today.getMonth();           //获取月号
	  var month = today.getMonth()+1;     //获取月份
	  if(month<10){
		 month="0"+month; 
	  }
	  var date = today.getDate();	      //获取日期
	  var day = today.getDay();           //获取星期

	  var monthsNum=[31,28,31,30,31,30,31,31,30,31,30,31];
	  var isleapyear = FullYear%4;        //判断闰年
	  if(isleapyear==0){
		  monthsNum[1]=29;
	  }


      if(day==0){
		  day = 7;
	  }
	  var firstDay = day-(date%7-1);       //!important 计算月初星期数

	  if(firstDay==7){                     //如果月初为七，归零
		  firstDay =0;
	  }
	  if(firstDay<0){                       //如果月初为负，加七循环
		  firstDay +=7;
	  }

	  var f = firstDay;
	  for (var j=0;j<=f-1;j++)
	  {
				$("li.month-cell span").eq(j).text(monthsNum[(m+11)%12]-(f-1-j)).parent().removeClass("pink");
				//alert((m+11)%12);
	  }
	  for(var j=1;j<=monthsNum[m];j++){
		  $("li.month-cell span").eq(f).text(j).parent().addClass("pink");
		  f++; 
	  }
	  for (var j=f;j<=41;j++)
	  {
				$("li.month-cell span").eq(j).text(j-f+1).parent().removeClass("pink");
	  }

	  var dir = 0;
  
	  




	  
	  
	  $("li.month-cell span").eq(day-(date%7-1)-1+date).parent().addClass("red");
	  $(".month-head span").eq(1).text(FullYear+"年"+month+"月");




		function refresh(){
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
			for (var j=0;j<=f-1;j++)
			{
				$("li.month-cell span").eq(j).text(monthsNum[(m+11)%12]-(f-1-j)).parent().removeClass("pink");
				//alert((m+11)%12);
			}
			for(var j=1;j<=monthsNum[m];j++){	
				  $("li.month-cell span").eq(f).text(j).parent().addClass("pink");
				  f++; 
			}
			for (var j=f;j<=41;j++)
			{
				$("li.month-cell span").eq(j).text(j-f+1).parent().removeClass("pink");
			}
			  
			//$("li.month-cell span").eq(firstDay-1+date).parent().addClass("red");
			if(month<10)
				$(".month-head span").eq(1).text(FullYear+"年0"+month+"月");
			else
				$(".month-head span").eq(1).text(FullYear+"年"+month+"月");
		}
	  
	  $(".month-head_pre").click(function(){
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

			if($(this).hasClass("green"))
			{
				$(this).removeClass("green");
				if(!$(this).hasClass("gray"))	
					$(this).addClass("pink");
			}
			else{
				if(!$(this).hasClass("pink"))
					$(this).addClass("gray");
				else
					$(this).removeClass("pink");
				$(this).addClass("green");	
			}


		});
	});

})

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
			<button type="button">Submit</button>
			<button type="button">Clear</button>
</div>
</body>
</html>