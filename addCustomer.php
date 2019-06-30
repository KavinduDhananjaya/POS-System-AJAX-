<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/29/2019
 * Time: 8:34 PM
 */
?>
<?php

$name1=$_POST['firstname'];
$name2=$_POST["lastname"];
$cid=$_POST["cid"];
$address=$_POST["address"];
$email=$_POST["email"];
$tell=$_POST["tell"];


$connection = mysqli_connect("localhost", "root", "1234", "MyPos");


if($connection){
    $SQL="insert into customer values ('$name1','$name2','$cid','$address','$email','$tell')";
    $result=mysqli_query($connection,$SQL);

    if($result){
        echo "Customer Added Successfully.....";
    }else{
        echo $cid;
        echo "Customer Not Added....."."<br>"."    ".mysqli_error($connection);
    }
}else{
    echo mysqli_connect_error();
}

?>

