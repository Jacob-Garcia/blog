<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<body>
	<?php
/* An action requiring the login-verify.php file */
	 require_once(__DIR__ . "/controller/login-verify.php");
/* An action reuqiring the header.php file */
     require_once(__DIR__ . "/view/header.php");
     if (authenticateUser()) {
     	require_once(__DIR__ . "/view/navigation.php");
     }
/* An action requiring the create-db.php file */
     require_once(__DIR__ . "/controller/create-db.php");
/* An action requiring the footer.php file */
     require_once(__DIR__ . "/view/footer.php");
/* An action requiring the read-posts.php file */
     require_once(__DIR__ . "/controller/read-posts.php");
	?>
</body>
</html>