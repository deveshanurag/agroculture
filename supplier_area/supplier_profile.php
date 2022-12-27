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
    <link rel="stylesheet" href="supplier_profile.css">
    
</head>
<body>
    <header>
        <nav class="container">
            <ul id="table1">
            <li><a href="../index.php">Home</a></li>
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
$username=$_SESSION['username'];
$user_name="Select * from `supplier_table` where supplier_username='$username'";
$result_image=mysqli_query($con,$user_name);
$row_image=mysqli_fetch_array($result_image);
$user_image=$row_image['supplier_image'];



                    
                  
                  
                        
                         if(!isset($_SESSION['username']))
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
                          <img src='supplier_images/$user_image' alt='' style='height:100px'>

                          </div>
                          <div class='welcome'>
                          
                               <h3 style='margin:35px' >Welcome ".$_SESSION['username']."</h3>   
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
                    <button class="dropbtn" id="bt1"><a href="supplier_profile.php?edit_profile">Edit Profile</a> </button>
                    
                  </div>
                  <div class="dropdown">
                    <button class="dropbtn" id="bt1"><a href="supplier_profile.php?post_ad">Post Advertisiment</a> </button>
                   
                    
                  </div>
                 
            <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="supplier_profile.php?crop_received">Crop Received</a></button>
               
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="supplier_logout.php">Logout</a></button>
               
              </div>
                  

            
           

        </nav>
       



        
        
 </div>
 <div class="include-file">
 <?php
        if(isset($_GET['edit_profile']))
        {
                        include('supplier_edit_account.php');
        }
        if(isset($_GET['post_ad']))
        {
                        include('supplier_post_ad.php');
        }
        if(isset($_GET['crop_received']))
        {
                        include('supplier_crop_received.php');
        }
        if(isset($_GET['farmer_detail']))
        {
                        include('farmer_detail.php');
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