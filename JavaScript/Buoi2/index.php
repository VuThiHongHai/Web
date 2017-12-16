<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Khung đổi màu chữ màu nền</title>
	<style type="text/css">
		#tnoidung{
			width: 1000px;
			height: 200px;
			background-color: pink;
			border: 1px solid black;
		}
		#tnoidunghienthi{
			width: 1000px;
			height: 200px;
			border: 1px dashed black;
		}
	</style>
	<script language="javascript">
		function capnhat()
		{	
			mauchu = document.f2.tmauchu.value;
			maunen = document.f2.tmaunen.value;
			//kieuchu = document.f2.tkieuchu.value;
			kieudam = document.f2.tdam.checked;
			kieunghieng = document.f2.tnghieng.checked;
			noidung=document.f2.tnoidung.value;
			cochu = document.f2.tfont.value;
			duongvien = document.f2.r1.value;

			// lấy dữ liệu ở phần nhập
		
			d2 = document.getElementById('tnoidunghienthi');
			d2.innerHTML = noidung;
			d2.style.color= mauchu;
			d2.style.backgroundColor = maunen;
			if(kieudam == true)
			{
				d2.style.fontWeight = "bold";
			}
			else
			{
				d2.style.fontWeight = "normal";
			}
			if(kieunghieng == true)
			{
				d2.style.fontStyle = "italic";
			}
			else
			{
				d2.style.fontStyle = "normal";
			}

			d2.style.borderStyle = duongvien;
			//lấy giá trị mục chọn trên select

		
			d2.style.fontSize = cochu;
		}
	</script>
</head>
<body>
	<div>
		<form name="f2">
			Nội dung: <textarea name="tnoidung" id="tnoidung" rows="3" cols="30"></textarea><br>
			Màu chữ: <input type="text" name="tmauchu" id="tmauchu"><br>
			Màu nền: <input type="text" name="tmaunen" id="tmaunen"><br>
			Chữ đậm: <input type="checkbox" name="tdam" id="tdam"><br>
			Chữ nghiêng: <input type="checkbox" name="tnghieng" id="tnghieng"><br>
			Chữ gạch chân: <input type="checkbox" name="tgachchan" id="tgachchan"><br>
			Nét liền: <input type="radio" name="r1" id="tlien" value="solid"><br>
			Nét đứt: <input type="radio" name="r1" id="tdut" value="dashed"><br>
			Nét chấm: <input type="radio" name="r1" id="tdut" value="dotted"><br>
			Kích thước chữ: 
			<select name="tfont">
				<option value="12px">Cỡ 12px</option>
				<option value="14px">Cỡ 14px</option>
				<option value="29px">Cỡ 29px</option>
			</select>
			<input type="button" name="tdoi" value="Chuyển đổi" onclick="capnhat();">
		</form>
	</div>
	<br><br>
	<div id="tnoidunghienthi">
		
	</div>
	<!--qui tắc chuyển css sang javascript: tênbiến.style.thyộc tính css(cái nào có gạch ngang thì chuyển voiết hoa chữ đầu) -->
</body>
</html>
