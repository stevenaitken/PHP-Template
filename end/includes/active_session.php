<?php
/* if you are working with PHP sessions they must be the first entry on a web page starting at line 1 */
if(isset($_SESSION['username']))  
{  
  echo "Active session found";
} 

else {
    echo "Don't see a session";
}

?>