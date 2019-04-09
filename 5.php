<html>
	<head>
		<title>Passing Arguments by Reference</title>
	</head>
	<body>
		<?php
		function addFive($num){
		$num+=5;
		}
		function addSix(&$num){
		$num+=6;
		}
		$orignum=10;
		addFive($orignum);
		echo "Original value is $orignum<br/>";
		addSix($orignum);
		echo "Original value is $orignum<br/>";
		?>
	</body>
</html>
