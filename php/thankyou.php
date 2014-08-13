<?php 
	
// Mail function
$othername = $_REQUEST['othername'];

if(!empty($othername)) {

header( 'Location: ../php/form-error-page.php' ) ; 


}else{
		
$to .= 'rbardo@myriadcore.com' . ', ';
$to .= 'adam.yakish@myriadcore.com';

$subject = 'New Message From the ' . $_POST['form_submitted'];
$m = "You have received a request for more information from . <br /><br /> Name = " . $_REQUEST['name'] . "\n\r";
$m .= " <br />Phone = " . $_REQUEST['phone'] . "\n\r";
$m .= "<br /> E-mail = " . $_REQUEST['email'] . "\n\r";
$m .= "<br /> Message = " . $_REQUEST['message'] . "\n\r";

$m .= "<br /> From The = " . $_REQUEST['form_submitted'] . "\n\r";

$headers  = 'MIME-Version: 1.0' . "\r\n";

$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'From: WebForm <DoNotReply@MyriadCore.com>' . "\r\n";


mail($to, $subject, $m, $headers);	
};


?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    
    <link rel="stylesheet" href="../css/normalize.css">       
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/smoothhover.css">
    
    <link href='http://fonts.googleapis.com/css?family=Kite+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/styles-v2.css">

    
<style type="text/css">
#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	
#thankyou {background-image:url(../img/banner_moneyshot-ty.jpg); background-position:center top; background-size:cover; margin-top:50px; padding:175px 0;}

#thankyou .container {background-color:rgba(54,54,54,.9); color:#fff; border-radius:20px; padding-bottom:2em;}

#thankyou .container h2, #thankyou .container p {color:#fff;}

#thankyou .container h2 {font-weight:600;}

#waiting ul {margin:5em 0 0 0; padding:0;}

#waiting ul li {display:inline-block; min-width:200px; list-style:none; font-size:1.2em; color:#fff; background-color:#333; padding:0; margin-right:2%;}

#waiting ul li:hover {background-color:rgba(54,54,54,.8);}

#waiting a {display:inline-block; width:100%; height: auto; line-height:2; color:#fff; text-decoration:none; padding:.75em 2em;}

#waiting a:hover {color:#090;}


</style>
    
</head>



<body>

<?php include ('../php/nav_ty.php') ; ?>

<section id="thankyou">

    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
                <h2>Thank You <?php echo $_REQUEST['name'] ?> For Your Interest!</h2> 
               <h3>Someone from Myriad Core will be getting back to you with detailed information regarding your Request!</h3>
                
            </div>
        </div>
    </div>

</section>

<section id="waiting">

    <div class="container">
    
    	<div class="row">
            <div class="col-sm-10 col-sm-offset-1 text-center">
    
                <h2>
                While You Are Waiting To Hear Back From Us
                    <br />
                Have A Look At Our Website 
                </h2>
                
                <ul>
                	<li><a href="http://www.myriadcore.com/web-development/">Web Development</a></li>
                    <li><a href="http://www.myriadcore.com/web-intelligence/">Web Intelligence</a></li>
                    <li><a href="http://www.myriadcore.com/web-marketing/">Web Marketing</a></li>
                    <li><a href="http://www.myriadcore.com/blog/">Our Blog</a></li>
                </ul>
        
        	</div>
    	</div>
        
    </div>

</section>




        
        
</body>
</html>