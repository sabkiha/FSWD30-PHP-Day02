<?php

 $viewer = getenv( "HTTP_USER_AGENT" );
 $browser = "An unidentified browser";

 if( preg_match( "/MSIE/i", "$viewer" ) )
 {
 $browser = "Internet Explorer";
 }
 else if( preg_match( "/Netscape/i", "$viewer" ) )
 {
 $browser = "Netscape";
 }
 elseif(preg_match('/Chrome/i', "$viewer"))
 {
 $browser = "Google Chrome"; 
 }
 else if( preg_match( "/Mozilla/i", "$viewer" ))
 {
 $browser = "Mozilla";
 }
elseif(preg_match('/Safari/i',"$viewer"))
 {
 $browser = "Apple Safari";
 }

 echo("You are using $browser");

if ($browser == "Mozilla") {
	echo("<html>
		<head>
        <title>PHP Day02 - Exercise 1 Mozilla</title>
        <link rel='stylesheet' href='mozilla.css'>
        </head>
        <body>
        <p>I am using Mozilla stylesheet</p>
        </body>
        </html>");
} elseif ($browser == "Google Chrome") {
	echo("<html>
		<head>
        <title>PHP Day02 - Exercise 1 Chrome</title>
        <link rel='stylesheet' href='chrome.css'>
        </head>
        <body>
        <p>I am using Chrome stylesheet</p>
        </body>
        </html>");
} else {
	echo("<html>
		<head>
        <title>PHP Day02 - Exercise 1 No CSS</title>
        </head>
        <body>
        <p>I am using no stylesheet</p>
        </body>
        </html>");
}

?>