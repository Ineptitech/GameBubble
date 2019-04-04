<?php
//Define session data file based on GET params passed through from index.html
$file = "session/" . $_GET['s'];
//Echo the contents of the session-appropriate file
echo file_get_contents($file);
?>