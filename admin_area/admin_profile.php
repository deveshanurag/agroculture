<?php
include('../include/connection.php');
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../supplier_area/supplier_profile.css">
    
</head>
<body>
    <header>
        <nav class="container">
            <ul id="table1">
            <li><a href="">Home</a></li>
                <li><a href="">Register</a></li>
                <li><a href="">Contact Us</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Get Premium</a></li>
            </ul>
           
        </nav>
        <div class="card">
            <div class="card-item">
                <img src="/DBMS PROJECT/IMG/tractor.jpg" alt="">
            </div>
            <div class="card-item">
                <img src="/DBMS PROJECT/IMG/grain.jfif" alt="">
            </div>
            <div class="card-item">
                <img src="/DBMS PROJECT/IMG/fertilizer.jfif" alt="">
            </div>
            <div class="card-item">
                <img src="/DBMS PROJECT/IMG/farmer2.png" alt="">
            </div>
            
        </div>
        <nav class="box">

        <?php
$username=$_SESSION['a_username'];
$user_name="Select * from `admin_table` where admin_username='$username'";
$result_image=mysqli_query($con,$user_name);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['admin_image'];



                    
                  
                  
                        
                         if(!isset($_SESSION['a_username']))
                         {
                             echo"
                             <div class='box1'>
                             <div class='dropdown'>
                                 <button class='dropbtn' id='bt2'><a href='login.html'>Farmer Login</a></button>
                                
                               </div>
                               <div class='dropdown'>
                                 <button class='dropbtn' id='bt2'><a href='login.html'>Farmer Login</a></button>
                                
                               </div>
                               <div class='dropdown'>
                                 <button class='dropbtn' id='bt1'><a href='supplier_area/supplier_login.php'>Supplier Login</a></button>
                                 
                               </div>
                               </div>
                 
                             
                             "   ;                
                         }
                         else
                         {
                         echo "

                         
                          <div class='profile-pic'>
                          <img src='admin_image/$user_image' alt='' style='height:100px'>

                          </div>
                          <div class='welcome'>
                          
                               <h3 style='margin:35px' >Welcome ".$_SESSION['a_username']."</h3>   
                              </div>  ";          
                         }
                         
                         ?>
                    



            
                
           

        </nav>
       
    </header>
    <main>
        <div class="banner">
        <div class="block">
        
                        
        
        
        <nav class="box-profile">
           
                  
                  <div class="dropdown">
                    <button class="dropbtn" id="bt1"><a href="admin_profile.php?edit_admin_profile">Edit Profile</a> </button>
                    
                  </div>
                  <div class="dropdown">
                    <button class="dropbtn" id="bt1"><a href="admin_profile.php?post_tips">Post Farming Tips</a> </button>
                   
                    
                  </div>
                 
            <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="admin_profile.php?view_complain">View Complain</a></button>
               
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="admin_logout.php">Logout</a></button>
               
              </div>
                  

            
           

        </nav>
       



        
        
 </div>
 <div class="include-file">
 <?php
        if(isset($_GET['edit_admin_profile']))
        {
                        include('admin_edit_account.php');
        }
        
        if(isset($_GET['post_tips']))
        {
                        include('admin_post_tips.php');
        }
        if(isset($_GET['view_complain']))
        {
                        include('admin_view_complain.php');
        }
        
if(isset($_GET['complain_id']))
{
   $complainn_id=$_GET['complain_id'];
   $update_table="update `complain_table` set complain_status='read' where complain_id=$complainn_id";
   $run_update=mysqli_query($con,$update_table);
                    
}








         ?> 
         </div>
 
           
    </div>
   

    

       
    </main>
    <footer>
        <div class="link">
           <div class="content">
            <p class="text-center"><b>Government Aid</b></p>
            <p class="text-center"><a href="#">PM KISAN Yojana</a></p>
            <p class="text-center"><a href="#">Gram Jyoti Yojana</a></p>
            <p class="text-center"><a href="#">PM Krishi Sinchai Yojana</a></p>

           </div>
           <div class="content">
            <p class="text-center">Global Rates</p>
            <p class="text-center"><a href="#">Cropes</a></p>
            <p class="text-center"><a href="#">Fertilizers</a></p>

           </div>
           <div class="content">
            <p class="text-center">Weather</p>
            <p class="text-center"><a href="">News</a></p>
            <p class="text-center"><a href="">Prediction</a></p>

           </div>

        </div>

    </footer>
    
        <footer class="flex-all-center">
            <p>Copyright &copy; Mycart.com Reserved.</p>
          </footer>
    
    
    
    
</body>
</html>