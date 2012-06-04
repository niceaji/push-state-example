<?
$pjax = ($_SERVER['HTTP_X_PJAX']==="true");


if($pjax){
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