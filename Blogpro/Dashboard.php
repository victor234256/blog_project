
<?php 
require_once('connection.php');
require_once('session.php');
require_once('errorfuction.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.2.3.min.js"></script>

</head>
<body>
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-2 col-md-4 col-sm-6 navbar-fixed">
              <div class="menu3">
               <h5>Victors Blog</h5>
               <ul class="nav nav-pills nav-stacked" id="aside">
                   <li class="active"><a href="Dashboard.php"><i class="fa fa-th-large"></i>&nbsp;Dashboard</a></li>
                   <li><a href="Addnewpost.php"><i class="fa fa-th-list"></i>&nbsp;Add New Post</a></li>
                   <li><a href="category.php"><i class="fa fa-tags"></i>&nbsp;Cathegories</a></li>
                   <li><a href="#"><i class="fa fa-user"></i>&nbsp;Manage Admin</a></li>
                   <li><a href="#"><i class="fa fa-comment"></i>&nbsp;Comment</a></li>
                   <li><a href="#"><i class="fa fa-server"></i>&nbsp;Live Blog</a></li>
                   <li><a href="#"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
               </ul>
               </div>
           </div>
           <div class="col-lg-10 col-md-8 col-sm-6">
              <div class="content p-4">
                <h1>ADMIN PANEL</h1>
                <div><?php echo errormessage(); ?></div>
                 <h2>About</h2>
                  <p> Learning to design a website requires mastering many different skills from organizing the structure of the website, making sure it is easy to use and navigate, to designing the graphics and layout of the information. This web design course concentrates on the fundamentals of building a website. It starts with the basics, using HTML code to build a basic site, giving the learner a solid foundation in how a website is designed.  The final section of the web design course introduces the learner to MySql database and php programming. Students will also be introduced to Bootstrap which is a free front-end framework for faster and easier web development.</p>
                  <h2>About</h2>
                  <p> Learning to design a website requires mastering many different skills from organizing the structure of the website, making sure it is easy to use and navigate, to designing the graphics and layout of the information. This web design course concentrates on the fundamentals of building a website. It starts with the basics, using HTML code to build a basic site, giving the learner a solid foundation in how a website is designed.  The final section of the web design course introduces the learner to MySql database and php programming. Students will also be introduced to Bootstrap which is a free front-end framework for faster and easier web development.</p>
                 <h2>About</h2>
                  <p> Learning to design a website requires mastering many different skills from organizing the structure of the website, making sure it is easy to use and navigate, to designing the graphics and layout of the information. This web design course concentrates on the fundamentals of building a website. It starts with the basics, using HTML code to build a basic site, giving the learner a solid foundation in how a website is designed.  The final section of the web design course introduces the learner to MySql database and php programming. Students will also be introduced to Bootstrap which is a free front-end framework for faster and easier web development.</p>
                  <h2>About</h2>
                  <p> Learning to design a website requires mastering many different skills from organizing the structure of the website, making sure it is easy to use and navigate, to designing the graphics and layout of the information. This web design course concentrates on the fundamentals of building a website. It starts with the basics, using HTML code to build a basic site, giving the learner a solid foundation in how a website is designed.  The final section of the web design course introduces the learner to MySql database and php programming. Students will also be introduced to Bootstrap which is a free front-end framework for faster and easier web development.</p>
                  <h2>About</h2>
                  <p> Learning to design a website requires mastering many different skills from organizing the structure of the website, making sure it is easy to use and navigate, to designing the graphics and layout of the information. This web design course concentrates on the fundamentals of building a website. It starts with the basics, using HTML code to build a basic site, giving the learner a solid foundation in how a website is designed.  The final section of the web design course introduces the learner to MySql database and php programming. Students will also be introduced to Bootstrap which is a free front-end framework for faster and easier web development.</p> 
              </div>
               
           </div>
       </div>
   </div> 
   <div class="footer">
      <div class="sub-footer pt-5">
          <p class="text-center  text-white" id="foot">All Right Reserved........Designed by Jimoh Victor</p>
      </div> 
   </div>
</body>
</html>