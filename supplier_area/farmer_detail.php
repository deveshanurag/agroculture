<?php
include('../include/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
                        <meta charset="UTF-8">
                        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                        <meta name="viewport" content="width=-width, initial-scale=1.0">
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
}                             device
                        </style>
                         
</head>
<body>
<div class="heading" style="color:green" style="margin-left:500px"><h1 >Detail Of Farmer</h1></div>
                        <table style="border:2px solid black">
          
         <?php
         if(isset($_GET['farmer_detail']))
         {
          $supplier_name=$_GET['farmer_detail'];              
         $select_post="select * from `farmer_table` where farmer_username='$supplier_name'";
         $result_query=mysqli_query($con,$select_post);
         $result_count=mysqli_num_rows($result_query);
         if($result_count>0)
         {
           echo "
           <thead>
         <tr>
         
         <th>Name</th>
         <th>Email</th>
         <th>Image</th>
         <th>Contact</th>
         <th>Address</th>
         
         </tr>
         </thead> ";

         while($row=mysqli_fetch_array( $result_query))
         {
//              $supplier_name=$row['supplier_name'];
             $supplier_email=$row['farmer_email'];

             $supplier_contact=$row['farmer_contact'];

             $supplier_image=$row['farmer_image'];
             $supplier_address=$row['farmer_address'];

             ?>

<tbody>
<tr>
<td><?php echo $supplier_name ?> </td>
<td><?php echo $supplier_email ?></td>

<td><img src="../farmer_area/farmer_image/<?php echo $supplier_image ?>" alt="" style="height:35px"> </td>
                                                     
<td><?php echo $supplier_contact ?> </td>
<td><?php echo $supplier_address ?></td>                                                                    
<?php
            echo "
        </tr>";
        
    }
    
    //</tbody>
}
         }
    ?>

</table>

         
         





                                                                        



                                               
                                                
                                   
                                 

                        </table>
                        
</body>
</html>