
<!doctype html>
<html>
<head>
<title>Web App variables</title>
<style>p {font-family: monospace;}</style>
</head>

<body>

<?php
	require_once ($_SERVER["DOCUMENT_ROOT"])."/_web_app/config.php";
	// $_SERVER["DOCUMENT_ROOT"] does not add the trailing slash, we add it here first
	// the PHP command $_SERVER["DOCUMENT_ROOT"] returns the server name, such as https://www.graphicandwebdesign.ca

echo "<h1>Server Variables</h1>";
echo "<p><strong>SERVER[\"DOCUMENT_ROOT\"]: </strong>". $_SERVER["DOCUMENT_ROOT"] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER['PHP_SELF']\"]: </strong>". $_SERVER['PHP_SELF'] . "</p>"."\r\n";
echo "<p><strong>SERVER[\"\$_SERVER["DOCUMENT_ROOT"]\"]: </strong>". $_SERVER["DOCUMENT_ROOT"] . "</p>"."\r\n";

echo "<h1>App Paths</h1>";

echo "<p><strong>\$graduatingStudentFolderNameName: </strong>". $graduatingStudentFolderNameName  . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentName: </strong>". $graduatingStudentName  . "</p>"."\r\n";
echo "<p><strong>\$theme: </strong>". $theme  . "</p>"."\r\n";
if ($Enable_Normalize == True) {echo "<p><strong>\$Enable_Normalize: </strong> True";} else {echo "<p><strong>\$Enable_Normalize: </strong> False";} "</p>"."\r\n";
//                                               if ($a > $b) {echo "a is greater than b"; } else {echo "a is NOT greater than b";}

echo "<p><strong>\$DefaultHeaderTitle: </strong>". $DefaultHeaderTitle . "</p>"."\r\n";
echo "<p><strong>\$DefaultHeaderSubtitle: </strong>".  $DefaultHeaderSubtitle . "</p>"."\r\n";
echo "<p><strong>\$rootTemplates_folder: </strong>". $rootTemplates_folder . "</p>"."\r\n";
echo "<p><strong>\$rootIncludes_folder: </strong>". $rootIncludes_folder . "</p>"."\r\n";
echo "<p><strong>\$rootHTMLFolder: </strong>". $rootHTMLFolder . "</p>"."\r\n";
echo "<p><strong>\$rootImgFolder: </strong>". $rootImgFolder . "</p>"."\r\n";
echo "<p><strong>\$currentGradsFolder: </strong>". $currentGradsFolder . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNamePortfolio: </strong>". $graduatingStudentNamePortfolio . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNameHTMLFolder: </strong>". $graduatingStudentNameHTMLFolder . "</p>"."\r\n";
echo "<p><strong>\$graduatingStudentNameImgFolder: </strong>". $graduatingStudentNameImgFolder . "</p>"."\r\n";
?>
</body>
</html>
