<?php

$admin_username=$_SESSION['a_username'];
include('../include/connection.php');
if(isset($_POST['post_tips']))
{
   $tips_name=$_POST['tips_name'];
   $tips_desc=$_POST['tips_desc'];
   

   
   $comp_insert="insert into `tips_table`(tips_name,tips_desc,tips_admin) values('$tips_name','$tips_desc','$admin_username')";
   $comp_result=mysqli_query($con,$comp_insert);
   if($comp_result)
   {
                        echo "<script>alert('Your tips is successfully posted')</script>";            
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
                        <div class="heading" style="color:green" ><h1 >Your Tips Page</h1></div>
        
        <div >
           
                <form action="" method="post" enctype="multipart/form-data">
                     <!-- crop -->
                     <div class="form-block">

                    
<label for="tips_name" class="">Tips Title</label>
<input type="text" id="tips_name" class="" placeholder="Type your tips's title here" autocomplete="off
" required="required" name="tips_name"/>
</div>


                   
                   
                   

                   <!-- Remak -->
                   <div class="form-group">
        <label for="description">Description</label><br>
        <textarea class="form-control" id="description" name="tips_desc"style="width:473px ;height:70px "></textarea>
      </div>
                   
                  

                    <div class="text-center">
                        <input type="submit" value="Post" class="btn"name="post_tips">
                    </div>
                    

                </form>
                </div>
           
    </div>
    </div>

    

                        
</body>
</html>