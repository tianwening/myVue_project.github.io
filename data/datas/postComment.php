<?php
	$content = $_GET["content"];
	//获取评论的相关json文件
	$comments = file_get_contents("./comments.json");
	//将获取到的json文件转成为php语言当中的数组格式
	$arr = json_decode($comments);
	// 遍历评论列表
	forEach($arr as $key=>$value){
		// 如果评论列表里面的相关列表id等于传过来的id，则进行下一步处理
		if(json_encode($value->id)==$_GET["id"]){
			// 将创建的json格式评论转化成为php中的格式，并添加到相关列表的开头
			echo json_encode($value->messages);
		}
	}
?>