<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<h1>Create Blog Post</h1>

 <form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
   <!-- A div that contains the Title label and the input text type. -->
 	 <div>
 	 	<label for="title">Title: </label>
 	 	<input type="text" name="title"  />
 	 </div>
   <!-- A div that contains the label for Post and the textarea name -->
 	 <div>
 	  	<label for="post">Post: </label>
 	  	<textarea name="post"> </textarea>
 	 </div>
   <!-- a div containing the button used to Submit -->
 	 <div>
 	 	 <button type="submit">Submit</button>
 	 </div>
 </form>