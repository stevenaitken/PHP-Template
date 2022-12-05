<?php

switch(basename($_SERVER['PHP_SELF'])){ //return the trailing name of the pathname
	
	case "index.php":	
		$page_title = "Home page";
		$meta_desc = "This is some information about the home page.";
		break;

	case "about.php":
		$page_title = "About Us";
		$meta_desc = "Read more about us here.";
		break;

	case "contact.php":
		$page_title = "Contact";
		$meta_desc = "Get in touch with us.";
		break;
}

?>
