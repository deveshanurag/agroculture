<?php
include('../include/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Document</title>
                        <style>
                        table, th, td {
                        border: 1px solid;
                        text-align: center;
                        } 
                        table {
                        border-collapse: collapse;
                        width: 100%;
                        }   
                        th {
                        height: 70px;
                        }   
                        .heading {
  
  margin-left: 650px;
}                             
                        </style>
                         
</head>
<body>
<div class="heading" style="color:green" style="margin-left:500px"><h1 >Details Of Crop</h1></div>
                        <table style="border:2px solid black">
          
         <?php
         $select_post="select * from `crop_sell`";
         $result_query=mysqli_query($con,$select_post);
         $result_count=mysqli_num_rows($result_query);
         if($result_count>0)
         {
           echo "
           <thead>
         <tr>
         <th>Sl no</th>
         <th>Name</th>
         <th>Quantity</th>
         <th>Image</th>
         <th>Rate</th>
         <th>remark</th>
         <th>Farmer</th>
         
         
         </tr>
         </thead> ";
         $number=1;
         while($row=mysqli_fetch_array( $result_query))
         {
             $crop_name=$row['crop_name'];
             $crop_quantity=$row['crop_quantity'];

             $crop_remark=$row['crop_remark'];

             $crop_image=$row['crop_image'];
             $crop_seller=$row['crop_seller'];
             $crop_rate=$row['crop_rate'];
             ?>

<tbody>
<tr>
<td><?php echo $number ?> </td>
<td><?php echo $crop_name ?></td>
<td><?php echo $crop_quantity ?></td>
<td><img src="../farmer_area/crop_image/<?php echo $crop_image ?>" alt="" style="height:35px"> </td>
<td><?php echo $crop_rate ?></td>                                                   
<td><?php echo $crop_remark ?></td>
<td><a href='supplier_profile.php?farmer_detail=<?php echo $crop_seller ?>' style="text-decoration:none"><?php echo $crop_seller ?></a> </td>
                                                                        
<?php
            echo "
        </tr>";
        $number++;
    }
    
    //</tbody>
}
    ?>

</table>

         
         





                                                                        



                                               
                                                
                                   
                                 

                        </table>
                        
</body>
</html>