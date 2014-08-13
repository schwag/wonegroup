<?php include "../php/header.php";?>
<pre>
	<?php
		$name = $_POST["name"];
		$email = $_POST["email"];
		$phone_number = $_POST["phone"];
		

		echo "{$name}: {$email}: {$phone_number}";
	?>
</pre>