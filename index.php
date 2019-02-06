<?php
require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");

// ---- PATHS ------ //
$graduatingStudentFolderName = NULL;

// ----- HEAD TAGS FOR SEO + SOCIAL ---- //
$canonical = NULL;
$title = NULL;
$description = NULL;
$keywords = NULL;
$Highlight_Menu_item = "home";
$TwitterCardType = "summary";


// ----- BODY ---- //
$h1 = "JAC Graphic &amp; Web Design department";
$MainClass = "home";
$raw_custom_sidebar = NULL;
$mainContentFile = "000-0001.html";

// ----- TEMPLATE ---- //
require ($rootTemplates_folder."page.php");
?>
