<?php
	session_start();
	if(!empty($_GET['id'])){
		$arrData = $_SESSION['shopcar'];
		//判断对应的商品ID信息
		if(in_array($_GET['id'],$arrData[0])){
			unset($arrData[0][$_GET['id']]);
			unset($arrData[1][$_GET['id']]);
			unset($arrData[2][$_GET['id']]);
			unset($arrData[3][$_GET['id']]);
			unset($arrData[4][$_GET['id']]);
			$_SESSION['shopcar'] = $arrData;
		}
		header('Location:spcar.php');
	}