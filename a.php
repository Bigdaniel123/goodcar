<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>购物街</title>
</head>

<body bgcolor="#fff" text="#000" link="#f96" vlink="#f96" alink="#fc9">
请选择商品<br />
<form action="index.php" method="POST">
	<input type="checkbox" name="cart[ ]" value="篮球"/>篮球<br />
	<input type="checkbox" name="cart[ ]" value="排球"/>排球<br />
	<input type="checkbox" name="cart[ ]" value="足球"/>足球<br />
	<input type="checkbox" name="cart[ ]" value="桌球"/>桌球<br />
	<input type="checkbox" name="cart[ ]" value="气球"/>气球<br />
	<input type="submit" value="购买" />
	<input type="button" value="返回" onclick="location='index.php';" />
</form>
</body>

</html>

