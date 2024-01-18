<?php 
require "./database/connection.php";

if(isset($_GET['id'])){
    // echo "id found";
 echo $id=$_GET['id'];


$query="DELETE FROM `services` WHERE `service_id`=$id;";
$result=mysqli_query($connection,$query);
if($result){
 echo '<script>alert("Record Deleted Succesfully")
 window.location.href="services.php"
 </script>';



}else{
    echo'<script>alert("Fail to Delete this record")
    window.location.href="services.php"
    </script>';
  

}


}else{
    echo "id not found";
}

?>

