<?php
$namequery = "SELECT * FROM courses WHERE course_code = '". $_GET['cid']."'";
$whotaughtquery = "SELECT * FROM section JOIN teacher USING(teacher_ID) WHERE course_code= '". $_GET['cid']."'";
$reviewquery = "SELECT * FROM review_class WHERE course_code = '". $_GET['cid']."'";
$numstarquery = "SELECT AVG(num_stars) AS star FROM review_class WHERE course_code = '". $_GET['cid']."'";
$prequery = "SELECT * FROM prereqs WHERE course_code = '". $_GET['cid']."'";


$conn = new mysqli('localhost', 'root', '', 'wikipingdia');
if ($conn->connect_error) die("Connection error: " . mysqli_connect_error());
$prereq = $conn->query($prequery);
$prerow = $prereq->fetch_assoc();
$numstar = $conn->query($numstarquery);
$review = $conn->query($reviewquery);
$whotaught = $conn->query($whotaughtquery);
$result = $conn->query($namequery);
$starrow = $numstar->fetch_assoc();
$row = $result->fetch_assoc();
$wtr = $whotaught->fetch_assoc();
$testudolink = "https://app.testudo.umd.edu/soc/search?courseId=".$row['course_code']."&sectionId=&termId=201808&_openSectionsOnly=on&creditCompare=&credits=&courseLevelFilter=ALL&instructor=&_facetoface=on&_blended=on&_online=on&courseStartCompare=&courseStartHour=&courseStartMin=&courseStartAM=&courseEndHour=&courseEndMin=&courseEndAM=&teachingCenter=ALL&_classDay1=on&_classDay2=on&_classDay3=on&_classDay4=on&_classDay5=on"
?>
<html>

<head>
<title><?=$row['course_code'].' Class Info'?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
<link rel="stylesheet" href="assets/css/main.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!--[if lte IE 9]>
<link rel="stylesheet" href="assets/css/ie9.css" />
<![endif]-->
<!--[if lte IE 8]>
<link rel="stylesheet" href="assets/css/ie8.css" />
<![endif]-->

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
               <h2><b><?=$row['course_code'].": ".$row['course_name']?> &ensp;&ensp;</b><a href=<?=$testudolink?> style="font-size: 20px; border: 2px solid black" class="logo" align='center'>View Class in Testudo</a></h2>

               <!-- Section -->   
               <section id="banner" style="padding: 1em 0 0em 0 ;">
                  <div class="content" style="width:40%;">
                     <h2>Class Description</h2>
                     <p style="text-indent :3em;"><?=$row['description']?></p>

                  </div>
                  <div>&ensp;</div>
                  <div class="content">
                      <h2>Reviews 
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
                        <a href="course_add_review.php"><h4 align="center">Write a Review</h4></a>
                        </div>                        
                  </div>
               </section>

               <!-- class links -->               
               <header>
                  <div align="center" style=" width:660px; border: 2px solid black"><h4>
                    <div class="dropdown">
                    <button class="dropbtn">Syllabi</button>
                    <div class="dropdown-content">
                    </div>
                  </div>&ensp;&ensp;

                  <div class="dropdown">
                      <button class="dropbtn">Textbooks</button>
                      <div class="dropdown-content">
                      </div>
                    </div>&ensp;&ensp;

                    <div class="dropdown">
                      <button class="dropbtn">Past Exams</button>
                      <div class="dropdown-content">
                      </div>
                    </div>&ensp;&ensp;

                    <div class="dropdown">
                      <button class="dropbtn">Teachers</button>
                      <div class="dropdown-content">
                        <!-- currently only works for the first listing. Will fix later -->
                        
                        <?php foreach ($whotaught as $r): ?>
                        	<?php $teacherlink = "teacher_review.php?tid=" . $r['teacher_ID']?>
                          <a href="<?=$teacherlink?>"><?=$r['teacher_fname'].' '.$r['teacher_lname']?></a>
                        <?php endforeach ?>
                      </div>
                    </div>&ensp;&ensp;
                    

                <div class="dropdown">
                  <button class="dropbtn">Prerequisites</button>
                  <div class="dropdown-content">
                     
                  <?php foreach ($prereq as $r): ?>
                  	<?php $classlink = 'classinfo.php?cid=' . $r['pre_course_code']?>
                          <a href="<?=$classlink?>"><?=$r['pre_course_code']?></a>
                        <?php endforeach ?>
                  </div>
                </div>
               </h4></div>
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
               <!--
               <section>
                <button onclick="dark()">Switch color</button>
               </section>
               <!-- Section -->
               <!--
               <section>
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