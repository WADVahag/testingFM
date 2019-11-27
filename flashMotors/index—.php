<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
</head>

<body>
    <div class="top-bar">
        <img src="img/logo.png" alt="">
    </div>
    <div class="steps">
        <ul v-if="$route.name=='home' || !$route.params.id">
            <li>
                <router-link :to="{name: 'home'}" class="home">☰</router-link>
            </li>
            <!-- <li v-if="$route.name=='home'"><a>ՏՍԿ Կարգագիր</a></li> -->
            <li v-else>
                <router-link :to="{name: 'order'}">ՏՍԿ Կարգագիր</router-link>
            </li>
            <li><a>ՏՍԿ Պահեստ</a></li>
            <li><a>Խանութ</a></li>
            <li><a>Մատակարար</a></li>
            <li><a>Գնումներ</a></li>
            <li><a>Արհեստավոր</a></li>
            <li><a>Դրամարկղ</a></li>
            <li><a>Հաշվետվություն</a></li>
        </ul>
        <!-- <ul v-else>
            <li>
                <router-link :to="{name: 'home'}" class="home">☰</router-link>
            </li>
            <li>
                <router-link :to="{name: 'view-order', params: {id: $route.params.id}}">ՏՍԿ Կարգագիր</router-link>
            </li>
            <li>
                <router-link :to="{name: 'storage', params: {id: $route.params.id}}">ՏՍԿ Պահեստ</router-link>
            </li>
            <li>
                <router-link :to="{name: 'shop', params: {id: $route.params.id}}">Խանութ</router-link>
            </li>
            <li>
                <router-link :to="{name: 'delivery', params: {id: $route.params.id}}">Մատակարար</router-link>
            </li>
            <li>
                <router-link :to="{name: 'buying', params: {id: $route.params.id}}">Գնումներ</router-link>
            </li>
            <li>
                <router-link :to="{name: 'master', params: {id: $route.params.id}}">Արհեստավոր</router-link>
            </li>
            <li>
                <router-link :to="{name: 'cash-box', params: {id: $route.params.id}}">Դրամարկղ</router-link>
            </li>
            <li>
                <router-link :to="{name: 'report', params: {id: $route.params.id}}">Հաշվետվություն</router-link>
            </li>
        </ul> -->
        <div v-if="$route.name=='home'">
            <router-link :to="{name: 'order'}">
                <button class="button">Ստեղծել պատվեր</button>
            </router-link>
        </div>
    </div>
    <?php require_once('./forms/form1.php') ?>
</body>
<style>
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