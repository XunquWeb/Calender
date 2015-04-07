<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<script language="javascript">
function saveUserInfo()
{
//获取接受返回信息层
var msg = document.getElementById("msg");

//获取表单对象和用户信息值
var f = document.user_info;
var userName = f.user_name.value;
var userAge   = f.user_age.value;
var userSex   = f.user_sex.value;

//接收表单的URL地址
var url = "ajax_output.php";

//需要POST的值，把每个变量都通过&来联接
var postStr   = "user_name="+ userName +"&user_age="+ userAge +"&user_sex="+ userSex;

//实例化Ajax
//var ajax = InitAjax();

          var ajax = false;
         //开始初始化XMLHttpRequest对象
         if(window.XMLHttpRequest) { //Mozilla 浏览器
                 ajax = new XMLHttpRequest();
                 if (ajax.overrideMimeType) {//设置MiME类别
                         ajax.overrideMimeType("text/xml");
                 }
         }
         else if (window.ActiveXObject) { // IE浏览器
                 try {
                         ajax = new ActiveXObject("Msxml2.XMLHTTP");
                 } catch (e) {
                         try {
                                 ajax = new ActiveXObject("Microsoft.XMLHTTP");
                         } catch (e) {}
                 }
         }
         if (!ajax) { // 异常，创建对象实例失败
                 window.alert("不能创建XMLHttpRequest对象实例.");
                 return false;
         }
                
                
                

//通过Post方式打开连接
ajax.open("POST", url, true);

//定义传输的文件HTTP头信息
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");

//发送POST数据
ajax.send(postStr);

//获取执行状态
ajax.onreadystatechange = function() { 
   //如果执行状态成功，那么就把返回信息写到指定的层里
   if (ajax.readyState == 4 && ajax.status == 200) { 
    msg.innerHTML = ajax.responseText; 
   } 
} 
}
</script>
<body >
<div id="msg"></div>
<form name="user_info" method="post" action="">
姓名：<input type="text" name="user_name" /><br />
年龄：<input type="text" name="user_age" /><br />
性别：<input type="text" name="user_sex" /><br />

<input type="button" value="提交表单" onClick="saveUserInfo()">
</form>

</body>

