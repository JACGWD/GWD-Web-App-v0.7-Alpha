<?php require ($_SERVER["DOCUMENT_ROOT"]."/_web_app/config.php");
// Fetch the configuration file


// LR Transporter Thumbnail Page Export Script v1.0




// Old School SEO
$title= "Thumbnail Gallery";
// Set the SEO meta title

$description= "Thumbnail Gallery";
// Set the SEO meta description

$keywords= NULL;




// SOCIAL SEO

// ====== GOOGLE+ ===== //

// Google+ Schema.org
$itempropName = NULL;
// title attribute of the Google+ rich snippet and should be limited to 140 characters.

$itempropDescription = NULL;
// description of the Google+ rich snippet and should be limited to 185 characters


$itempropImageURL = NULL;
// image of the Google+ rich snippet with an optimal size is 180 x 120. Google+ will shrink this image, but if it is too small it will not be displayed.


// ====== TWITTER ===== //
// SEE: https://dev.twitter.com/cards/types/summary

// Twitter Cards metadata

$TwitterCardType = 'gallery';
// The Twitter card type. Your options are summary, summary_large_image, gallery, photo, app, product or player.
// Summary is the default.
// Portfolio category pages should be set to the GALLERY Twitter Card type

$TwitterGalleryImage0 = NULL;
$TwitterGalleryImage1 = NULL;
$TwitterGalleryImage2 = NULL;
$TwitterGalleryImage3 = NULL;
// If your page type is a GALLERY
// Add four images from your page to add to the Twitter Gallery card.


$TwitterPageTitle = NULL;
// Title should be concise and will be truncated at 70 characters.

$TwitterPageDescription = NULL;
// A description that concisely summarizes the content of the page, as appropriate for presentation within a Tweet.
// Do not re-use the title text as the description, or use this field to describe the general services provided by the website.
// Description text will be truncated at the word to 200 characters.

$TwitterImageURL = NULL;
// URL to a unique image representing the content of the page.
// Do not use a generic image such as your website logo, author photo, or other image that spans multiple pages.
// The image must be a minimum size of 120px by 120px and must be less than 1MB in file size.
// For an expanded tweet and its detail page, the image will be cropped to a 4:3 aspect ratio and resized to be displayed at 120px by 90px.
// The image will also be cropped and resized to 120px by 120px for use in embedded tweets.



// ====== FACEBOOK OPENGRAPH ===== //
// SEE: https://developers.facebook.com/docs/sharing/best-practices


// Facebook OpenGraph metadata
$OgTitle = NULL;
// the title of the piece of content. You should use this as a headline that will appeal to the Facebook audience.
// It is ok to use a title different than the one in <title> as long as the message is ultimately the same.
// 95 characters max.

$OgType = "photograph";
// the type of object your piece of content is. Usually be blog, website or article.
// will default to article

$OgImage = NULL;
// This is the image that Facebook will show in the screenshot of the content.
// Be sure to specify a SQUARE IMAGE to ensure the best visibility in a user’s timeline.

$OgDescription = NULL;
// This is the description Facebook will show in the screenshot of the piece of content.
// 297 characters max.

$OgSection = "portfolio";
// The section of your website to which the article belongs, such as 'Lifestyle' or 'Sports'
// PDHT use should be 'web' or 'print' for example.

$OgArticleTag0 = NULL;
$OgArticleTag1 = NULL;
$OgArticleTag2 = NULL;
$OgArticleTag3 = NULL;
// A list of keywords relevant to the article, one tag per meta tag.


// END SOCIAL SEO



// START BODY HTML

$ExtraHeaderCode = NULL;
// If you need to add code to the <head> add it here inside single quotation marks: $ExtraHeaderCode = 'something';


$HeaderTitle = NULL;
// Changes the default <header> tag first line text from your name to something else

$HeaderSubtitle = NULL;
// Changes the default <header> tag second line text from the default to something else

$Highlight_Menu_item= NULL;
// Choose the parent menu item to highlight in the navigation bar
// Match the class name with the classes used in /_web_app/theme/inc/nav.php

$BodyClass = NULL;
// Add class names you want added to the <body> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$MainClass = NULL;
// Add class names you want added to the <main> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$HeaderClass = NULL;
// Add class names you want added to the <header> tag.
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$h1 = NULL;
// Text to be added to the H1 tag


$raw_top_main_content = NULL;
// Add HTML content above the set of thumbnails.

$ThumbFigureClass = NULL;
// Add class names you want added to the <figure> tag (in this case, the one in /_web_app/theme/templates/thumbnails.php).
// Simply add one or several words in quotation marks: 'classname1 classname2'
// class="..." will be added automatically

$thumbnails = array
  (

// MIDDLE TRANSPORTER CELL START

// $title=  title ;
// $description=  caption ;
// $keywords=  keywordTagsForExport ;
// $imageSerial= fileNameNoExtension;
// $imageSerialext= fileName ;
// copyName


array (
		'thumb_css_class' => NULL,  // Add a CSS class to a specific thumbnail <figure> tag.
        'thumb_image_default' => "{copyName}-{fileNameNoExtension}_600px.jpg",
		// Default is the same as 1x - but without the 400w.
		'thumb_image_1x' => "{copyName}-{fileNameNoExtension}_192px.jpg 192w",   // smallest thumbnail of picture #1 | filename.extension + space + pixel width + w (for "width")
		'thumb_image_1.5x' => "{copyName}-{fileNameNoExtension}_288px.jpg 288w",  // medium size thumbnail of picture #1
		'thumb_image_2x' => "{copyName}-{fileNameNoExtension}_600px.jpg 600w",  // large size thumbnail of picture #1
		'thumb_image_3x' => "{copyName}-{fileNameNoExtension}_900px.jpg 900w",  // large size thumbnail of picture #1
		'thumb_sizes' => NULL,   // Leave NULL to use default values from config.php
  	'thumb_alt' => "{caption}",  // Add alt text for SEO, the visually impaired and for validation
		'thumb_caption' => "{title}",   // Add text for the <figcaption> text below the thumbnail
		'highres_link' => "/fine-art-print-portfolio/{copyName}-{fileNameNoExtension}.php"),    // Path to the detail page of this art work

// MIDDLE TRANSPORTER CELL END



);

$raw_bottom_main_content = NULL;
// Add HTML content below the set of thumbnails.


$raw_custom_sidebar = NULL;
// If you need a custom sidebar, add the HTML here. The <aside> tag is automatically added.

$ExtraFooterCode = NULL;
// If you need to add code just before </body> add it here inside single quotation marks: $ExtraFooterCode = 'something';


require ($templates_folder."thumbnails.php");
// Call the template last to insert the above values into it.

?>
