<?php

include "../php/header.php";
	
// Mail function
$othername = $_POST['othername'];

if(!empty($othername)) {

header( 'Location: ../php/form-error-page.php' ) ;


}else{
		
$to .= 'kevin@myriadcore.com' . ', ';
$to .= '';

$subject = 'New Message From Your Contact Form - Lead Received';
$m = "You have received a request for more information from . <br /><br /> Name = " . $_REQUEST['name'] . "\n\r";
$m .= " <br />Phone = " . $_REQUEST['phone'] . "\n\r";
$m .= "<br /> E-mail = " . $_REQUEST['email'] . " ";

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: WebForm <DoNotReply@MyriadCore.com>' . "\r\n";

$headers .= 'Cc: ' . "\r\n";



mail($to, $subject, $m, $headers);	
};


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>




<body>


<h1>Thank you <?php echo $_REQUEST['name'] ?> page goes here</h1>





</body>
</html>