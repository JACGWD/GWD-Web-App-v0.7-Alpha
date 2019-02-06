<?php
// *************   START CONFIGURABLE SECTION  *************** //

error_reporting(E_ALL);
	ini_set('display_errors', 1);
	// DELETE ABOVE TWO LINES WHEN THE WEB SITE IS FINISHED



$graduatingStudentFolderNameName = "yourfirstname-lastname/";
// firstname-lastname (all lowercase), with trailing slash

$graduatingStudentName = "John Smith";
// When we need to print your name on a page, such as in the footer

$theme = "default";
// Set the folder name of your theme from _web_app/theme/. Call it whatever you like.
// set your student folder & name above

$Enable_Normalize = FALSE;
	// By default, we use the simple-css-reset.css (based on Eric Meyer's reset v2.0).
	// Default is FALSE.
	// If you want to use Nicolas Gallagher's normalize.css (an industry standard, but less beginner-friendly) set to TRUE.
  // Set the DEFAULT text inside the <header> tag to your name. You can customize per page on each page. Add text inside quotation marks.


// *****************  HEADER TYPOGRAPHY CONTENTS **************** //

$DefaultHeaderTitle = "John Abbott College";
$DefaultHeaderSubtitle = "Graphic &amp; Web Design department";
// Set the DEFAULT subtitle text inside the <header> tag. You can customize per page on each page.


// *****************  RESPONSIVE IMAGES **************** //


$defaultSrcSetSizes = "(max-width: 64em) 100vw, (min-width: 64em) 45vw, (min-width: 100em) 30vw";
// $defaultSrcSetSizes = "(max-width: 48em) 50vw, 20vw";
// $defaultSrcSetSizes = "(max-width: 48em) 50vw, (max-width: 64em) 33vw, (max-width: 85.375em) 28.57vw, (max-width: 100em) 20.5vw, (min-width: 120em) 15vw";
// $defaultSrcSetSizes = "(max-width: 64em) 100vw, (min-width: 64em) 45vw, (min-width: 100em) 30vw";
// Set the DEFAULT size of your THUMBNAILS here.
// The srcset sizes attribute uses media queries and "vm" units (percentages of the width of the viewport, ie entire screen).
// Adjust values according to your design.




	// *****************  SOCIAL MEDIA ACCOUNTS **************** //


// Social media Profiles and Pages

$FacebookProfile = NULL;
// Add the username of your personal Facebook profile
// ie ericgirouard3

$FacebookID = NULL;
// Add the ID number of your personal Facebook account
// Use: http://findmyfacebookid.com/

$FacebookPage = NULL;
// Add the title of your Facebook PAGE
// ie heliomedia

$TwitterHandle = "@jacgwd";
// Add your Twitter name
// ie @eric_girouard

$OgURL = getCurrentUrl();

// $OgSiteName = 'PDHT 2015 graduate eportfolio | Work by '. $graduatingStudentName;
$OgSiteName = NULL;



// *************   EMAIL SECTION  *************** //

$mailto = 'ericg@johnabbott.qc.ca' ;
$subject = "Comment from eportfolio Visitor" ;
$formurl = "/contact.php" ;
$thankyouurl = "/contact/thank-you.php" ;
$errorurl = "/contact/error.php" ;

// *************   END EMAIL SECTION  *************** //





// *************   END CONFIGURABLE SECTION  *************** //





// *************   DO NOT EDIT BELOW THIS LINE  *************** //

// Set the paths to the folders

//$MyPortfolio = $_SERVER["DOCUMENT_ROOT"].$currentGradsFolder. $graduatingStudentFolderName ;
//$templates_folder = $MyPortfolio."_web_app/theme/" . $theme . "/templates/";
//$includes_folder = $MyPortfolio."_web_app/theme/" . $theme . "/inc/";


// $rootTemplates_folder = $_SERVER["DOCUMENT_ROOT"] . "/../../_web_app/themes/" . $theme . "/templates/";
// $rootIncludes_folder = $_SERVER["DOCUMENT_ROOT"] . "/../../_web_app/themes/" . $theme . "/inc/";
// $rootHTMLFolder =  $_SERVER["DOCUMENT_ROOT"]."/content/html/";
// $rootImgFolder = $_SERVER["DOCUMENT_ROOT"]."/content/img/";

$rootTemplates_folder = $_SERVER["DOCUMENT_ROOT"] . "/_web_app/themes/". $theme . "/templates/";
$rootIncludes_folder = $_SERVER["DOCUMENT_ROOT"] . "/_web_app/themes/". $theme . "/inc/";
$rootHTMLFolder =  $_SERVER["DOCUMENT_ROOT"] ."/content/html/";
$rootImgFolder = $_SERVER["DOCUMENT_ROOT"] . "/content/img/";

// $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server name, such as https://www.graphicandwebdesign.ca

$currentGradsFolder = $_SERVER["DOCUMENT_ROOT"]."/current-grads/";
$graduatingStudentNamePortfolio = $currentGradsFolder . $graduatingStudentFolderNameName;
$graduatingStudentNameHTMLFolder = $graduatingStudentNamePortfolio ."content/html/";
$graduatingStudentNameImgFolder = $graduatingStudentNamePortfolio ."content/img/";


/**
     * Get the current Url taking into account Https and Port
     * @link http://css-tricks.com/snippets/php/get-current-page-url/
     * @version Refactored by @AlexParraSilva
*/
    function getCurrentUrl() {
        $url  = isset( $_SERVER['HTTPS'] ) && 'on' === $_SERVER['HTTPS'] ? 'https' : 'http';
        $url .= '://' . $_SERVER['SERVER_NAME'];
        $url .= in_array( $_SERVER['SERVER_PORT'], array('80', '443') ) ? '' : ':' . $_SERVER['SERVER_PORT'];
        $url .= $_SERVER['REQUEST_URI'];
        return $url;
    }


function getCurrentServer() {
			if(isset($_SERVER['HTTPS']))
			{$http_type = 'https://' . $_SERVER['HTTP_HOST'] . "/";}
			{$http_type = 'http://'. $_SERVER['HTTP_HOST'] . "/";}
			return $http_type
			;}

	$CurrentServer = getCurrentServer();
?>
