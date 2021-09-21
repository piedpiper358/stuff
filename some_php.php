<html>
<body>

<form method = "post" action = "">
<input type = "text" name = "a" value = "<?php echo $_POST["a"] ?>">
<input type = "text" name = "b" value = "<?php echo $_POST["b"] ?>">

<input type = "submit" value = "send">

</form>

<?php
	
	$a = $_POST["a"];
	$b = $_POST["b"];
	
	echo $a + $b;
	
	/*
	if(isset($_GET["a"]) && isset($_GET["b"]))
	{
		echo $_GET["a"] + $_GET["b"];
	}
	
	/*	
	$a = array(1,2,3);
	$b = array(
		"name" => "Vlad",
		"type" => "Pidor"
	);
	

	
	foreach($b as $k => $v)
	{
		echo $k . " " . $v . "<br />";
	}
	
	$c = 5;
	
	$d = '$c';
	
	echo $d . "<br>";
	
	$d = "$c";
*/