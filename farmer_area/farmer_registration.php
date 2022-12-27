<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="../supplier_area/supplier_registration.css">
    
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
                <button class="dropbtn" id="bt2"><a href="farmer_login.php">Farmer Login</a></button>
                
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt2"><a href="../admin_area/admin_login.php">Admin Login</a></button>
                
              </div>
              <div class="dropdown">
                <button class="dropbtn" id="bt1"><a href="../supplier_area/supplier_login.php">Buyer Login</a></button>
               
              </div>
              </div>
              

        </nav>
       
    </header>
    <main>
        <div class="banner">
            <div class="block">
        <div id="rform" class="">
                        <div class="heading" style="color:green" ><h1 >Farmer Registration</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username -->
                    <div class="form-block">

                    
                        <label for="user_username" class="">Username</label>
                        <input type="text" id="user_username" class="" placeholder="Enter your username" autocomplete="off
                        " required="required" name="supplier_username"/>
                    </div>
                    <!-- email -->
                    <div class="">
                    <label for="user_email" class="">Email</label>
                        <input type="email" id="user_email" class="" placeholder="Enter your email" autocomplete="off
                        " required="required" name="supplier_email"/>

                    </div>
                    <!-- image -->
                    <div class="form-outliner mb-4">
                    <label for="user_imagee" class="">User Image</label>
                        <input type="file" id="user_imagee" class="" 
                         required="required" name="supplier_image"/>

                    </div>
                    <!-- password -->

                    <div class="form-outliner mb-4">
                    <label for="user_password" class="">Password</label>
                        <input type="password" id="user_password" class="" placeholder="Enter your Password" autocomplete="off"
                         required="required" name="supplier_password"/>

                    </div>
                    <!--confirm password -->

                    <div class="form-outliner mb-4">
                    <label for="confirm_user_password" class="">Confirm Password</label>
                        <input type="password" id="confirm_user_password" class="" placeholder="confirm your Password" autocomplete="off"
                         required="required" name="confirm_supplier_password"/>

                    </div>
                   <!-- address -->
                    <div class="form-outliner mb-4">

                    
                        <label for="user_address" class="">Address</label>
                        <input type="text" id="user_address" class="" placeholder="Enter your Address" autocomplete="off
                        " required="required" name="supplier_address"/>
                    </div>
                    <!--contact -->

                    <div class="form-outliner mb-4">

                    
                        <label for="user_contact" class="">Contact</label>
                        <input type="text" id="user_contact" class="" placeholder="Enter your Contact" autocomplete="off
                        " required="required" name="supplier_contact"/>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Register" class="btn"name="farmer_register">
                    </div>
                    <p class="fw-bold">Already have an account?  <a href="supplier_login.php" class="" >Login</a> </p>

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

<!-- registration -->

<?php
if(isset($_POST['farmer_register']))
{
    $supplier_username=$_POST['supplier_username'];
    $supplier_email=$_POST['supplier_email'];
    $supplier_password=$_POST['supplier_password'];
    $hash_password=password_hash($supplier_password,PASSWORD_DEFAULT);
    $confirm_supplier_password=$_POST['confirm_supplier_password'];
    $supplier_address=$_POST['supplier_address'];
    $supplier_contact=$_POST['supplier_contact'];
    $supplier_image=$_FILES['supplier_image']['name'];
    $supplier_image1=$_FILES['supplier_image']['tmp_name'];

    // select
    $select_query="Select * from `farmer_table` where farmer_username='$supplier_username' or farmer_email='$supplier_email'  ";
    $result_select_query=mysqli_query($con,$select_query);
    $select_rows_count=mysqli_num_rows($result_select_query);
    if($select_rows_count>0)
    {
        echo "<script>alert('Username or email already present')</script>";
    }
    else if($confirm_supplier_password!=$supplier_password)
    {
        echo "<script>alert('Password and Confirm Password don't match')</script>";
    }
    else
    {
       
    // insert query
    move_uploaded_file($supplier_image1,"farmer_image/$supplier_image");
    $insert_query="Insert into `farmer_table`(farmer_username,farmer_email,farmer_password,farmer_image,farmer_address,farmer_contact)
    values('$supplier_username','$supplier_email','$hash_password','$supplier_image','$supplier_address','$supplier_contact')
    ";
    $result_query=mysqli_query($con,$insert_query); 
    }

    if($result_query)
    {
        echo "<script>alert('You have successfully registered')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
    }
    

}

?>