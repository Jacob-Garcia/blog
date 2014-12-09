<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Register</h1>

<form method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
<!-- Individual divs to hold labels and input types for Email, Username, and Password. -->
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email"/>
    </div>

    <div>
        <label for="username">Username:</label>
        <input type="text" name="username"/>
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password"/>
    </div>

    <div>
    	<button type="submit">Submit</button>
    	<!-- A button to submit the information entered in the form. -->
    </div>
</form>