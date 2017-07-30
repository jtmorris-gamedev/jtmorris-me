<?php
//author: Jordan Morris
//date created: 7/29/2017
//purpose: script that generates html for the jtmorris.me/index.php

//this file should generate a bootstrap v4 two coulmn layout containeing each of the 38 links to the relative chapter pages.
//page naming scheme take the chapter names from the book and replace spaces with dashes
//this file should also conform to generating a single page website;
  require_once("C:\\xampp\\htdocs\\jtmorris-me\\resources\\php\\global\\global-variables.php");
$introductoryParagraphs = "this is an introductory Paragraph.";
$chapterCommentary = "this is a commentary paragraph about the chapter";
$problemsToSolve="this is a problem to solve";
$problemCodeSamples = "this is a code sample to be solved";
$problemCommentaryParagraph= "these are the problems I faced solving this problem";
$solutionintroductoryParagraphs = "this is the introductory to the solution I came up with while solving this problem";
 ?>

<?php
  //$book is currently a global variable in global-variables.php
  //generate chapter list.
    $NUM_COLUMNS=2;
    $NUM_ITEMS_PER_COLUMN = count($book)/$NUM_COLUMNS;
    $fileExtension="";
    $outputString="";
    $baseUrl="";
    $outputString = $outputString . " <div class=\"container\" id=\"jtmorris-learns-php\"><div class=\"row\" id=\"chapter-list\">";
    //$baseUrl= $jtmorrisMeLearnsPHPDir;


   for($column = 0; $column < $NUM_COLUMNS; $column++){
     $outputString=$outputString . "<div class=\"col-md\"><ul>";
     for($chapterNum = $NUM_ITEMS_PER_COLUMN*$column; $chapterNum < $NUM_ITEMS_PER_COLUMN*($column+1)&& $chapterNum < count($book); $chapterNum++){
       $pageNameBase = strtolower(str_replace(" ", "-", $book[$chapterNum]));
       $finalUrl=$baseUrl.$pageNameBase.$fileExtension;
       $outputString = $outputString . "<li><span class=\"chapter-items\">Chapter " . ($chapterNum+1) . "</span>&#58;&nbsp;<a href=\"#".$finalUrl."\">".$book[$chapterNum]."</a></li>";
     }
     $outputString= $outputString . "</ul></div>";

   }
    $outputString= $outputString . "</div></hr>";//end of section
  ?>

  <?php
  for($currentChapter=0;$currentChapter < count($book); $currentChapter++){
    //setup bootstrap
    $outputString = $outputString . "<a id=\"" . strtolower(str_replace(" ", "-", $book[$currentChapter]))  . "\"></a>";
    $outputString = $outputString . "<div class=\"row\">";
    $outputString = $outputString . "<div class=\"col-md\">";
    //print title
    $outputString = $outputString . "<h2>". $book[$currentChapter] . "</h2>";
    //print overview paragraph
    $outputString= $outputString . "<p class=\"section-intro-paragraph\">" . $introductoryParagraphs . "</p>";
    $outputString= $outputString . "<p>" . $problemsToSolve . "</p>";
    $outputString= $outputString . "<code>" . $problemCodeSamples . "</code>";
    $outputString= $outputString . "<p>" . $problemCommentaryParagraph ."</p>";
    //problem to solve paragraph or section
    //how i solved the problem section
    //commentary section

    //close bootstrap scaffolding
    $outputString = $outputString."</div></div><hr class=\"jtmorris-learns-php-chapter-divider\">";

  }
  $outputString= $outputString ."</div>";
  echo($outputString);

  //create layout for content here.
  //so lets start with the creation of the content that will go into the layout
  // for each chapter in the book, I want a title introducing the chapters. I want each section to be devided into a new row
  //for each section i want a place to talk about the excersize as well as a place to demonstrate code in action.
  //while talking about  each section, I want to share my experiences: the problems I had, how I solved them, and the code that I used to solve the problem.
  //for each section I want an anchor tag to allow my users to navigate through the webpage more easily.

?>
