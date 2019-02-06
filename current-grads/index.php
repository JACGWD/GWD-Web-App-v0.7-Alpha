<?php

require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");

// ---- PATHS ------ //
$graduatingStudentFolderName = NULL;

// ----- HEAD TAGS FOR SEO + SOCIAL ---- //
$canonical = NULL;
$title = "2019 Graduating class of John Abbott College's GWD department";
$description = "Portfolios by the 2019 Graduating class of John Abbott College's Graphic & Web Design department";
$keywords = "John Abbott College,Graphic and Web Design,graduates,students,Montreal,West Island";
$Highlight_Menu_item = "home";
$TwitterCardType = "summary";


// ----- BODY ---- //
$h1 = "JAC Graphic &amp; Web Design department";
$MainClass = "home";
$raw_custom_sidebar = NULL;
$mainContentFile = "current-grads.html";

// ----- TEMPLATE ---- //
require ($rootTemplates_folder."page.php");
?>
