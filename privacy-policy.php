<?php
require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");

// ---- PATHS ------ //
$graduatingStudentFolderName = NULL;

// ----- HEAD TAGS FOR SEO + SOCIAL ---- //
$canonical = NULL;
// Set URL to master copy of duplicate content

// Old School SEO
$title = "JAC GWD Privacy Policy";
$description = "Privacy policy for the the John Abbott College Graphic &amp; Web Design department community blog & forums site.";
$keywords = "privacy, policy,  john abbott college, graphic and web design departmen";


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
$OgArticleTag0 = "privacy policy";
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
$Highlight_Menu_item = "home";


// ----- REST OF BODY ---- //
$h1 = "Privacy Policy";
$MainClass = "home";
$raw_custom_sidebar = NULL;
$mainContentFile = "privacy-policy.html";

// ----- FOOTER ---- //
$ExtraFooterCode = NULL;

// ----- CHOOSE TEMPLATE ---- //
require ($rootTemplates_folder."page.php");
?>
