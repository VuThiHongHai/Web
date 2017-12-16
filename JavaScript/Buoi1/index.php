<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tìm hiểu về JavaScript</title>
	<script language="javascript" src="myscr.js">
		
	</script>
	<style>
			ul{
				list-style:none;
			}


	</style>
</head>
<body>
	<!-- <h1>Làm quen với JVS</h1>
	<script language="javascript">
		var a= 10;
		b= 5.5;
		c = a + b;
		window.document.write("<h4> Tổng = " + c);
	</script>
	<h1>Một số hộp thoại trong JavaScript</h1>
	<script type="text/javascript">
		window.alert("Hello JavaScript");
		r = window.confirm("Dòng thông báo câu hỏi!!");
		if(r == true)
		{
			ht= window.prompt("Bạn tên gì","Nhập tên");
			document.write("<h2> Chào: " + ht + "</h2");
		}
		else
		{
			alert("Goodbye");
		}
	</script>
	<h1>Khai báo và sử dụng hàm</h1>
	<script type="text/javascript">
		Hello("Tên một người");
		x= 10;
		y = 3.5;
		t = tong(x, y);
		document.write("<br/>Tổng: " + t);
	</script>
-->
	<h1>Tạo form</h1>
	<h2>Chương trình tính tổng hai số</h2>
	<form name="f1" method="post" action="">
			<ul>
				<li>
					A = 
				
					<input type="text" name="ta">
				</li>
			</ul>
			<ul>
				<li>
					B = 
				
					<input type="text" name="tb">
				</li>
			</ul>
			<ul>
					<button type="button" name="b1" onclick="b1_click();">Kết Quả</button>
			</ul>
			<ul>
				<li>
					Kết Quả = 
				
					<input type="text" name="tkq">
				</li>
			</ul>
	</form>
</body>
</html>