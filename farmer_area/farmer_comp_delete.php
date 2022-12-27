<?php
include('../include/connection.php');
$comp_id=$_GET['farmer_comp_delete'];

$delete_query="Delete from `complain_table` where complain_id=$comp_id ";
  $run_delete=mysqli_query($con,$delete_query);
  if($run_delete)
  {
    echo "<script>alert('Delected Successfully')</script>";
    echo "<script>window.open('farmer_profile.php','_self')</script>";
  }
?>