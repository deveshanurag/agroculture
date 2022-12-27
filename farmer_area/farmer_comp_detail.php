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
<div class="heading" style="color:green" style="margin-left:500px"><h1 >Details Of Complain</h1></div>
                        <table style="border:2px solid black">
          
         <?php
         $farmer=$_SESSION['f_username'];
         $select_post="select * from `complain_table` where complain_farmer='$farmer'";
         $result_query=mysqli_query($con,$select_post);
         $result_count=mysqli_num_rows($result_query);
         if($result_count>0)
         {
           echo "
           <thead>
         <tr>
         <th>Sl no</th>
         <th>Title</th>
         <th>Description</th>
         <th>Status</th>
         <th>Action</th>
         
         
         </tr>
         </thead> ";
         $number=1;
         while($row=mysqli_fetch_array( $result_query))
         {
             $complain_id=$row['complain_id'];           
             $complain_name=$row['complain_name'];
             $complain_desc=$row['complain_desc'];

             $complain_status=$row['complain_status'];

             
             ?>

<tbody>
<tr>
<td><?php echo $number ?> </td>
<td><?php echo $complain_name ?></td>
<td><?php echo $complain_desc ?></td>

                                                     
<td><?php echo $complain_status ?></td>
<td><a href='farmer_profile.php?farmer_comp_delete=<?php echo $complain_id ?>' style="text-decoration:none"><?php echo "Delete" ?></a> </td>
                                                                        
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