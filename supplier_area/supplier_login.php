<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="supplier_registration.css">
    
    <style>
       
    </style>
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
            
                   
                   
        <div class="box1">
            
            <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="../farmer_area/farmer_login.php">Farmer Login</a></button>
                
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="../admin_area/admin_login.php">Admin Login</a></button>
                
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt1"><a href="supplier_login.php">Buyer Login</a></button>
               
              </div>
              </div>

        </nav>
       
    </header>
    <main>
        <div class="banner">
            <div class="block">
        <div id="rform" class="">
                        <div class="heading" style="color:green" ><h1 >Buyer Login</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username -->
                    <div class="form-block">

                    
                        <label for="user_username" class="">Username</label>
                        <input type="text" id="user_username" class="" placeholder="Enter your username" autocomplete="off
                        " required="required" name="supplier_username"/>
                    </div>
                    
                    
                   
                    <!-- password -->

                    <div class="form-outliner mb-4">
                    <label for="user_password" class="">Password</label>
                        <input type="password" id="user_password" class="" placeholder="Enter your Password" autocomplete="off"
                         required="required" name="supplier_password"/>

                    </div>
                   
                  
                   

                    <div class="text-center">
                        <input type="submit" value="Login" class="btn"name="supplier_login">
                    </div>
                    <p class="fw-bold">Don't have an account?  <a href="supplier_registration.php" class="" >Register</a> </p>

                </form>
                </div>
           
    </div>
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

<!-- connection -->

<?php
include('../include/connection.php');


?>

<?php
if(isset($_POST['supplier_login']))
{
    $supplier_username=$_POST['supplier_username'];
    $supplier_password=$_POST['supplier_password'];
    
    $select_login_query="Select * from `supplier_table` where supplier_username='$supplier_username'  ";
    $result_login_query=mysqli_query($con,$select_login_query);
    $login_rows_count=mysqli_num_rows($result_login_query);
    $login_rows_data=mysqli_fetch_assoc($result_login_query);


    if($login_rows_count>0)
    {
        //session_start();
        $_SESSION['username']=$supplier_username;
        if(password_verify($supplier_password,$login_rows_data['supplier_password']))
        {
         echo "<script>alert('You are successfully logged in')</script>";
         echo "<script>window.open('supplier_profile.php','_self')</script>";
        }
        else
        {
                        echo "<script>alert('Invalid username or password')</script>";           
        }
}
else
{
                        echo "<script>alert('Invalid username or password')</script>";                  
}
    

   

}
?>