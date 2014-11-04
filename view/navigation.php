<?php
/* An action that requires the config.php file */
require_once(__DIR__ . "/../model/config.php");
?>
<nav>
  <ul>
    <li>
   	  <a href="<?php echo $path . "post.php";/* Ths echo calls the $path variable, and the "post.php" is called to display it when the link is clicked. */ ?>">Blog Post Form</a>
    </li>
  </ul>
</nav>


