<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/30/2019
 * Time: 10:35 AM
 */
?>

<?php

$code=$_POST['code'];
$name=$_POST["name"];
$brand=$_POST["brand"];
$price=$_POST["price"];
$qty=$_POST["qty"];

$connection = mysqli_connect("localhost", "root", "1234", "MyPos");


if($connection){
    $SQL="insert into item values ('$code','$name','$brand','$price','$qty')";
    $result=mysqli_query($connection,$SQL);

    if($result){
        echo "Item Added Successfully.....!";
    }else{
        echo $cid;
        echo "Item Not Added....."."<br>"."    ".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>


