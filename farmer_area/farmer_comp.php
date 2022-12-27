<?php

$farmer_username=$_SESSION['f_username'];
include('../include/connection.php');
if(isset($_POST['farmer_comp']))
{
   $complain_name=$_POST['complain_name'];
   $complain_desc=$_POST['complain_desc'];
   

   
   $comp_insert="insert into `complain_table`(complain_name,complain_desc,complain_farmer,complain_status) values('$complain_name','$complain_desc','$farmer_username','unread')";
   $comp_result=mysqli_query($con,$comp_insert);
   if($comp_result)
   {
                        echo "<script>alert('Your Complain is successfully posted')</script>";            
   }
   else
   {
                        echo "<script>alert('Your cropkjbbkjbb.bnm.bbb advertisement is successfully posted')</script>";  
   }



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                        <link rel="stylesheet" href="supplier_profile.css">
                        
</head>
<body>
<div class="block">
        <div id="rform" class="">
                        <div class="heading" style="color:green" ><h1 >Your Complaint Page</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                     <!-- crop -->
                     <div class="form-block">

                    
<label for="complain_name" class="">Complain Title</label>
<input type="text" id="complain_name" class="" placeholder="Type your complain's title here" autocomplete="off
" required="required" name="complain_name"/>
</div>


                   
                   
                   

                   <!-- Remak -->
                   <div class="form-group">
        <label for="description">Description</label><br>
        <textarea class="form-control" id="description" name="complain_desc"style="width:473px "></textarea>
      </div>
                   
                  

                    <div class="text-center">
                        <input type="submit" value="Post" class="btn"name="farmer_comp">
                    </div>
                    

                </form>
                </div>
           
    </div>
    </div>

    

                        
</body>
</html>