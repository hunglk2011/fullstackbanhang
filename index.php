<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/css/style3.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
}
.wrapper{
  border:1px solid black;
  height: auto;
  width: 90%;
  margin: 0 auto;
 

}
.wrapper_detail{
  height: auto;
  width: 90%;
  margin: 0 auto;
}
.hinhanh_sp{
    
    float:left;
    width: 30%;
}
.chitiet_sp{
    float:right;
    width: 50%;
    margin:0 10px;
}
input.addtocart{
    border: none;
    background: brown;
    color:#ddd;
    padding: 12px;
    font-size: 15px;
    cursor: pointer;
}
input.addtocart:hover{
    background: #ddd;
    color:black;
}
.fa-minus-square {
    color: gold;
}
.fa-plus-square {
    color: cadetblue;
}
.header{
background-image:url("../Project_fn/images/banner.png") ;
background-repeat: none;
 border: 1px solid black;
 height:130px;
 width: 100%;
 background:brown;
}
.menu{
border: 1px solid black;
height: 60px;
width: 100%;
background:#D2B48C;
}
.main{
border: 1px solid black;
height:auto ;
width: 100%;

}
.sidebar{
border: 1px solid none;
height:390px ;
width: 20%;
margin-top: 45px;
margin-left: 5px;
float:left;
}
.maincontent{
    height: auto;
    width: 78%;
    margin-left: 10px;
    float: right;
    
}
ul.list_menu{
 padding: 0;
 margin: 0;
 width: 85%;
 list-style-type:none;
 margin: 0 auto;
 line-height: 30px;
}
ul.list_menu li{
    float: left;
    margin: 8px;
    padding: 5px;
    margin-top: 13px;
}
ul.list_menu li:hover{
    background:#CD853F;
    color: white;
    width: fit-content;
    
}
ul.list_menu li a{
    text-decoration: none;
    text-align: center;
    color:black;
    font-weight: bold;
    
}
/* SIDEBAR */
ul.list_sidebar{
 padding: 0;
 margin: 0;
 width: 70%;
 list-style-type:none;
 margin: 0 auto;
 margin-top: 30px;
 line-height: 30px;
}
ul.list_sidebar li{
    margin: 7px;
    padding: 5px;
}
ul.list_sidebar li:hover{
    background: #FF3333;
    color: brown;
    
}
ul.list_sidebar li a{
    text-decoration: none;
    text-align: left;
    color:black;
    font-weight: bold;
    display: block;
}
ul.product_list{
    padding: 0;
    margin: 0;
    list-style-type: none;
    width: 100%;

}
ul.product_list li{
    width: 15%;
}
ul.product_list li img{
    height: 190px;
    width: 60%;
}
ul.product_list li{
    width: 20%;
    border: 1px solid #ddd;
    margin: 6px;
    float:left;
    height: auto;
}
p.title_product{
    text-align: center;
    text-decoration: none;
    color:black;
    font-size: 11px;
    font-weight: bold;
    font-family: Arial, Helvetica, sans-serif;
}
p.title_price{
    text-align: center;
    color:black;
    font-size: 12px;
    font-weight: bold;
}
ul.product_list li a{
    text-decoration: none;
}
.clear{
  clear: both;  
}
.footer{
    border: 1px solid black;
    height:160px ;
    width: 100%;
    background: #D2B48C;
    color:black;
    text-align: center;
} 


 </style>
<body>
    <div class="wrapper">
   <?php
   include("Admincp/config/config.php");
    include("pages/header.php");
    include("pages/menu.php");
    include("pages/main.php");
    include("pages/footer.php");
   ?>
      

        
    </div>
</body>
</html>