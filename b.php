<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>购物街</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body bgcolor="#fff" text="#000" link="#f96" vlink="#f96" alink="#fc9">
请选择商品<br />
<form action="index.php" method="POST">
	<input type="checkbox" name="cart[]" value="铅笔"/>铅笔<br />
	<input type="checkbox" name="cart[]" value="钢笔"/>钢笔<br />
	<input type="checkbox" name="cart[]" value="圆珠笔"/>圆珠笔<br />
	<input type="checkbox" name="cart[]" value="电笔"/>电笔<br />
	<input type="checkbox" name="cart[]" value="自动笔"/>自动笔<br />
	<input type="submit" value="购买" />
	<input type="button" value="返回" onclick="location='index.php';" />
</form>

</body>
</html>
