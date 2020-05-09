<?php
session_start();
?>
<html>
	<head>
		<meta charset="utf-8"> 
	</head>
	<body>
		<?php
			$_SESSION = array();
			session_destroy();
			header("location:index.php");
		?>
	</body>
</html>