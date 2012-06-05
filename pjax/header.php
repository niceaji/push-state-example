<?
//공통 header

//문서 호출시에 request header에 넣어주는 값으로 pjax인지 체크
$pjax = ($_SERVER['HTTP_X_PJAX']==="true");


if($pjax){
	//타이틀 변경하기 위해서
	echo "<title>{$title}</title>";
	return;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8" />
    <title><?=$title?></title>
    <style>
    #main {background-color:#eee;padding:10px;}
    </style>
</head>
<body>

<h1>pjax</h1>


<ul>
	<li><a href="pjax.php">pjax.php</a></li>
	<li><a href="a.php">a.php</a></li>
	<li><a href="b.php">b.php</a></li>
</ul>


<div id="debug"></div>

<div id="main">