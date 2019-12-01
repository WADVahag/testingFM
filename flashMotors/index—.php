<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
</head>

<body>
    <div class="top-bar">
        <img src="img/logo.png" alt="">
    </div>
    <nav>
        <div class="nav nav-tabs navMain" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">☰</a>
            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-view-order" role="tab" aria-controls="nav-view-order" aria-selected="false">ՏՍԿ Կարգագիր</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-storage" role="tab" aria-controls="nav-storage" aria-selected="false">ՏՍԿ Պահեստ</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-shop" role="tab" aria-controls="nav-shop" aria-selected="false">Խանութ</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-delivery" role="tab" aria-controls="nav-delivery" aria-selected="false">Մատակարար</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-buying" role="tab" aria-controls="nav-buying" aria-selected="false">Գնումներ</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-master" role="tab" aria-controls="nav-master" aria-selected="false">Արհեստավոր</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-cash-box" role="tab" aria-controls="nav-cash-box" aria-selected="false">Դրամարկղ</a>
            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">Հաշվետվություն</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">home</div>
        <div class="tab-pane fade" id="nav-view-order" role="tabpanel" aria-labelledby="nav-profile-tab"><?php require_once('./forms/form1.php') ?></div>
        <div class="tab-pane fade" id="nav-storage" role="tabpanel" aria-labelledby="nav-contact-tab">storage</div>
        <div class="tab-pane fade" id="nav-shop" role="tabpanel" aria-labelledby="nav-contact-tab">shop</div>
        <div class="tab-pane fade" id="nav-delivery" role="tabpanel" aria-labelledby="nav-contact-tab">delivery</div>
        <div class="tab-pane fade" id="nav-buying" role="tabpanel" aria-labelledby="nav-contact-tab">buying</div>
        <div class="tab-pane fade" id="nav-master" role="tabpanel" aria-labelledby="nav-contact-tab">master</div>
        <div class="tab-pane fade" id="nav-cash-box" role="tabpanel" aria-labelledby="nav-contact-tab">cash-box</div>
        <div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-contact-tab">report</div>
    </div>

</body>
<style>
    .nav-tabs .nav-link.active {
        color: #7A1878;
        background-color: #fff;
        border-color: #7A1878 #7A1878 #fff;
    }

    .nav-tabs {
        border-bottom: 1px solid #7A1878;
    }

    a {
        color: #000;
    }

    a:hover {

        color: #7A1878;
    }

    .navMain {
        margin-top: 15px;
        justify-content: space-evenly;
    }

    .top-bar {
        height: 40px;
        background: #000;
        background: linear-gradient(45deg, black 15%, white 100%);
    }

    .top-bar img {
        height: 40px;
    }

    .steps {
        padding-left: 15px;
        padding-right: 15px;
        margin-bottom: 15px;
    }

    .steps ul {
        width: 100%;
        display: flex;
        list-style: none;
        padding: 0;
        margin: 0;
        margin-top: 15px;
    }

    .steps ul li {
        flex-basis: 12.5%;
        text-align: center;
    }

    .steps ul li:first-child {
        flex-basis: 50px;
    }

    .steps ul li a {
        color: #000;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        display: block;
        border-bottom: 1px solid #a80181;
        border-left: 1px solid transparent;
        border-right: 1px solid transparent;
        border-top: 1px solid transparent;
        position: relative;
    }

    .steps ul li a.router-link-active:not(.home),
    .steps ul li a.router-link-active.router-link-exact-active {
        border-bottom: 0;
        border-left: 1px solid #a80181;
        border-right: 1px solid #a80181;
        border-top: 1px solid #a80181;
        border-radius: 8px 8px 0 0;
    }

    .steps .button {
        margin-top: 30px;
        width: 200px;
    }
</style>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js" integrity="sha384-3qaqj0lc6sV/qpzrc1N5DC6i1VRn/HyX4qdPaiEFbn54VjQBEU341pvjz7Dv3n6P" crossorigin="anonymous"></script>

</html>