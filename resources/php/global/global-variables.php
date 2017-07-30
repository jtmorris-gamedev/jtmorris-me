<?php
  /*
    author: Jordan Morris
    date created: 7/29/2017
    filename:global-settings.php
  */
$fileDocumentRoot="C:\\xampp\\htdocs\\jtmorris-me\\";
$localhostIPAddr="127.0.0.1";
$httpDocumentRoot="http://localhost/";
$fileResourceDir= $fileDocumentRoot . "resources\\";
$httpResourceDir= $httpDocumentRoot . "/resources";
$cssDir = $httpResourceDir . "/css/";
$imgDir = $httpResourceDir . "/img/";
$jsdir  = $httpResourceDir . "/js/";
$phpResourceDir = $fileResourceDir . "php\\";
$phpGlobalResourceDir = $phpResourceDir ."global\\";

// these variables shorten the amount of concatination that I have to do on every page.
$siteWideNavbar = $phpGlobalResourceDir . "site-wide-navbar.php";
$footer = $phpGlobalResourceDir . "footer.php";
$twoColContactFormWithMediaLinks = $phpGlobalResourceDir . "two-col-contact-form-with-media-links.php";

$multipageWebsite=false; // generate this website as a multipage or signle page website.


//some more common static variables. when OOP is introduced and I play with it enough, I will most likely redesign the website's code again.
$jtmorrisLearnsPHPDir = $fileDocumentRoot . "jtmorris-learns-php\\";
$book= array(
  "Introducing PHP",
  "Configuring My Enviornment",
  "PHP Basics",
  "Functions",
  "Arrays",
  "Object Oriented PHP",
  "Advanced OOP Features",
  "Error and Exception Handling",
  "Strings And Regular Expressions",
  "Advanced OOP Features",
  "Working with the File and Operating System",
  "PEAR",
  "Date and Time",
  "Working With HTML Forms",
  "Authenticating Your Users",
  "Handling File Uploads",
  "Networking",
  "PHP and LDAP",
  "Session Handlers",
  "Templating with Smarty",
  "Web Services",
  "Securing your Website",
  "Creating Ajax-enhanced Features With jQuery and PHP",
  "introducing the Zend framework",
  "Introducing MySQL",
  "Installing and Configuring MySQL",
  "The Many SQL Clients",
  "MySQL Storage Engines and Data Types",
  "Securing MySQL",
  "Using PHP with MySQL",
  "Introducing PDO",
  "Stored Routines",
  "MySQl Triggers",
  "MySQL Views",
  "Practical Database Queries",
  "Indexes and Searching",
  "Transactions",
  "importing and Exporting Data"
  );
 ?>
