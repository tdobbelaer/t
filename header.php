<!--
#################################
#### Copyright Tim Dobbelaer ####
####		2014/2015		 ####
#################################
-->
<?php
session_start();

// Get the page of visitor for refreshing
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$test = '.UTF-8';
$language = $_SESSION['language'].$test;

// Set language to German
putenv('LC_ALL=$language');
setlocale(LC_ALL, $language);

// Specify location of translation tables
bindtextdomain("message", "./locale");

// Choose domain
textdomain("message");

// Translation is looking for in ./locale/de_DE/LC_MESSAGES/laguage.mo eg:[de_DE] now


  if( $_GET["name"] )
  {
    $_SESSION['language'] = $_GET['name'];
	header("Refresh:0; url=$actual_link");
  }
  

?>
