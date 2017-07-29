<?php require("C:\\xampp\\htdocs\\jtmorris-me\\resources\\php\\global\\global-variables.php");?>
<!doctype html>
<!-- thes website needs to ba a one page site for review from freecodecamp-->
  <html>
    <head>
      <title>home of JTMorris</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous" />
      <link rel="stylesheet" href="/resources/css/index/index.css" />
      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
      <!-- navigation -->
<!-- end navigation -->

<!-- paige container -->
<?php require($siteWideNavbar) ?>

  <!--top of page -->
  <a id="#page-top"></a>

<!-- end navigation -->

<div class="container" id="intro">
  <div class="row">
    <div class="col-md">
      <h1 class="text-center">Welcome to jtmorris.me</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-md">
      <p>Hi! My name is Jordan Morris and I am an aspiring web developer. This website is a collection of all the cool creations and practice projects that I will make on my way to web development stardom :) . I hope you enjoy all the things that I am sharing with you.</p>
    </div>
  </div>
</div>

  <!-- end intro -->


  <!-- begin examples -->
    <hr />
      <?php require($jtmorrisLearnsPHPDir . "jtmorris-learns-php.php");?>
     <!--end -content of jtmorris-learns-php -->

     <hr /> <!--divider-->
  <!-- end examples -->
  <!-- begin contact form -->
  <?php require($twoColContactFormWithMediaLinks) ?>
    <!-- end contact form -->
    <!--begin footer -->
  <?php require($footer); ?>

<!--end footer -->
    </body>

 </html>
