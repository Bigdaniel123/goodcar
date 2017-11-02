<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>购物街</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body bgcolor="#fff" text="#000" link="#f96" vlink="#f96" alink="#fc9">
请选择商品<br />
<form action="index.php" enctype="multipart/form-data" method="POST">
	<input type="checkbox" name="cart[]" value="猪肉"/>猪肉<br />
	<input type="checkbox" name="cart[]" value="牛肉"/>牛肉<br />
	<input type="checkbox" name="cart[]" value="中华香烟"/>中华香烟<br />
	<input type="checkbox" name="cart[]" value="长城葡萄酒"/>长城葡萄酒<br />
	<input type="checkbox" name="cart[]" value="金龙鱼花生油"/>金龙鱼花生油<br />
	<input type="submit" value="购买" />
	<input type="button" value="返回" onclick="location='index.php';" />
</form>

</body>
</html>

