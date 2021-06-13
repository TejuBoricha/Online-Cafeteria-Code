<?php
session_start();

 if(!isset($_SESSION['id']))
 {
      header("location:index.php");
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Online Cafeteria </title>

    <!-- aos css cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- google fonts cdn link  --> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;400;500&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">"
    
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- custom jsfile link  -->
    <script src="script.js"></script>

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><img src="logo-img.png" alt=""><h1 style="color:#e05f23;">Online Cafeteria</h1></a>
    

    <div id="menu-bar" class="fas fa-hamburger"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#menu">menu</a></li>
            <li><a href="#popular">popular</a></li>
            <li><a href="#gallery">gallery</a></li>
            <li><a href="#order">order</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content" data-aos="fade-right">
        <h3>Fun. Family. Fiesta.</h3>
        <p>Get Your Favourite Meal Everywhere Colleges,Hotel,At Home,Office etc. We are here to provide Best Quality of Food :) </p>
        <a href="#"><button class="btn">get started</button></a>
    </div>

    <div class="image" data-aos="fade-up">
        <img src="home-img.png" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image" data-aos="fade-right"><img src="about-img.jpg" alt=""></div>
    
    <div class="content" data-aos="fade-left">
        <h3>a word about us</h3>
        <p>Extraordinary FOOD COMES FIRST</p>
        <p>Consistently, in excess of 11 million visitors visit ‘Online Cafeteria’  eateries around the globe. What’s more, they do as such in light of the fact that our eateries are known for serving astounding, incredible tasting, and reasonable food. Established in 2020, Online Cafeteria®is the biggest Home Meal chain on the planet.our promise to premium fixings, signature formulas, and family-accommodating feasting encounters is the thing that has characterized our image for in excess of 1 fruitful years.</p>
        <a href="#"><button class="btn">learn more</button></a>
    </div>

</section>

<!-- about section ends -->

<section class="menu" id="menu">

<h1 class="heading"> our delicious <span>menu</span> </h1>

<ul class="list" data-aos="fade-down">
    <li class="btn" data-src="menu1.jpg">breakfast</li>
    <li class="btn active" data-src="menu2.jpg">lunch</li>
    <li class="btn" data-src="menu3.jpg">dinner</li>
    <li class="btn" data-src="menu4.jpg">dessert</li>
</ul>

<div class="row" data-aos="fade-right">

    <div class="image" data-aos="fade-left">
        <img src="menu2.jpg" id="menu-img" alt="">
    </div>

    <div class="content">
        <div class="info">
            <h3> <span>01.</span> Breakfast </h3>
            <p>The next time you think to yourself, straining your brain, “where are the best breakfast places near me?”— remember, Online Cafeteria is the first place to look. When you use Online Cafeteria’s website or mobile app, you have access to a plethora of delicious breakfast options, from the charming French bakery and café around the corner to your favorite chocolate-glazed donut at Dunkin’ Donuts, or your favorite coffee drink.</p>
        </div>
        <div class="info">
            <h3> <span>02.</span> Lunch </h3>
            <p>When you’re in the office or at home and don’t know what to order for lunch, consider items that will get you through your day, not just hold you over!  There are many options to consider, but make sure you’re consuming your daily doses of protein and vitamins! </p>
        </div>
        <div class="info">
            <h3> <span>03.</span> Dinner </h3>
            <p>Weeknight dinners a bit same same these days? If you’re looking for a flavour bomb, and don’t know where to start, Indian vegetarian dinner recipes will have your tastebuds zinging, and the family elbowing each other out of the way for more</p>
        </div>
        <div class="info">
            <h3> <span>04.</span> Dessert </h3>
            <p>Don't stop spreading sweetness and joy even on your locked down days! Order Now</p>
        </div>
    </div>

</div>

</section>

<!-- popular section starts  -->

<section class="popular" id="popular">

<h1 class="heading"> most <span>popular</span> foods </h1>

<div class="box-container">

    <div class="box" data-aos="fade-right">
        <img src="product1.jpg" alt="">
        <h3>Maxican Pizza</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">₹399.00</div>
        <a href="#"><button class="btn">add to cart</button></a>
    </div>

    <div class="box" data-aos="fade-left">
        <img src="product2.jpg" alt="">
        <h3>Paneer Handi</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">₹500.00</div>
        <a href="#"><button class="btn">add to cart</button></a>
    </div>

    <div class="box" data-aos="fade-right">
        <img src="product3.jpg" alt="">
        <h3>Gujarati Fix Dish</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">₹180.00</div>
        <a href="#"><button class="btn">add to cart</button></a>
    </div>

    <div class="box" data-aos="fade-left">
        <img src="product4.jpg" alt="">
        <h3>Pulao</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <div class="price">₹150.00</div>
        <a href="#"><button class="btn">add to cart</button></a>
    </div>

</div>

</section>

<!-- popular section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

<h1 class="heading"> our food <span>gallery</span> </h1>

<div class="box-container">

    <div class="box" data-aos="fade-up">
        <img src="img1.jpg" alt="">
        <h3>Paneer Rice</h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="img2.jpg" alt="">
        <h3>Puri Shak</h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="img3.jpg" alt="">
        <h3>Dhosha</h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="img4.jpg" alt="">
        <h3>Flower Sabji</h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="img5.jpg" alt="">
        <h3>Cheese Bingo</h3>
    </div>

    <div class="box" data-aos="fade-up">
        <img src="img6.jpg" alt="">
        <h3>Pani Puri</h3>
    </div>

</div>

</section>

<!-- gallery section ends -->

<!-- order section starts  -->

<section class="order" id="order">

<h1 class="heading"> make an <span>order</span> </h1>

<div class="row">

    <form data-aos="fade-right" method="post" >
        <input type="text" placeholder="your name" id="name" name="name" class="box">
        <input type="email" placeholder="your email" id="email" name="email" class="box">
        <input type="text" placeholder="your number" id="number" name="number" class="box">
        <textarea id="address" name="address" cols="30" rows="10" class="box address" placeholder="your address"></textarea>
        <input type="submit" name="submit" id="submit" value="order now" class="btn">
    </form>
<?php
    include("dbconnect.php");

    if(isset($_POST['submit']) && $_POST['address'] != "" && $_POST['number'] != "")
    {
      $name = mysqli_real_escape_string($con, $_POST['name']);
      $email = mysqli_real_escape_string($con, $_POST['email']) ;
      $number = mysqli_real_escape_string($con, $_POST['number']) ;
      $address = mysqli_real_escape_string($con, $_POST['address']) ;

        $insertquery = "INSERT INTO my_order(name, email, number, address) values ('$name','$email','$number','$address')";

        $iquery = mysqli_query($con,$insertquery);
        if($iquery){
            ?>
            <script>
                alert("Order SUCCESSFUL");
            </script>
            <?php
        } else {
            ?>
            <script>
                alert("FAILED TO Order");
            </script>
            <?php
        } 
   }
    $con->close();
?>

    <div class="image" data-aos="fade-left">
        <img src="form-img.jpg" alt="">
    </div>

</div>

</section>

<!-- order section ends -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>contact info</h3>
            <p> <i class="fas fa-map-marker-alt"></i> Ahemdabad, india 320008 </p>
            <p> <i class="fas fa-envelope"></i> onlinecafeteria@gmail.com </p>
            <p> <i class="fas fa-phone"></i> +123-456-7890 </p>
            <p> <i class="fas fa-phone"></i> +111-222-333 </p>
        </div>

        <div class="box">
            <h3>branch location</h3>
            <a href="#">Ahemdabad</a>
            <a href="#">Rajkot</a>
            <a href="#">Gandhinagar</a>
            <a href="#">Bharuch</a>
        </div>

        <div class="box">
            <h3>quick links </h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">menu</a>
            <a href="#">popular</a>
            <a href="#">gallery</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">instagram</a>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
        </div>

    </div>

    <h1 class="credit">create by <a href="#">Tejas Gogara</a> all rights reserved. </h1>

</div>

<!-- footer section ends -->













<!-- aos js cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- initializing aos  -->
<script type="text/javascript" src="jquery.js"></script>
<script>

    AOS.init({
        delay:400,
        duration:1000
    })
	
	$(()=>{
		
		document.getElementById("name").value = "<?php echo $_SESSION['name']?>";
		document.getElementById("email").value = "<?php echo $_SESSION['email']?>";
	});
	
</script>

</body>
</html>