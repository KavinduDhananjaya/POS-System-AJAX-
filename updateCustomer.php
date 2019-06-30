<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/30/2019
 * Time: 9:38 AM
 */
?>

<?php

$name1=$_POST["firstname"];
$name2=$_POST["lastname"];
$cid=$_POST["cid"];
$address=$_POST["address"];
$email=$_POST["email"];
$tell=$_POST["tell"];


$connection = mysqli_connect("localhost", "root", "1234", "MyPos");


if($connection){
    $SQL="update customer set FirstName='$name1',LastName='$name2',Address='$address',Email='$email',Tell='$tell' where CID='$cid'";
    $result=mysqli_query($connection,$SQL);

    if($result  && mysqli_affected_rows($connection)>0){
        echo "Customer Updated Successfully......";
    }else{
        echo $cid;
        echo "Customer Not Update...."."<br>"."    ".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>


