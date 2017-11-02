<?php
	header("Content-type:text/html;charset=utf-8");
	if(!empty($_GET['id'])){
		require 'common.php';
		session_start();
		$id = $_GET['id'];
		//把所选ID的商品信息遍历出来
		foreach ($arrPro as $key => $value) {
			if($id == $value['id']){
				$arrData = $arrPro[$key];
			}
		}

		//用一个新的二维数组把商品信息存起来
		$arrDatax[0][$arrData['id']] = $arrData['id'];
		$arrDatax[1][$arrData['id']] = $arrData['img'];
		$arrDatax[2][$arrData['id']] = $arrData['title'];
		$arrDatax[3][$arrData['id']] = $arrData['price'];
		$arrDatax[4][$arrData['id']] = 1;
		//判断是否有SESSION存在，有则在数组后添加，没有则直接存
		if(empty($_SESSION['shopcar'])){
			$_SESSION['shopcar'] = $arrDatax;
			header('Location:index.php');
		}else{
			//第一次购物之后的购物
			//重新取出来，防止数据覆盖
			$arrDataz = $_SESSION['shopcar'];
			if(in_array($id,$arrDataz[0])){
				$arrDataz[4][$arrData['id']] += 1;
				$_SESSION['shopcar'] = $arrDataz;
				header('Location:index.php');
			}else{
				$arrDataz[0][$arrData['id']] = $arrData['id'];
				$arrDataz[1][$arrData['id']] = $arrData['img'];
				$arrDataz[2][$arrData['id']] = $arrData['title'];
				$arrDataz[3][$arrData['id']] = $arrData['price'];
				$arrDataz[4][$arrData['id']] = 1;
				$_SESSION['shopcar'] = $arrDataz;
				header('Location:index.php');
			}

		}
	}else{
		echo "购物车没有商品!";
	}

