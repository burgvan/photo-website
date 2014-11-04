<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Raya Photography</title>
		<meta name="handheldfriendly" content="true">
		<meta name="mobileoptimized" content="240">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<link href="css/reset.css" rel="stylesheet">
		<link href="css/general.css" rel="stylesheet">
        <link href="css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
        <link href="css/carousel.css" rel="stylesheet">
		<script src="js/nav.js"></script>	        

    </head>

	<body> 
<?php include("includes/header.php")
?>
		<div class="main">
        	<div class="formwrapper">
            	<h2>Send Me a Shout</h2>
					<p>Requests or comments are strongly encouraged.</p>
                    <p>You can also e-mail me at: <a href="mailto:vanessa.burguete@gmail.com" style="color:#fff; text-decoration:underline;">raya@photostudio.com</a></p>
                <div class="formbox">
                    <form>
                        <div class="row half">
                            <div class="6u"><input type="text" id="name" class="text" name="name" placeholder="Name" /></div>
                            <div class="6u"><input type="text" id="email" class="text" name="email" placeholder="Email" /></div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <textarea name="message"id="message" class="text" placeholder="Message"></textarea>
                            </div>
                        </div>
                      <div class="submit">
                        <input type="submit" value="SEND MESSAGE" id="button"/>
                        <div class="ease"></div>
                      </div>
               	 </form>
               	</div>
            </div>
		</div><!--main ends here-->
        
<?php include("includes/bottomFooter.php")
?>           
        </body>
</html>
