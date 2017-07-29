<!doctype html>
  <html>
    <head>
      <title>jtmorris-gamedev home</title>
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

<nav class="navbar sticky-top navbar-toggleable-sm navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">jtmorris.me</a>
   <div class="collapse navbar-collapse float-lg-right" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="#page-top">page top</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#jtmorris-learns-php">jtmorris learns php</a>
        </li>

      </ul>
    </div>
  </nav>
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
    <div class="container" id="examples-container">
      <div class="row">
        <a id="#jtmorris-learns-PHP"></a>
        <div class="col-sm">
          <h3>jtmorris learns php</h3><br />
          <p>Join me as I follow along with the book &quot;<i>Beginning PHP and MySQL from Novice to Professional 4th Edition&#58;</i>&quot; by W. Jason Gilmore. ISBN-13: 978-1-4302-3114-1
        </div>
      </div>
      <!-- im thinking of a 2-3 colum unordered or ordered list of links traversing the excersices I am going to do. maybe include a short discription of what it is? -->
      <!-- decided to split the excercises up by chapter. 38 chapters total. -->
      <div class="row">
         <div class="col-md">
           <ul>
             <li><a>Chapter 1: Introducing PHP</a></li>
             <li><a>Chapter 2: </a></li>
             <li><a>Chapter 3: </a></li>
             <li><a>Chapter 4: </a></li>
             <li><a>Chapter 5: </a></li>
             <li><a>Chapter 6: </a></li>
             <li><a>Chapter 7: </a></li>
             <li><a>Chapter 8: </a></li>
             <li><a>Chapter 9: </a></li>
             <li><a>Chapter 10: </a></li>
             <li><a>Chapter 11: </a></li>
             <li><a>Chapter 12: </a></li>
             <li><a>Chapter 13: </a></li>

           </ul>
         </div>
         <div class="col-md">
           <ul>

             <li><a>Chapter 14: </a></li>
             <li><a>Chapter 15: </a></li>
             <li><a>Chapter 16: </a></li>
             <li><a>Chapter 17: </a></li>
             <li><a>Chapter 18: </a></li>
             <li><a>Chapter 19: </a></li>
             <li><a>Chapter 21: </a></li>
             <li><a>Chapter 22: </a></li>
             <li><a>Chapter 23: </a></li>
             <li><a>Chapter 24: </a></li>
             <li><a>Chapter 25: </a></li>
             <li><a>Chapter 26: </a></li>

           </ul>
         </div>
         <div class="col-md">
           <ul>
             <li><a>Chapter 27: </a></li>
             <li><a>Chapter 28</a></li>
             <li><a>Chapter 29: </a></li>
             <li><a>Chapter 30: </a></li>
             <li><a>Chapter 31: </a></li>
             <li><a>Chapter 32: </a></li>
             <li><a>Chapter 33: </a></li>
             <li><a>Chapter 34: </a></li>
             <li><a>Chapter 35: </a></li>
             <li><a>Chapter 36: </a></li>
             <li><a>Chapter 37: </a></li>
             <li><a>Chapter 38: </a></li>
           </ul>
         </div>

       </div>
     </div>

     <hr /> <!--divider-->
  <!-- end examples -->
    <div class="container">
    <!-- begin contact form -->
      <div  class="row">
        <div class="col-sm-6"><!--forum column -->
          <form id="contact-form" action="submit" method="POST">

          <div class="form-group">
            <label>Name</label>
            <input type="text"  name="Name" placeholder="John/Jane Doe" required />
          </div>
          <div class="form-group">
            <label>Phone Number:</label>
            <input type="tel" name="Phone Number" placeholder="123456789" required />
          </div>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" name="Email" placeholder="example@abc.com" required />
          </div>
          <div class="form-group">
            <label>Whats your message?</label><br />
            <textarea name="message" placeholder="Message" required></textarea>
          </div>
        <button type="button" class="btn">submit</button>
        </form>
        </div>
        <div class="col-sm-6"><!--social media buttons -->
          <div id="contact-social-button-container" class="container">
            <div class="row">
              <div class="col-sm">
                <h3>Check Me out on social media!</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <button class="btn btn-primary">Linkedin</button>
              </div>
            </div>
        </div>
    </div>
      </div>
    </div>
    <!-- end contact form -->
    <!-- social media buttons pull right of form -->

    <!-- end seperated content-->
    <!--begin footer -->
   <footer id="end-footer" class="container-fluid">
     <div class="row">
       <div class="col-sm-12">
         <h6>Made by Jordan Morris</h6>
       </div>
     </div>
  </footer>
<!--end footer -->

    </body>

 </html>
