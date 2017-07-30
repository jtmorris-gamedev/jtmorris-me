<div class="row" id="chapter-list-container">
<?php
require_once("C:\\xampp\\htdocs\\jtmorris-me\\resources\\php\\global\\global-variables.php");
//$book is currently a global variable in global-variables.php

  $NUM_COLUMNS=2;
  $NUM_ITEMS_PER_COLUMN = count($book)/$NUM_COLUMNS;
  $fileExtension="";
  $outputString="";
  $baseUrl="";
  //$baseUrl= $jtmorrisMeLearnsPHPDir;
//author: Jordan Morris
//date created: 7/29/2017
//purpose: script that generates html for the jtmorris.me/index.php

//this file should generate a bootstrap v4 two coulmn layout containeing each of the 38 links to the relative chapter pages.
//page naming scheme take the chapter names from the book and replace spaces with dashes
//this file should also conform to generating a single page website;

 for($column = 0; $column < $NUM_COLUMNS; $column++){
   $outputString=$outputString . "<div class=\"col-md\"><ul>";
   for($chapterNum = $NUM_ITEMS_PER_COLUMN*$column; $chapterNum < $NUM_ITEMS_PER_COLUMN*($column+1)&& $chapterNum < count($book); $chapterNum++){
     $pageNameBase = strtolower(str_replace(" ", "-", $book[$chapterNum]));
     $finalUrl=$baseUrl.$pageNameBase.$fileExtension;
     $outputString = $outputString . "<li><span class=\"chapter-items\">Chapter " . ($chapterNum+1) . "</span>&#58;&nbsp;<a href=\"#".$finalUrl."\">".$book[$chapterNum]."</a></li>";
   }
   $outputString= $outputString . "</ul></div>";
 }
 echo($outputString);
?>
 </div>
