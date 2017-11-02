<?php

	header("content-type:text/html;charset=utf-8");
	require 'common.php';
	session_start();
	$sum = 0;
	$class = "";
	//判断左上角购物车的样式显示
	if(!empty($_SESSION['shopcar'])){
		$data = $_SESSION['shopcar'];
		$sum = array_sum($data[4]);
		$class = "on";
		//右上角圆点
		if(empty($data[0])){
			$class = "";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>商品展示</title>
	<style type="text/css">
		section{
			width:1032px;
			height: 700px;
			margin: 40px auto;
		}
		.top{
			float: right;
			position: relative;
			width: 190px;
			height: 34px;
			border: 1px solid #ccc;
			margin-right: 32px;
			text-align: center;
			line-height: 34px;
			border-radius: 4px;
			transition: all .3s linear;
			-moz-transition: all .3s linear;
			-webkit-transition: all .3s linear;
		}
		.top a{
			color: #d00;
		}
		.top:hover{
			width: 210px;
			color: #fff;
			font-weight: bold;
			background-color: #d00;
			border-radius: 6px;
		}
		.top:hover a{
			color: #fff;
		}
		.top:hover span{
			background-color: #fff;
			color: #d00;
		}
		.top:hover .star{
			right:150px;
			top: 0;
			font-size: 14px;
			color: #ff0;
			transform: rotate(1080deg);
		}
		.top span{
			position: absolute;
			top:2px;
			right: 40px;
			width: 18px;
			height: 18px;
			font-weight: bold;
			border-radius: 9px;
			line-height: 18px;
			text-align: center;
			font-size: 12px;
			font-weight: border;
			color: #fff;
		}
		.star{
			color: #fff;
			font-size: 48px;
			font-style: normal;
			position: absolute;
			right:530px;
			top:186px;
			transform: rotate(60deg);
			transition: all .3s ease;
		}
		.on{
			background-color: #e00;
		}
		.list{
			margin: 20px 20px;
			padding: 36px 0;
			list-style: none;
		}
		a{
			display: block;
			color: #757575;
			text-decoration: none;
		}
		.list li{
			float: left;
			height: 246px;
			width: 234px;
			padding: 10px 0 20px;
			margin-right:12px;
			margin-top: 20px;
			border: 1px solid #ccc;
			background: #fff;
			-webkit-transition: all .2s linear;
			transition: all .2s linear;
		}
		.list li:hover{
			box-shadow: 2px 4px 5px #aaa;
		}
		.figure{
			width: 150px;
			height: 150px;
			margin: 0 auto 18px;
		}
		.title{
			color: #222;
			font-size: 14px;
			font-weight: normal;
			text-align: center;
		}
		.price{
			margin: 0 10px 10px;
			text-align: center;
			color: #ff6700;
		}
		.cart{
			margin: 0 15px 5px;
			text-align: center;
		}
		.cart a{
			color: #a34;
			width: 190px;
			height: 24px;
			border-radius: 4px;
			margin: 0 8px 5px;
			text-align: center;
		}
		.cart a:hover{
			color: #eee;
			box-shadow: 0 2px 1px #333,0 2px 1px #666;
			background-color: #ccc;
			background-image: linear-gradient(#33a6b8,#0089a7)
		}
		.num{
			text-align: center;
			color: #ff6700;
		}
	</style>
</head>
<body>
<section>
	<div class='top'>
		<a href="spcar.php">我的购物车</a><span class="<?php echo $class;?>"><?php echo $sum;?></span>
		<em class='star'>★</em>
	</div>
	<ul class="list">
		<?php foreach ($arrPro as $key => $value):?>
			<li>
				<div class="figure">
					<a href=""><img src="<?php echo $value['img'];?>" width="150" height="150" alt="小米移动电源5000mAh"></a>
				</div>
				<h3 class="title">
					<a href=""><?php echo $value['title'];?></a>
				</h3>
				<p class="price"><span class="num">￥<?php echo $value['price'];?></span></p>
				<p class='cart'><a href="action.php?id=<?php echo $value['id'];?>">加入购物车</a></p>
			</li>
		<?php endforeach;?>
	</ul>
	<div style='clear:both'></div>
</section>
</body>
</html>