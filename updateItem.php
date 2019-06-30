<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/30/2019
 * Time: 10:35 AM
 */
?>


<?php

$code=$_POST["code"];
$name=$_POST["name"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$qty=$_POST["qty"];

$connection = mysqli_connect("localhost", "root", "1234", "MyPos");


if($connection){
    $SQL="update item set ItemName='$name',ItemBrand='$brand',UnitPrice='$price',Quantity='$qty' where ItemCode='$code' ";
    $result=mysqli_query($connection,$SQL);

    if($result  && mysqli_affected_rows($connection)>0){
        echo "Item Updated Successfully......";
    }else{
        echo $cid;
        echo "Item Not Update...."."<br>"."    ".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>




