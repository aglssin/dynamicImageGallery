<?php
error_reporting( E_ALL );
ini_set( "display_errors", 1 );
return "<!doctype html> 
<html>
<head>
<title>$pageData->title</title>
<meta http-equiv='Content-Type' content= text/html;charset=utf-8'></meta>
$pageData->css
</head>
<body>
$pageData->content
</body>
</html>"
?>