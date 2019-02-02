<?php require ("/home/pdhtorg/_web_app/config.php");
// Old School SEO
$title="Error Sending Message";

$description="Sorry, but there was an error in filling out your form.";

// Google+ Schema.org
$itempropName = NULL;
                
$itempropDescription = NULL;
        
$itempropImageURL = NULL;
            
// Twitter Cards  metadata	    
$TwitterCardType = NULL;
        
$TwitterPageTitle = NULL;
        
$TwitterPageDescription = NULL;
                
$TwitterImageURL = NULL;

// Facebook OpenGraph metadata
$OgTitle = NULL;
        
$OgType = NULL;
                
$OgImage = NULL;
        
$OgDescription = NULL;
        
$OgSiteName = NULL;
        
$OgSection = NULL; 
        
$OgArticleTag0 = NULL;  
$OgArticleTag1 = NULL;  
$OgArticleTag2 = NULL;  
$OgArticleTag3 = NULL;  
// End SEO + Social

$ExtraHeaderCode = NULL;

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderTitle = NULL;
$HeaderSubtitle = NULL;

$Highlight_Menu_item="contact";

$h1 = "Ooops! Something went wrong!";

$raw_main_content = '<p>Please go <a href="javascript:history.back()">back</a> and complete the form properly.</p>'; 

$raw_custom_sidebar = NULL;

$ExtraFooterCode = NULL;

require ($templates_folder."page.php");
 
?>