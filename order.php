<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/29/2019
 * Time: 6:33 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order</title>

    <link rel="stylesheet" type="text/css" href="css/semantic.min.css">
    <script
        src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
    <script src="js/semantic.min.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cssDashbord.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">






</head>
<body>


<header style="width:100%" >
    <nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark" style="height: 75px">

        <img src="image/k.png" alt="" width="160" style="padding: 10px">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#" >
                        <i class="fa fa-home"></i>
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-danger">11</span>
                        </i>
                        Link
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">
                        <i class="fa fa-envelope-o">
                            <span class="badge badge-warning">11</span>
                        </i>
                        Disabled
                    </a>
                </li>
                <!--<li class="nav-item dropdown">-->
                <!--<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                <!--<i class="fa fa-envelope-o">-->
                <!--<span class="badge badge-primary">11</span>-->
                <!--</i>-->
                <!--Dropdown-->
                <!--</a>-->
                <!--<div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
                <!--<select name="" id="">-->
                <!--<option value="">Apps</option>-->
                <!--<option value="">Apps</option>-->
                <!--<option value="">Apps</option>-->
                <!--<option value="">Apps</option>-->
                <!--<option value="">Apps</option>-->
                <!--</select>-->

                <!--</div>-->
                <!--</li>-->
            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-bell">
                            <span class="badge badge-info">11</span>
                        </i>
                        Notification
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-cog">
                            <span class="badge badge-success">11</span>
                        </i>
                        Setting
                    </a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
</header>


<div class="ui inverted menu" style="width: 98%;height: 60px;margin-left: 13px;font-size: 20px;background-color: #33383C">

    <a class="item" style="padding-left: 65px;padding-right: 75px" href="dashbord.php">
        <img src="image/icons8_Real_Estate.ico" alt="">Dashbord
    </a>
    <a class="item" style="padding-left: 70px;padding-right: 75px" href="customer1.php">
        <img src="image/icons8_Customer.ico" alt="">Customer
    </a>
    <a class="item " style="padding-left: 85px;padding-right: 80px" href="item1.php">
        <img src="image/icons8_Trolley.ico" alt="">Item
    </a>
    <a class="item " style="padding-left: 85px;padding-right: 75px" href="order.php">
        <img src="image/icons8_Buy.ico" alt=""> Order
    </a>
    <a class="item " style="padding-left: 75px;padding-right: 75px" href="Reports.html">
        <img src="image/icons8_Brief.ico" alt="">Report
    </a>
</div>


<div class="ui three steps" style="width: 98%;margin-left: 12px">

    <div class="active step">
        <i class="fas fa-check" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Fill Detail</div>
        </div>
    </div>


    <div class="step">
        <i class="fas fa-cart-plus" style="font-size: 30px"></i>
        <div class="content" style="padding-left: 20px">
            <div class="title">Order Items</div>
        </div>
    </div>


</div>

<section style="margin-top: 10px">

    <form style="width: 90%;margin-left:70px;padding-top: 40px">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Order ID</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="ID">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPasswrd4">Order Date</label>
                <input type="date" class="form-control" id="inputPassword" placeholder="Last Name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4"> Customer ID</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="ID">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">First Name</label>
                <input type="text" class="form-control" id="inputEmail" placeholder="First Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPasswrd4">Last Name</label>
                <input type="text" class="form-control" id="inputPassword" placeholder="Last Name">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="text" class="form-control"  placeholder="@gmail.com">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Tell</label>
                <input type="text" class="form-control"  placeholder="+94">
            </div>
        </div>

        <a href="order2.php"> <button type="button" class="btn btn-primary"><i class="fas fa-forward" style="font-size: 25px"></i> </button></a>
    </form>

</section>



</body>
</html>
