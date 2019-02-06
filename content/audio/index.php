<?php

require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");

$redirectTo = "index.php";
// force users to go to home page instead of page we don't want them to see here
// $redirectTo points to "https://www.graphicandwebdesign.ca"
// add the path to the file you want to redirect to in between the "": "/folder/file.php"
// default is home page

require ($rootTemplates_folder."redirect.php");

?>
