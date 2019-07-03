<?php 
require_once("connection.php");
include_once("session.php");
include("timezone.php");
//include("errorfuction.php");
if(isset($_POST["submit"])){
$Category=mysqli_real_escape_string($connection,$_POST["category"]);
$Cname = "Jimoh Victor";
if(empty($Category)){
    $_SESSION["ErrorMessage"]="Category field must be Filled";
//    echo '<script>window.open("category.php","_self")</script>';
}
elseif(strlen($Category)>99){
    echo '<script>window.open("category.php","_self")</script>';
    $_SESSION["ErrorMessage"]="Category sentence is too long";
   }
else{
    global $connection;
    $insert = "INSERT INTO category(datetime,name,creatorname) VALUES ('$timezone','$Category','$Cname')";
    $Execute = mysqli_query($connection,$insert);
    if($Execute){
//      echo '<script>window.open("category.php","_self")</script>';
      $_SESSION["SuccessMessage"]="Category inserted succesfully";  
    }
    else{
        echo "not set";
    }
}
    
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-2.2.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
   <div class="container-fluid">
       <div class="row">
           <div class="col-lg-2 col-md-4 col-sm-12 col-xs-12">
              <div class="menu3">
               <h5>Victors Blog</h5>
               <ul class="nav nav-pills nav-stacked" id="aside">
                   <li><a href="Dashboard.php"><i class="fa fa-th-large"></i>&nbsp;Dashboard</a></li>
                   <li><a href="Addnewpost.php"><i class="fa fa-th-list"></i>&nbsp;Add New Post</a></li>
                   <li class="active"><a href="category.php"><i class="fa fa-tags"></i>&nbsp;Categories</a></li>
                   <li><a href="#"><i class="fa fa-user"></i>&nbsp;Manage Admin</a></li>
                   <li><a href="#"><i class="fa fa-comment"></i>&nbsp;Comment</a></li>
                   <li><a href="#"><i class="fa fa-server"></i>&nbsp;Live Blog</a></li>
                   <li><a href="#"><i class="fa fa-sign-out"></i>&nbsp;Logout</a></li>
               </ul>
               </div>
           </div>
           <div class="col-lg-10 col-md-8 col-sm-12 col-xs-12">
              <div class="content p-5">
                <h1>ADD CATEGORIES</h1>
                <div><?php echo errormessage();
                 
                     echo successmessage();?></div>
                <div>
                    <form action="category.php" method="post" class="mb-5">
                        <div class="form-group">
                            <label for="categories">Name:</label>
                            <input type="text" class="form-control" name="category" id="categories" placeholder="Insert your Category Name">
                        </div>
                        <div>
                        <input type="submit" class="btn btn-danger btn-lg" name="submit" value="Add New Category">
                        </div>
                        
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Creator Name</th>
                            <th>Date&amp;Time</th>
                        </tr>
                        <?php 
                        $select_into="SELECT * FROM category";
                        $Query=mysqli_query($connection,$select_into);
                        while($data=mysqli_fetch_array($Query)){
                            $SN = $data['id'];
                            $Name = $data['name'];
                            $CName = $data['creatorname'];
                            $Datetime = $data['datetime'];
                            $SN++;
                        
                        ?>
                        <tr>
                            <td><?php echo $SN;?></td>
                            <td><?php echo $Name;?></td>
                            <td><?php echo $CName;?></td>
                            <td><?php echo $Datetime;?></td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
                 
                  
              </div>
               
           </div>
       </div>
   </div>
   <footer> 
   <div class="footer">
      <div class="sub-footer pt-5">
          <p class="text-center  text-white" id="foot">All Right Reserved........Designed by Jimoh Victor</p>
      </div> 
   </div>
    </footer>
</body>

