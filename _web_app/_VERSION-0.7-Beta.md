# GWD Portfolio app
Demo for pedagogical purposes | MIT  
Version 0.7 Beta

## Change History


### v0.7 Alpha | January 2019  
- PHP to HTML 5 port from the 0.66Beta Simple Web App.  
- Changed license to MIT. See license.md  
- Basic text files are now in Markdown format (.md).
- Removed picturefill.js see: https://caniuse.com/#feat=srcset
- Moved web_app to outside of the root folder for added security
- Updated documentation files
- Renamed /media folder to /content
- Added content/html folder for containing html data as if it was a database request
- Replaced the complex include of page content with fopen() to pull an html page from /content/html

### v0.66 Beta | March 6, 2015  
- Changed 'dpi' units in media queries within style.css to 'dppx' units. Because in CSS 'dpi' means dots-per-CSS-inch, not dots-per-physical-inch, so does not correspond to the actual 'dpi' of a screen.  
- Added pixel density 3 media queries for iPhone 6+ within style.css.  
- Enabled absolute URLs for pagination. Added $CurrentServer function and variable.  
- Added valid sizes attribute in srcset.  
- Enabled better PHP error reporting.  
- Moved email configuration from sendmail.php to config.php.  
- Added sections and comments in config.php  
- Added TRUE / FALSE switch to enable Normalize.css instead of simple-css-reset.css in config.php.  

### v0.65 | February 9, 2015  
- Edited inc/header.php to remove hard coded w15_eportfolio folder name and replaced with $currentGradsFolder variable.
- Added Retina media queries to new default.css.
- Added multiple theme support.

### v0.64 | February 3, 2015 
- Added customizeable class for thumbnails figure tag on an individual tag basis.

### v0.63 | February 2, 2015  
- Added if/else check to add extra classes to the figure tag: both thumbnail and highres.
- Added HeaderClass to <header>.
- Removed flash-portfolio-item.php (same as page.php).
- Moved comments to content pages instead of _documentation.
- Deleted commented php folder from _documentation.

### v0.62 | January 30, 2015  
- Added if/else check for pagination.
- Previous/Next links will not appear if the variable is set to NULL.

### v0.61 | January 21, 2015  
- Add hooks for classes for <body> and <main>.
- Set most variables to NULL.
- Updated documentation.


### v0.6 | January 20, 2015  
- Prepare for Beta release.
- Added pagination metatags and <div class="pagination"> on portfolio-item.php.
- Moved $OgURL and $OgSiteName variable definitions to config.php because they do not need to be set on a page per page basis.

### v0.5 | January 17, 2015  
- Added Social + SEO compatibility for Schema.org, Facebook OpenGraph, Google Authorship and Twitter Cards.
- Reorganized _documentation folder.
- Added social sharing feature to default sidebar.
- Add if/then check for 'gallery' Twitter Card type for thumbnails.php that adds 4 meta name="twitter:image0" links when the card type is "gallery".
- Whitelisted eportfolio.pdht.ca for both 'gallery' and 'summary' Twitter Cards.


### v0.4 | January 15, 2015  
- Added compatibility for Flash content to the page template.
- Added hooks to add custom content into the <head> or just above </body>.
- Added documentation for content pages.


### v0.32 | January 12, 2015  
- Moved addslash / stripslash functionalities to templates instead of content pages.
- Renamed variables for easier reading and comprehension.
- Add commented template pages to _documentation.
- Added functionality to automatically add <aside> to custom sidebar.


### v0.31 | January 11, 2015  
- Created _web_app/theme/template folder, moved templates, and edited associated file names and paths.
- Added if/else check for custom sidebar.


### v0.3 | January 10, 2015  
- Added extensive comments to all code pages.
- Added license, version and read me files.
- Added if/else check for custom high-res image size.
- Application almost ready for distribution.


### v0.2 | December 17, 2014  
- Added PHP foreach loop in thumbnails template with help from PDHT grads James Mann and Josh Abadi.


### v0.1 | December 16, 2014  
- Ported previous HTML eportfolio code to web app.
- Tested all functions and pages for rendering.
