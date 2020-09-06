﻿<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="intro">
        <title> المعهد </title>
        <link rel="stylesheet" href="css/css.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Changa:wght@800&family=Lalezar&family=Lemonada:wght@300&family=Rakkas&family=Reem+Kufi&display=swap" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                    $('.sidebarbtn').click(function(){
                        $('.sidebar').toggleClass('active');
                        $('.sidebarbtn').toggleClass('toggle');
                })
        }) 
        </script>
        <script>
            setTimeout(function(){
                window.location.href = 'elmahad.php';
         }, 
                6500);
        </script>
    </head>
    <body>
        <!-- start nav -->
        <nav>
            <button> <a href="user/login.php">Login</a> </button> |
            <button> <a href="user/signup.php">Sign up</a> </button>
        </nav>
        <!-- end nav -->
        <!-- start sidebar -->
        <div class="sidebar"> 
            <ul>
                <li><a href="elmahad.php"> الصفحة الرئيسية </a> </li>
                <li><a href="user/login.php"> المناهج </a> </li>
                <li><a href="table.php"> الجدول </a> </li>
                <li><a href="elt3ref.php"> تعريف </a> </li>
                <li><a href="call.php"> الاتصال </a> </li>
                <li><a href="note.php"> الملاحظات </a> </li>
            </ul>
            <button class="sidebarbtn"> 
                <span>  </span>
            </button>
        </div>
        <!-- end sidebar -->
        <!-- start intro -->
        <div class="intro">
            <h2>
                <span> S </span>
                <span> a </span>
                <span> h </span>
                <span> a </span>
                <span> f </span>
                <span> a </span>
                &nbsp;
                <span> T </span>
                <span> e </span>
                <span> c </span>
                <span> h </span>
                <span> n </span>
                <span> o </span>
                <span> l </span>
                <span> o </span>
                <span> g </span>
                <span> i </span>
                <span> c </span>
                <span> a </span>
                <span> l </span>
                &nbsp;
                <span> C </span>
                <span> o </span>
                <span> l </span>
                <span> l </span>
                <span> e </span>
                <span> g </span>
                <span> e </span>
            </h2>
        </div>
        <!-- end intro -->
    </body>
</html>