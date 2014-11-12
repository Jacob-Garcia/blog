<?php
   /* Variables that contain the information to recieve blog posts */
   $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
   $post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
   /* Echoes to call out the variables */
   echo "<p>Title: $title</p>";
   echo "<p>Post: $post</p>";