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
         $select_post="select * from `complain_table`";
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
         <th>Farmer</th> 
         <th>Mark Read</th>
         
         
         
         </tr>
         </thead> ";
         $number=1;
         while($row=mysqli_fetch_array( $result_query))
         {
             $complain_id=$row['complain_id'];           
             $complain_name=$row['complain_name'];
             $complain_desc=$row['complain_desc'];
             $complain_farmer=$row['complain_farmer'];
             $complain_status=$row['complain_status'];
             

            

             
             ?>

<tbody>
<tr>
<td><?php echo $number ?> </td>
<td><?php echo $complain_name ?></td>
<td><?php echo $complain_desc ?></td>

                                                     
<td><?php echo $complain_farmer ?></td>
<?php
                if($complain_status=='unread')
            {echo "
                <td><h5><a href='admin_profile.php?complain_id=$complain_id'  style='text-decoration:none'>Mark as read</a></h5></td>
            </tr>";
            }
            else
            {
                echo"<td><h5 class='text-light text-decoration-none'>Read</a></td>
                </tr>";
            }
            ?>

                                                                        
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