<?php
/**
 * Created by IntelliJ IDEA.
 * User: User
 * Date: 6/29/2019
 * Time: 6:28 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashbord</title>

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
                        <i class="fas fa-cog"></i>
                        <span class="badge badge-success">11</span>
                        </i>
                        Settings
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

<div class="ui inverted menu"
     style="width: 98%;height: 60px;margin-left: 13px;font-size: 20px;background-color: #33383C">

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


<section style="padding-left: 80px;padding-top: 20px">
    <div class="ui link cards">
        <div class="card">
            <div class="image">
                <img src="image/aaa.png " style="width: 100px">
            </div>
            <div class="content">
                <div class="header">Total Customers</div>

            </div>
            <div class="extra content">
      <span class="right floated">
        456
      </span>
                <span>
        <i class="fas fa-sync-alt"></i>
        Update
      </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="image/orderss.png" style="width: 100px;">
            </div>
            <div class="content">
                <div class="header">Today Orders</div>
            </div>
            <div class="extra content">
      <span class="right floated">
        246
      </span>
                <span>
        <i class="fas fa-sync-alt"></i>
        Update
      </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="image/sup.png" style="width:100px">
            </div>
            <div class="content">
                <div class="header">Supliers</div>

            </div>
            <div class="extra content">
      <span class="right floated">57
      </span>
                <span>
       <i class="fas fa-sync-alt"></i>
        Update
      </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="image/user.png" style="width: 100px">
            </div>
            <div class="content">
                <div class="header">Users</div>

            </div>
            <div class="extra content">
      <span class="right floated">
        45
      </span>
                <span>
        <i class="fas fa-sync-alt"></i>
        Update
      </span>
            </div>
        </div>
    </div>



    <div class="ui padded segment" style="width: 94%;height: 500px">
        <!--<img src="image/chart-update-default.png" alt="">-->
        <img src="image/original.png" alt="">
    </div>



</section>


</body>
</html>