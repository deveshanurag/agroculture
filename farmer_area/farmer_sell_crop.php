<?php

$crop_seller=$_SESSION['f_username'];
include('../include/connection.php');
if(isset($_POST['crop_sell']))
{
   $crop_name=$_POST['crop_name'];
   $crop_quantity=$_POST['crop_quantity'];
   $crop_remark=$_POST['crop_remark'];
   $crop_rate=$_POST['crop_rate'];
   $crop_image=$_FILES['crop_image']['name'];
   $crop_image1=$_FILES['crop_image']['tmp_name'];

   move_uploaded_file($crop_image1,"crop_image/$crop_image");
   $crop_insert="insert into `crop_sell`(crop_name,crop_quantity,crop_remark,crop_image,crop_rate,crop_seller) values('$crop_name','$crop_quantity','$crop_remark','$crop_image','$crop_rate','$crop_seller')";
   $crop_result=mysqli_query($con,$crop_insert);
   if($crop_result)
   {
                        echo "<script>alert('Your crop advertisement is successfully posted')</script>";            
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
                        <div class="heading" style="color:green" ><h1 >Selling Crops</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                     <!-- crop -->
                     <div class="form-block">

                    
<label for="crop_name" class="">Crop name</label>
<input type="text" id="crop_name" class="" placeholder="Enter Crop Name" autocomplete="off
" required="required" name="crop_name"/>
</div>


                   
                   
                    <!-- quantity -->

                    <div class="form-outliner mb-4">
                    <label for="crop_quantity" class="">Available quantity</label>
                        <input type="text" id="crop_quantity" class="" placeholder="Enter required quantity" autocomplete="off"
                         required="required" name="crop_quantity"/>

                    </div>
                     <!-- image -->
                     <div class="form-outliner mb-4">
                    <label for="crop_image" class="">Crop Image</label>
                        <input type="file" id="crop_image" class="" 
                         required="required" name="crop_image"/>

                    </div>

                   <!-- Remak -->
                    <div class="form-outliner mb-4">

                    
                        <label for="crop_remark" class="">Remark</label>
                        <input type="text" id="crop_remark" class="" placeholder="Write instructions" autocomplete="off
                        " required="required" name="crop_remark"/>
                    </div>
                    <!-- Rate -->
                    <div class="form-outliner mb-4">

                    
                        <label for="crop_remark" class="">Rate</label>
                        <input type="text" id="crop_rate" class="" placeholder="Write rate" autocomplete="off
                        " required="required" name="crop_rate"/>
                    </div>
                  

                    <div class="text-center">
                        <input type="submit" value="Post" class="btn"name="crop_sell">
                    </div>
                    

                </form>
                </div>
           
    </div>
    </div>

    

                        
</body>
</html>