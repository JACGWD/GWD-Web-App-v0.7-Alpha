<?php

// IE needs 512+ bytes: https://blogs.msdn.microsoft.com/ieinternals/2010/08/18/friendly-http-error-pages/

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Page Not Found</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        * {
            line-height: 1.2;
            margin: 0;
        }

        html {
            color: #888;
            display: table;
            font-family: sans-serif;
            height: 100%;
            text-align: center;
            width: 100%;
        }

        body {
            display: table-cell;
            vertical-align: middle;
            margin: 2em auto;
        }

		h1::before {
			background-image: url(/_web_app/themes/default/css/style_images/shock.png);
			background-size: cover;
			display: block;
			height: 200px;
			width: 200px;
			position: absolute;
			top: -260px;
			content: " ";
			left: calc(50% - 100px);
			margin-top: 50px;
			}

        h1 {
            color: #555;
            font-size: 2em;
            font-weight: 400;
			position: relative;
			overflow: visible;
/*			margin-top: 25px;*/
        }

        p {
            margin: 0 auto;
            width: 280px;
        }

        @media only screen and (min-width: 500px) {

            body, p {
                width: 95%;
            }

            h1 {
                font-size: 1.5em;
                margin: 0 0 2em 0;
            }

        }

    </style>
</head>
<body>
    <h1>Page Not Found</h1>
    <p>Sorry, but the page you were trying to view does not exist.</p>

<p style="margin-top:2em;">If you are a registered user of this site, please <br /><a href="https://community.graphicandwebdesign.ca/blogs/forums/forum/trouble-tickets/">file a trouble ticket in the private forum.</a>

    <p style="margin-top:2em;">In the meantime, <a href="https://community.graphicandwebdesign.ca/blogs/">you can visit our blog</a>.
</body>
</html>
