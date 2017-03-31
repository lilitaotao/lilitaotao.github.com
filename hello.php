<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>document</title>
</head>
<body>
	<?php
		$strl="hello";
		echo "$strl";//双引号表示里面内容解析输出
		echo"<br>";//换行
		echo'$strl';
		echo"<hr>";
	define('PI',3.14);
	echo PI; 
	define('PI',3.14159);
	echo PI;
		
	echo __LINE__;
	ECHO "<HR>";
	echo __FILE__;
	ECHO '<HR>';
	echo __DIR__;
	echo '<hr>';
	$name ='lili';
	$pp ='name';
	echo $$pp;
	echo '<br>';
	echo 6/3;
	$num3=3;
	$num4=3;
	$num =$num3+$num4;
	echo "$num";
	echo '<br>';

	$num1=2;
	$num2=4;
	$num5 = $num1<$num2?($num1>$num2?100:200):100;
	echo $num5;
	$num7=7;
	if ($num7>8){
			echo "你好";
	}elseif ($num==7){
			echo "不好";
	}else{
			echo "很好";
		}

?>
<?php if (1>2) :?>
	<b><?php echo '你好';?></b>
<?php elseif(1==2) :?>
	<i><?php echo'你好';?></i>
<?php else:?>
	<b><?php echo'不好';?></b>
<?php endif?>

<?php if (2>3) {?>
	<b><?php echo'你好';?></b>
<?php elseif (4>3) ;{?>
	<i><?php echo'你好';?></i>
<?php }?>

</body>
</html>