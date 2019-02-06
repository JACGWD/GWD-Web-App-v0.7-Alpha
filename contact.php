<?php
require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");

// ---- PATHS ------ //
$graduatingStudentFolderName = NULL;

// ----- HEAD TAGS FOR SEO + SOCIAL ---- //
$canonical = NULL;
// Set URL to master copy of duplicate content

// Old School SEO
$title = "JAC GWD Main Contact Page";
$description = "Contact the John Abbott College Graphic &amp; Web Design department";
$keywords = "contact, john abbott college, graphic and web design department";


// Schema.org
$itempropName = $title;
$itempropDescription = $description;
$itempropImageURL = NULL;

// Twitter Cards  metadata
$TwitterCardType = "summary";
$TwitterPageTitle = $title;
$TwitterPageDescription = $description;
$TwitterImageURL = NULL;

// Facebook OpenGraph metadata
$OgTitle = $title;
$OgType = 'website';
$OgImage = NULL;
$OgDescription = $description;
$OgSiteName = "John Abbott College Graphic & Web Design department";
$OgSection = "department";
$OgArticleTag0 = "contact";
$OgArticleTag1 = NULL;
$OgArticleTag2 = NULL;
$OgArticleTag3 = NULL;

$ExtraHeaderCode = NULL;



// ----- BODY HEADER ---- //
$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically
$customHeaderTitle = NULL;
$customHeaderSubtitle = NULL;

// ----- NAVIGATION ---- //
$Highlight_Menu_item = "contact";


// ----- REST OF BODY ---- //
$h1 = "Contact the GWD department";
$MainClass = "home";
$raw_custom_sidebar = NULL;
$mainContentFile = "contact.html";

// ----- FOOTER ---- //
$ExtraFooterCode = NULL;

// ----- CHOOSE TEMPLATE ---- //
require ($rootTemplates_folder."page.php");
?>
