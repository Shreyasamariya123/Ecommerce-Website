<?php 
session_start();

include("config.php");
if(!isset($_SESSION['valid'])){
    header("location:indexxx.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ecommerce Website</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
    <style>
      .normal {
        font-size: 14px;
        font-weight: 600px;
        padding: 15px 30px;
        color: black;
        background-color: white;
        cursor: pointer;
        border: none;
        border-radius: 4px;
        transition: 0.2s ease;
        outline: none;
      }
      .normal:hover {
        background-color: #088178;
        color: #fff;
      }
      .banner-box{
        display: flex;
        justify-content: center;
        flex-direction: column;
        
        align-items: flex-start;
        background-image:url(images/b17.jpg);
        min-width: 580px; ; 
        height: 50vh;
        background-size: cover;
        background-position: center;
        padding: 30px;
      }
      .white{
        font-size: 13px;
        font-weight: 600px;
        padding: 11px 18px;
        color: #fff;
        background-color:transparent;
        cursor: pointer;
        border: 1px solid #fff;
        transition: 0.2s ease;
        outline: none;
      }
      #banner3 .bannerbox{
       display: flex;
       justify-content: center;
       flex-direction: column;
       margin-bottom: 20px;
       align-items: flex-start;
       background-image:url(images/b7.jpg);
       min-width:30% ; 
       height: 30vh;
       background-size: cover;
       background-position: center;
       padding: 20px;
    }
    #banner3 h2{
      font-weight: 900;
      font-size: 22px;
    }  
    #banner3 h3{
      font-weight: 800;
      font-size: 15px;
    }
    #banner3{
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      padding: 0 80px;
    }
    .bannerbox2{
      display: flex;
      justify-content: center;
      flex-direction: column;
      margin-bottom: 20px;
      align-items: flex-start;
      background-image:url(images/b4.jpg);
      min-width:30% ; 
      height: 30vh;
      background-size: cover;
      background-position: center;
      padding: 20px;
    }
    .bannerbox3{
       background-image: url(images/b18.jpg);
        display: flex;
      justify-content: center;
       flex-direction: column;
       margin-bottom: 20px;
       align-items: flex-start;
       min-width:30% ; 
       height: 30vh;
       background-size: cover;
       background-position: center;
      padding: 20px;
    }
    #newsletter h2{
      padding-top: 20px;
      padding-left: 20px;
      }
  .logo{
  margin-bottom: 20px;
   }
  
    </style>
    </head>
<body>
   
        <?php
      
      $id =$_SESSION['id'];
      $query = mysqli_query($con,"SELECT*FROM users WHERE Id=$id");

      while($result= mysqli_fetch_assoc($query)){
        $res_Uname =$result['Username'];
        $res_Email =$result['Email'];
        $res_Age =$result['age'];
        $res_id =$result['Id'];
      }
      echo "<a href='edit.php'?Id=$res_id></a>";

?>

           
            
      
    <main class="taj"   > 
       
    
    <section id="header">
      <a href="#"
        ><img
          src="images/CARTIQUE__1___1_-removebg-preview (1).png"
          height="80px"
          width="120px"
      /></a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="index.html" class="">Home</a></li>
          <li><a href="shop.html" class="" target="_blank">Shop</a></li>
          <li><a href="blog.html" class="" target="_blank">Blog</a></li>
          <li><a href="about.html" class="" target="blank">About</a></li>
          <li><a href="contact.html" class="" target="_blank">Contact</a></li>
          <li><a href="logout.php" class="" target="blank">Logout</a></li>
          
          <li id="lg-bag">
            <a href="cart.html" class="">
              <i class="fas fa-shopping-bag"></i
            ></a>
          </li>
          <a href="#" id="close"><i class="fas fa-times"></i></a>
        </ul>
      </div>
      <div id="mobile">
        <a href="cart.html" class="">
          <i class="fas fa-shopping-bag"></i
        ></a>
        <i id="bar" class="fas fa-outdent"></i>
    
          
      </div>
    </section>
    <section id="hero">
      <h4>Trade-in-offer</h4>
      <h2>Super value deals</h2>
      <h1>On all Products</h1>
      <p>Save more with coupons & up to 70% off</p>
      <button>Shop Now</button>
    </section>
    <section id="feature" class="section-p1">
      <div class="fe-box">
        <img src="images/f1.png" alt="" />
        <h6>Free Shiping</h6>
      </div>
      <div class="fe-box">
        <img src="images/f2.png" alt="" />
        <h6>Online Order</h6>
      </div>
      <div class="fe-box">
        <img src="images/f3.png" alt="" />
        <h6>Save Money</h6>
      </div>
      <div class="fe-box">
        <img src="images/f4.png" alt="" />
        <h6>Promotion</h6>
      </div>
      <div class="fe-box">
        <img src="images/f5.png" alt="" />
        <h6>Happy Sell</h6>
      </div>
      <div class="fe-box">
        <img src="images/f6.png" alt="" />
        <h6>Support</h6>
      </div>
    </section>
    <section id="product1" class="section-p1">
      <h2><center>Featured Products</center></h2>
      <p><center>Summer Collecion New Modern Design</center></p>
      <div class="pro-container">
        <div class="pro">
          <img src="images/f1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/f6.jpg" alt="" />
          <div class="des">
            <span>ZARA</span>
            <h5>Shirt Full sleeves</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$100</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-1-1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Printed T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$80</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-6-1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Flowery Printed T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$90</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/f7.jpg" alt="" />
          <div class="des">
            <span>Dressberry</span>
            <h5>Bottom Wear</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$50</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-12-2.jpg" alt="" />
          <div class="des">
            <span>H&M</span>
            <h5>Printed Top wear</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$120</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/f4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Printed T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$63</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/f3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-9-1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-7-1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n6.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n8.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n2.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n5.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cartoon Astronaut T-Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
      </div>
    </section>
    <section id="banner" class="section-m1">
      <h4 style="color: greenyellow; font-size: 20px">Repair Services</h4>
      <h2 style="color: linen; padding-top: 20px">
        Up to <span style="color: crimson">70% Off </span>-All t-shirts &
        Accessories
      </h2>
      <button class="normal">Explore</button>
    </section>
    <section id="product1" class="section-p1">
      <h2><center>New Arrivals</center></h2>
      <p><center>Summer Collecion New Modern Design</center></p>
      <div class="pro-container">
        <div class="pro">
          <img src="images/n1.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Plain Full Sleeve Shirt</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n2.jpg" alt="" />
          <div class="des">
            <span>ZARA</span>
            <h5>Shirt Full sleeves</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$100</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n3.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Shirt Full sleeves</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$80</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n4.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Half Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$90</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n5.jpg" alt="" />
          <div class="des">
            <span>Dressberry</span>
            <h5>Denim Shirt</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$50</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n6.jpg" alt="" />
          <div class="des">
            <span>H&M</span>
            <h5>Bottom Wear</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$120</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n7.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Cotton Shirt Full Sleeve</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$63</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/n8.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Half Sleeve Shirts</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
        <div class="pro">
          <img src="images/product-5-2.jpg" alt="" />
          <div class="des">
            <span>adidas</span>
            <h5>Printed Hats</h5>
            <div class="star">
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
              <i class="fas fa-star" style="color: gold"></i>
            </div>
            <h4 style="color: #088171">$78</h4>
          </div>
          <a href="#" class=""
            ><i class="fas fa-shopping-cart" style="color: darkgoldenrod"></i
          ></a>
        </div>
    </section>
    <section id="sm-banner" class="section-p1">
      <div class="banner-box">
        <h4>Crazy Deals</h4>
        <h2>Buy 1 Get 1 Free</h2>
        <span>The best classic dress is on sale at cartique</span>
        <button class="white">Learn More</button>
      </div>
      <div class="banner-box banner-box2">
        <h4>spring/summer</h4>
        <h2 style="color:cornflowerblue;">upcoming season</h2>
        <span style="color: chocolate;">The best classic dress is on sale at cartique</span>
        <button class="white">Collecion</button>
      </div>
    </section>
    <section id="banner3">
      <div class="bannerbox">
        <h2 style="color:rgb(98, 60, 121);">SEASONAL SALE</h2>
        <h3>Winter Collection -50% OFF</h3>
      </div>
      <div class="bannerbox3">
        <h2 style="color:rgb(48, 64, 94);">T-SHIRTS</h2>
        <h3>New Trendy Prints</h3>
      </div>
      <div class="bannerbox2">
        <h2 style="color:rgb(103, 139, 206);">NEW FOOTWEAR COLLECTION</h2>
        <h3>Spring/Summer 2023</h3>
      </div>
    </section>
    <section id="newsletter">
      <div class="newspaper">
        <h2 style="color: blanchedalmond;">Sign Up For Newsletter</h2>
        <p>Get E-mail updates about our latest shop <span style="color:gold;">special offers</span></p>
      </div>
      <div class="form">
        <input type="email" placeholder="Your Email Address">
        <button class="normal">Sign Up</button>
      </div>
    </section>
   <footer class="section-p1">
      <div class="colimg">
      <img src="images/CARTIQUE__1___1_-removebg-preview (1).png" alt="" height="80px" width="120px" style="margin-top:0;">
      <h4>Contact</h4>
      <p><strong>Address:</strong>562 Wellington Road, Street 32,San Francisco</p>
      <p><strong>Phone:</strong> +01 2222 365/ (+91) 01 2345 6789</p>
      <p><strong>Hours:</strong> 10:00-18:00 , Mon - Sat</p>
      <div class="follow">
        <h4>Follow Us</h4>
        <div class="icon">
          <i class="fab fa-facebook-f" style="color: blue;"></i>
          <i class="fab fa-twitter" style="color: cornflowerblue;"></i>
          <i class="fab fa-instagram" style="color: rgba(211, 28, 187, 0.911);"></i>
          <i class="fab fa-pinterest-p" style="color: red;"></i>
          <i class="fab fa-youtube" style="color: red;"></i>
        </div>
      </div>
      </div>
      <div class="col">
        <h4>About</h4>
        <a href="about.html" class="">About Us</a>
        <a href="#" class="">Delivery Information</a>
        <a href="#" class="">Privacy Policy</a>
        <a href="#" class="">Terms and Condition</a>
        <a href="contact.html" class="">Contact Us</a>
      </div>
      <div class="col">
        <h4>My Account</h4>
        <a href="login.html" class="">Sign In</a>
        <a href="cart.html" class="">View Cart</a>
        <a href="#" class="">My Wishlist</a>
        <a href="#" class="">Track My Order</a>
        <a href="contact.html" class="">Help</a>
      </div>
      <div class="col install">
        <h4>Install App</h4>
        <p>From App Store OR Google Play</p>
        <div class="app">
         <a href="https://www.apple.com/in/store" class="" target="_blank"><img src="images/app.jpg" alt="" style="border: 1px solid black;" ></a>
        <a href="https://play.google.com/store/apps?utm_source=apac_med&hl=en-IN&utm_medium=hasem&utm_content=Oct0121&utm_campaign=Evergreen&pcampaignid=MKT-EDR-apac-in-1003227-med-hasem-ap-Evergreen-Oct0121-Text_Search_BKWS-BKWS%7CONSEM_kwid_43700064490253544_creativeid_480915691381_device_c&gclid=Cj0KCQjw3JanBhCPARIsAJpXTx4OUcIiUCyM6zJ1X0amBDmMgZEwJhEE5ELYZLyhCFOBZTRw479BufsaAu3GEALw_wcB&gclsrc=aw.ds&pli=1" class="" target="blank"><img src="images/play.jpg" alt="" style="border: 1px solid black;"></a>
      </div>
      </div>
       <div>
          <p>Secured Payment Gateways</p>
          <img src="images/pay.png" alt="">
      </div>
   </footer>
   <p> <center>© 1996-2023, Cartique.com, Inc. or its affiliates</center></p> 
  
    <script src="script.js"></script>
  
    </main>
</body>
</html>