<?php
$coursequery = "SELECT course_code, course_name FROM courses order by course_code";
$conn = new mysqli('localhost', 'root', '', 'wikipingdia');
if ($conn->connect_error) die("Connection error: " . mysqli_connect_error());
$coursetable = $conn->query($coursequery);
$courserow = $coursetable->fetch_assoc();
?>

<html>

<head>
<title>Info Sci Prerequisites</title>
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
               <section id="banner" style="padding: 2em 0 0em 0 ;">
                  <div class="content" style="width:40%;">
                     <h2>InfoSci Academic Policies
                     </h2>

                     <p>Every student in the Bachelor of Science in Information Science (BSIS) program must follow the policies of the program and college. If you have questions about a policy, please contact your advisor.
                     </p>

                     <p><strong>Required Number of Credits:</strong><br />
                        InfoSci students are required to take 45 credits within the major. 30 credits of which must be approved major coursework with the INST prefix. Students must take 15 credits of approved upper-level [300-400 level] electives.
                     </p>

                     <p><strong>Benchmark and Major courses:</strong><br />
                        Students who have declared InfoSci as their major, must take benchmark and InfoSci core courses at UMD.
                     </p>

                     <p><strong>Benchmark Courses Taken Concurrently with Major Courses:</strong><br />
                        InfoSci students must successfully (C- or higher) complete all benchmark courses before taking InfoSci coursework. The College will allow InfoSci students to start taking InfoSci core courses in their last semester of benchmark coursework.
                     </p>

                     <p><strong>Major Electives:</strong><br />
                        In order to apply non-INST UMD courses towards the InfoSci major elective requirements , students must take courses that are approved by the InfoSci program after declaring InfoSci as their major. Students must obtain approval for non-INST courses before enrolling in them in order for them to be counted as major electives. Declared InfoSci students must complete all benchmark courses prior to enrolling in major electives.
                     </p>

                     <p><strong>Advanced Placement Credits:</strong><br />
                        Advanced Placement (AP) credits that have been accepted and transferred to UMD successfully may be used to satisfy corresponding InfoSci benchmark i requirements. 
                     </p>
                     <p><strong> A complete guide to the University of Maryland's academic policies can be found <a href="http://registrar.umd.edu/current/Policies/acadregs.html" target="_blank">here</a>.<br />
                     </strong></p>
                     <p><strong><a href="https://ischool.umd.edu/sites/default/files/files/Prerequisite_List_2017_03_13.docx.pdf" target="_blank">Download prerequisite list from iSchool Website</a>.<br /></strong></p>
                  </div>
                  <div>&ensp;</div>
                  <div class="content">
                      <h2>All INST Undergrad Course Offerings
                     </h2>
                     <table class="small table table-condensed table-striped">
                        <thead><tr><th>Course Code</th><th>Course Name</th></tr></thead>
                        <tbody>
                        <?php foreach ($coursetable as $r): ?>
                           <?php $classlink = 'classinfo.php?cid=' . $r['course_code']?>
                          
                        <tr><td><a href="<?=$classlink?>"><?=$r['course_code']?></a></td><td><?=$r['course_name']?></td><td class="text-right"></td></tr>
                        <?php endforeach ?>
                        </tbody>
                        </table>    
                  </div>
                 
               </section>

               <!-- Section -->               
               <section>
              
               </section>

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