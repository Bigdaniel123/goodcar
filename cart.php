<form action="index.php" method="POST">
	<?php
		header("Content-type:text/html;charset=utf-8");
		session_start();            //重启session
		$cart = $_SESSION['cart'];  //得到购物车
		foreach($cart as $i=>$c){    //对购物车里的商品进行遍历
			//将商品的名字输出到页面上，每个商品前面对应一个多选框，其值是商品在购物车中的编号。
			//用d作为购物车管理界面中  购物车所有的商品，用于index.php页面撤销/删除某些商品的业务处理。
			echo "<input type='checkbox' value='$i' name='d[]' />".$i.' 数量：'.$c."<br />";
		}
	?>
	<input type="submit" value="撤销购物" />
	<input type="button" value="返回" onclick="location='index.php';" />
</form>
