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
<div class="heading" style="color:green" style="margin-left:500px"><h1 >Farming Tips</h1></div>
                        <table style="border:2px solid black">
          
         <?php
         $select_post="select * from `tips_table`";
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
         <th>Admin</th>
         
         
         
         </tr>
         </thead> ";
         $number=1;
         while($row=mysqli_fetch_array( $result_query))
         {
             $complain_id=$row['tips_id'];           
             $complain_name=$row['tips_name'];
             $complain_desc=$row['tips_desc'];

             $tips_admin=$row['tips_admin'];

             
             ?>

<tbody>
<tr>
<td><?php echo $number ?> </td>
<td><?php echo $complain_name ?></td>
<td><?php echo $complain_desc ?></td>

                                                     
<td><?php echo $tips_admin?></td>

                                                                        
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