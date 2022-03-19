<?php

?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goron | Blog</title>
</head>
<style type="text/css">
    *{
        padding:0;
        margin:0;
        box-sizing:border-box;
        text-decoration:none;
        list-style:none;
    }
    body{
        background-color:gray;
    }
    .nav-bar{
        width:100%;
        height:60px;
        background-color:white;
        display:flex;
        align-items:center;
        justify-content:space-between;
    }
    .mylogo-text{
        font-size:24px;
        font-weight:700;
        margin-left:50px;
    }
    .mylogo-text span{
        color:red;
        font-size:26px;
    }
    .menu-text{
        display:inline-flex;
        margin-right:50px;
    }
    .menu-text li{
        padding:0 10px;
        position: relative;
    }
    .menu-text li:focus{
        color:red;
    }
    .menu-text li::before{
        content: "";
        width:0;
        height:2px;
        background-color:red;
        position: absolute;
        left:0;
        bottom:0;
        transition:.5s;
    }
    .menu-text li:hover::before{
        width:100%;
    }
    .menu-text li a{
        font-size: 20px;
        font-weight:500;
        color:gray;
    }
    form{
        width:600px;
        background-color:white;
        display:flex;
        flex-direction:column;
        margin:50px auto;
        padding:20px;
    }
    .form-container h1{
        text-align:center;
    }
    .form-container label{
        margin:10px 0;
    }
    .form-container input{
        padding:10px 0;
    }
    .form-container .btn{
        width:150px;
        height:40px;
        display:block;
        margin:0 auto;
        background-color:red;
        color:white;
        font-weight:500;
        cursor:pointer;
        transition:.5s;
        margin-top:20px;
    }
    .form-container .btn:hover{
        background-color:white;
        border:2px solid red;
        color:red;
    }

    .index-container{
        text-align:center;
        display:flex;
        justify-content:space-between;
        padding:200px 50px;
    }
    .index-title{
        margin-left:100px;
    }
    .index-title h1{
        font-size:48px;
        text-transform:uppercase;
        font-weight:700;
        font-family: verdana;
        text-align:left;
        position: relative;
    }
    .index-title span{
        color:blue;
    }
    .index-info{
        width:500px;
        height:auto;
        padding:10px;
        margin-top:-150px;
    }
    .index-info p{
        font-size:20px;
        text-align:left;
    }
    .index-structure-container{
        width:500px;
        min-height:300px;
        max-height:auto;
        padding: 20px 10px;
        background-color:white;
        position: absolute;
        top:200px;
        right:50px;
        line-height:30px;
        border-radius:20px;
        opacity: .7;
    }
    .index-ul li{
        border: 1px solid black;
        padding:5px;
    }
    .index-buttons{
        margin-top:10px;
        display:flex;
        justify-content:space-evenly;
    }
    .index-buttons .index{
        width:100px;
        height:auto;
        padding:10px 5px;
        cursor:pointer;
        transition:.5s;
        font-weight:700;
        background-color:gray;
    }
    .index, .index a{
        color:white;
        font-weight:700;
    }
    .create-btn:hover{
        background-color:blue;
    }
    .update-btn:hover{
        background-color:green;
    }
    .delete-btn:hover{
        background-color:red;
    }

</style>
<body>
    <div class="container">
        <nav class="nav-bar">
            <div class="mylogo-text">egoron<span>web</span></div>
            <ul class="menu-text">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </div>