<?php
$namequery = "SELECT * FROM teacher WHERE teacher_ID = ". $_GET['tid'];
$reviewquery = "SELECT * FROM review_teacher WHERE teacher_ID = ".$_GET['tid'];
$taughtclassquery = "SELECT * FROM section WHERE teacher_ID = " .$_GET['tid'];
$numstarquery = "SELECT AVG(num_stars) AS star FROM review_teacher WHERE teacher_ID = ".$_GET['tid'];
$conn = new mysqli('localhost', 'root', '', 'wikipingdia');
if ($conn->connect_error) die("Connection error: " . mysqli_connect_error());
$numstar = $conn->query($numstarquery);
$class = $conn->query($taughtclassquery);
#$classrow = $class->fetch_assoc();
$result = $conn->query($namequery);
$review = $conn->query($reviewquery);
#$reviewrow = $review->fetch_assoc();
$starrow = $numstar->fetch_assoc();
$row = $result->fetch_assoc();

?>
<html>

   <title><?=$row['teacher_fname'].' '.$row['teacher_lname']?></title>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
   <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
   <link rel="stylesheet" href="assets/css/main.css" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <style>
         .dropbtn {
             background-color: #0000;
             color: white;
             padding: 4px;
             font-size: 12px;
             border: none;
         }

         .dropdown {
             position: relative;
             display: inline-block;
         }

         .dropdown-content {
             display: none;
             position: absolute;
             background-color: #f1f1f1;
             min-width: 160px;
             box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
             z-index: 1;
         }

         .dropdown-content a {
             color: black;
             padding: 12px 16px;
             text-decoration: none;
             display: block;
         }

         .dropdown-content a:hover {background-color: #ddd}

         .dropdown:hover .dropdown-content {
             display: block;
         }

         .dropdown:hover .dropbtn {
             background-color: #3e8e41;
         }
         </style>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!-- Latest compiled JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script>
      $('.message a').click(function(){
         $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });

      function dark() {
       if (document.body.style.backgroundColor == 'rgb(255, 255, 255)') {

               document.body.style.backgroundColor = '#333';
               document.getElementById("logo").style.filter = "invert(100%)";
       }
       else {
               document.body.style.backgroundColor = 'rgb(255, 255, 255)';
               document.getElementById("logo").style.filter = "invert(0%)";

       }
   }
   </script>

   </head>
   <body style="background-color: rgb(255, 255, 255)">
      <!-- Wrapper -->
      <div id="wrapper">
         <!-- Main -->
         <div id="main">
               <p>&ensp;</p>
               <a href=index.html>
               <img src = "https://i.imgur.com/RBrDeDY.png" class="center" id="logo"></a>
            <div class="inner">
               <!-- Header -->
               <header id="header">
                  <a href="index.html" class="logo" align='center'>Class Information</a>
                  <a href="index.html" class="logo" align='center'>About InfoSci</a>
                  <a href="index.html" class="logo" align='center'>Career Opportunities</a>
                  <a href="index.html" class="logo" align='center'>Social Media</a>
                  <a href="index.html" class="logo" align='center'>My Account</a>
                  <a href="index.html" class="logo" align='center'>Help/FAQ</a>
                     <ul class="icons" align='center'>
                     <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                     <li><a href="#" class="icon fa-instagram"><span class="label" >Instagram</span></a></li>
                  </ul>
                  &ensp;&ensp;
                     <form method="post" action="#">
                     <input type="text" name="query" id="query" placeholder="Search" /></form>
               </header>
               <!-- Banner -->

               <section style="padding: 2em 0 0em 0 ;">
               <h1><b><?=$row['teacher_fname'].' '.$row['teacher_lname']?></b></h1>

               <!-- Section -->
               <section id="banner" style="padding: 0em 0em 0em 0em ; width: auto; border: 0px solid black">
                  <div  class="content" style="width:30%; padding: 0em 0em 0em 0em;">
                     <div><img src = "https://st.depositphotos.com/1048902/1337/i/950/depositphotos_13371446-stock-photo-crazy-professor.jpg" id="logo" width ="300px">
                     </div>
                     <p>&ensp;</p>
                     <ul class="icons" class="center">
                     <li>&ensp;</li>
                     <li>&ensp;</li>
                     <li></li>
                     <li></li>
                     <li></li>
                     <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                     <li><a href="#" class="icon fa-snapchat-ghost"><span class="label">Snapchat</span></a></li>
                     <li><a href="#" class="icon fa-instagram"><span class="label" >Instagram</span></a></li>
                  </div>
                  <div class="content">
                     <h2>About Me</h2>
                     <p style="text-indent :3em;">This course will be an exploration of the methods, tools, and processes for developing dynamic, database-driven user interfaces and websites, which will cover an end-to-end process to build a web application. This includes acquiring, installing, and running web servers, database servers, and web applications.</p>
                  <h2>Useful Teacher Resources</h2>
                   <!-- class links -->
                  <div align="center" style=" width:660px; border: 2px solid black"><h4>
                    <div class="dropdown">
                    <button class="dropbtn">Education</button>
                    <div class="dropdown-content">
                    </div>
                  </div>&ensp;&ensp;
                    <div class="dropdown">
                      <button class="dropbtn">Classes Taught</button>
                      <div class="dropdown-content">
                      	<?php foreach ($class as $r): ?>
                          <?php $classlink = 'classinfo.php?cid=' . $r['course_code']?>
                          <a href="<?=$classlink?>"><?=$r['course_code']?></a>
                      	<?php endforeach ?>
                      </div>
                    </div>&ensp;&ensp;
                    <div class="dropdown">
                      <button class="dropbtn">Research/Job Opportunities</button>
                      <div class="dropdown-content">
                      </div>
                    </div>&ensp;&ensp;
                <div class="dropdown">
                  <button class="dropbtn">Contact</button>
                  <div class="dropdown-content">
                  <?php foreach ($result as $r): ?>
                      	  <a href="#"><?=$r['teacher_email']?></a>
                      	<?php endforeach ?>
                  </div>
                </div>
               </h4></div>
               </section>
               <header>
                  <div class="content">
                        <h2> Reviews for <?=$row['teacher_fname'].' '.$row['teacher_lname']?>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <?=$starrow['star'].' Star Average Rating'?>
                        </h2>
                        <?php if ($review): ?>
        <table class="small table table-condensed table-striped">
          <thead><tr><th>Stars</th><th>Review</th></tr></thead>
          <tbody>
            <?php foreach ($review as $r): ?>
              <tr><td><?=$r['num_stars']?></td><td><?=$r['review_text']?></td><td class="text-right"></td></tr>
            <?php endforeach ?>
          </tbody>
        </table>
      <?php else: ?>
        <p>No records</p>
      <?php endif ?>
                        <h3>&nbsp;   </h3>
                        <div>
                        <a href="teacher_save_review.php"><h4 align="center">Write a Review</h4></a>
                        </div>
                  </div>
               </header>
            </div>
         </div>
         <!-- Sidebar -->
         <div id="sidebar">
            <div class="inner">
               <!-- logo -->
               <section>
                  <img src = "ischool_logo.png" width="260">
               </section>

               <!-- Login -->
               <section>
                  &ensp;&ensp;
                  <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
                  &ensp;
                  <button onclick="dark()" style="width:auto;">Night Mode</button>

                  <div id="id01" class="modal">

                    <form class="modal-content animate" action="/action_page.php">
                      <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="https://kooledge.com/assets/default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" alt="Avatar" class="avatar" >
                      </div>

                      <div class="container" style="width:50%;>
                        <label for="uname"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit">Login</button>
                      </div>

                      <div class="container" style="background-color:#f1f1f1 width:50%;">
                        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        <a href="login.html">No Account? Create an Account</a></span>
                      </div>
                    </form>
                  </div>

                  <script>
                  // Get the modal
                  var modal = document.getElementById('id01');

                  // When the user clicks anywhere outside of the modal, close it
                  window.onclick = function(event) {
                      if (event.target == modal) {
                          modal.style.display = "none";
                      }
                  }
                  </script>
               </section>
               <!-- Menu -->
               <nav id="menu">
                  <header class="major">
                     <h2>Trending Links</h2>
                  </header>
                  <ul>
                     <li><a href="index.html">Homepage</a></li>
                     <li><a href="generic.html">Generic</a></li>
                     <li><a href="elements.html">Elements</a></li>
                     <li>
                        <span class="opener">Submenu</span>
                        <ul>
                           <li><a href="#">Lorem Dolor</a></li>
                           <li><a href="#">Ipsum Adipiscing</a></li>
                           <li><a href="#">Tempus Magna</a></li>
                           <li><a href="#">Feugiat Veroeros</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Etiam Dolore</a></li>
                     <li><a href="#">Adipiscing</a></li>
                     <li>
                        <span class="opener">Another Submenu</span>
                        <ul>
                           <li><a href="#">Lorem Dolor</a></li>
                           <li><a href="#">Ipsum Adipiscing</a></li>
                           <li><a href="#">Tempus Magna</a></li>
                           <li><a href="#">Feugiat Veroeros</a></li>
                        </ul>
                     </li>
                     <li><a href="#">Maximus Erat</a></li>
                     <li><a href="#">Sapien Mauris</a></li>
                     <li><a href="#">Amet Lacinia</a></li>
                  </ul>
               </nav>
               <!-- dark mode button -->
               <!-- <section>
              	 <button onclick="dark()">Switch color</button>
               </section> -->


               	<!-- Section -->
                <!-- <section>
                  <header class="major">
                     <h2>Get in touch</h2>
                  </header>
                  <p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
                  <ul class="contact">
                     <li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
                     <li class="fa-phone">(000) 000-0000</li>
                     <li class="fa-home">1234 Somewhere Road #8254<br />
                        Nashville, TN 00000-0000
                     </li>
                  </ul>
               </section> -->
               <!-- Footer -->
               <footer id="footer">
                  <p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
               </footer>
            </div>
         </div>
      </div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
   </body>
</html>
