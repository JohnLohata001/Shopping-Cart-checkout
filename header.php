<?php require '_header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mon super project</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap5.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

</head>

<body>


    <!--  -->

    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-info" style="border-top:solid 2px #000">
            <div class="container">

                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4"><a href="./" class="text-dark" style="text-decoration:none"><b>TECH DEVE INFO</b></a></div>
                                <div class="col-md-4"><span><a href="./" class="text-dark" style="text-decoration:none">Home </a> </span> </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center text-dark"><i>Designed by John Kalonda <span>E-mail : lohatajean@gmail.com</span></i></div>
                    </div>
                </div>

            </div>
        </nav>
    </header>

    <!--  -->
    <div id="subNavbar" style="background: #000;padding:5px;border-top: solid 2px #f1f1f1;">
        <div class="container p-2">
            <div class="row">
                <ul style="list-style: none; padding:0px; margin:0px" class="col-lg-6">
                    <li style="display:inline"><a style="text-decoration:none;color:white;border:solid 1px white;border-radius:5px; padding:3px 14px" href="pagner.php"> <img src="img/header_cart.png" width='20'> Cart (<?= $pagner->count(); ?>)</a></li>

                </ul>
                <ul style="list-style: none; padding:0px; margin:0px" class="col-lg-6 text-center">
                    <li style="display:inline">
                        <h4 class="p-0 m-0 text-white">Total with Tax : <span><?= number_format($pagner->total() * 1.196, 2, '.', ' '); ?></span></h4>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- Page Content -->
    <div class="container">