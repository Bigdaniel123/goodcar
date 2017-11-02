<?php
	header("Content-type:text/html;charset=utf-8");
	//三个页面虽然显示内容不同，但是处理的php页面都是列表的index.php页面。处理页面会开启session功能，存储session的值。
	session_start();    //启用session
	if(!isset($_SESSION['cart'])){  //查看当前session中是否已经定义了购物车变量
		$_SESSION['cart'] = array();    //没有的话就新建一个变量，其值是一个空数组。
		//session销毁之后变为空
	}

	if(isset($_POST['cart'])){      //是否是从商品页面提交过来的
		//如果是，则把提交来的商品加到购物车中
		//  $_SESSION['cart'] = array_merge($_SESSION['cart'],$_POST['cart']);

		//通过foreach遍历数组，把前台页面的值存储在session中。如果我们希望查看购物车，也就是查看session中存储的值。cart.php页面处理查看购物车
		//  foreach($_POST['cart'] as $c){
		//      $_SESSION['cart'][]=$c;
		//  }


		//定义关联数组，其键为商品名称，其值为商品数量。第一次买进的商品，其值为1
		for($i = 0; $i <count($_POST['cart']); $i++ ){
			$c = $_POST['cart'][$i];
			if(array_key_exists($c, $_SESSION['cart'])){
				$_SESSION['cart'][$c] = $_SESSION['cart'][$c] +1;
				//$_SESSION['cart'][$c]++;
			}else{
				$_SESSION['cart'][$c] = 1;
			}

		}

	}
	/*
	foreach (array_expression as $value)
		statement
	foreach (array_expression as $key => $value)
		statement
	*/

	if(isset($_POST['d'])){             //是否从购物车管理界面提交过来的
		foreach($_POST['d'] as $c){     //如果是，则将提交过来的商品序号从购物车数组中删除
			unset($_SESSION['cart'][$c]);
		}

	}

?>
<a href="a.php">运动器材</a><br/>
<a href="b.php">办公用品</a><br/>
<a href="c.php">烟酒副食</a><br/>
<a href="cart.php">查看购物车</a><br/>