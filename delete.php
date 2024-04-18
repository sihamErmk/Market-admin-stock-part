<?php 

$conn=mysqli_connect('localhost','root','','assoc');



if(isset($_GET['deletedid'])){
    $user_id=$_GET['deletedid'];
    $sql="delete from users where user_id=$user_id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header(('location:index.php'));
    }
    else{
        die(mysqli_error(($conn)));
    }

}

?>