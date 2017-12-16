function Hello(hoten)
	{
		window.document.write("Xin chào: " + hoten);
	}
function tong(a, b)
	{
		c = a + b;
		return c;
	}
function b1_click()
{ // lấy nội dung: tên biến = document.tên form.tên ô input. value;
	a = document.f1.ta.value;
	b = document.f1.tb.value;
	// chuyển dạng string sang number
	if(a== "" || b== "")
	{
		alert("Bạn chưa nhập a hoặc b");
		if(a=="")
			//lệnh tự động đặt con chuột vào ô đang lỗi
			document.f1.ta.focus();
		else if (b=="")
			document.f1.tb.focus();
		return false;
	}
	//kiểm tra xem là số không
	if(isNaN(a) || isNaN(b))
	{
		alert("a hoặc b không phải là số");
		if(isNaN(a))
			//lệnh tự động đặt con chuột vào ô đang lỗi
			document.f1.ta.select();
		else(isNaN(b))
			document.f1.tb.select();
	}
	a1 = parseFloat(a);
	b1 = parseFloat(b);
	t = a1 + b1;
	// hoặc t = tong(a1,b1);
	document.f1.tkq.value = t;
}