<?php

if(isset($_GET['edit_profile']))
{
    $supplier_session_name= $_SESSION['username'];
    $select_query="Select * from `supplier_table` where supplier_username='$supplier_session_name'";
    $result_query=mysqli_query($con,$select_query);
    $row_fetch=mysqli_fetch_assoc($result_query);
    $supplier_id=$row_fetch['supplier_id'];
    $supplier_userrname=$row_fetch['supplier_username'];
    $supplier_email=$row_fetch['supplier_email'];
    $supplier_address=$row_fetch['supplier_address'];
    $supplier_contact=$row_fetch['supplier_contact'];
    

}
if(isset($_POST['supplier_update']))
{
    $update_id=$supplier_id;
    $userrname=$_POST['supplier_username'];
    $userr_email=$_POST['supplier_email'];
    $userr_address=$_POST['supplier_address'];
    $userr_mobile=$_POST['supplier_contact'];
    $userr_image=$_FILES['supplier_image']['name'];             
    $userr_image_tmp=$_FILES['supplier_image']['tmp_name'];
    move_uploaded_file($userr_image_tmp,"./supplier_images/$userr_image");

    //update query
    $update_query="Update `supplier_table` set supplier_username='$userrname',supplier_email='$userr_email',supplier_image='$userr_image',
    supplier_address='$userr_address',supplier_contact='$userr_mobile' where supplier_id='$update_id'";
    $result_query_update=mysqli_query($con,$update_query);
    if($result_query_update)

    {
        echo "<script>alert('Data updated successfully')</script>";
        echo "<script>window.open('../index.php','_self')</script>";
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
                        <div class="heading" style="color:green" ><h1 >Edit Profile</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                    <!-- username -->
                    <div class="form-block">

                    
                        
                        <input type="text" value="<?php echo $supplier_userrname  ?>" name="supplier_username"/>
                    </div>
                    <!-- email -->
                    <div class="">
                    
                        <input type="email" value="<?php echo $supplier_email  ?>"  name="supplier_email"/>

                    </div>
                    <!-- image -->
                    <div class="form-outliner mb-4">
                    
                        <input type="file" id="user_imagee" class="" 
                         required="required" name="supplier_image"/>

                    </div>
                    <!-- password -->

                    
                   <!-- address -->
                    <div class="form-outliner mb-4">

                    
                        
                        <input type="text" value="<?php echo $supplier_address  ?>" name="supplier_address"/>
                    </div>
                    <!--contact -->

                    <div class="form-outliner mb-4">

                    
                        
                        <input type="text"  value="<?php echo $supplier_contact  ?>" name="supplier_contact"/>
                    </div>

                    <div class="text-center">
                        <input type="submit" value="Update" class="btn"name="supplier_update">
                    </div>
                    
                </form>
                </div>
           
    </div>
    </div>

    
    
</body>
</html>