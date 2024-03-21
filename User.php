<?php session_start();?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Papsie Burger</title>
    <link rel="icon" href = "Images/Papsie-logo.png">
    <link rel="stylesheet"
          href="Dynamic.css" />
</head>

<body>
    
    <!--#region Navigation Bar  -->
    <nav class="navbar">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>

            <ul class="menu-items">
                <div class="logo"><img src="Images/Papsie.png"></div>
                <div id="burger">
                    <div id="top-bun"></div>

                <li><a href="#" id="home" >
                    <div id="tomato"><h4 style="color: white;">Home</h4></div>
                </a></li>

                <li><a href="#" id="product-menu">
                    <div id="lettuce"><h4>Menu</h4></div>
                </a></li>

                <li><a href="#" id="aboutme">                
                    <div id="cheese"><h4>About</h4></div>
                </a></li>

                <li><a href="#" id="contactus">                
                    <div id="beef"><h4>Customer Care</h4></div>
                </a></li>

                <!-- <li><a href="#skills">Skills</a></li> -->
                <!-- <li><a href="#testimonials">Testimonial</a></li> -->
                <div id="bottom-bun"></div>
                </div>
            </ul>
            
        </div>
    </nav>
    <!--#endregion -->
    <div class="bg-holder"></div>
    <!-- <div class="row">
     <div class="col-2"
            id="contacts">
        <h2 id="contactsLabel">Contacts</h2>
        <a href="https://discord.gg" target="_blank" class="w-inline-block">
            <div class="network-link">
                <div class="icon-holder">
                    <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9f0a0f35e733_discord.svg" loading="lazy" alt="" class="image">
                </div>
                <h4 id="contactsLabel">Discord</h4>
            </div>
        </a>
        <a href="https://twitter.com" target="_blank" class="w-inline-block">
            <div class="network-link">
                <div class="icon-holder">
                    <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9fb56635e72d_twitter.svg" loading="lazy" alt="" class="image">
                </div>
                <h4 id="contactsLabel">Twitter</h4>
            </div>
        </a>
        <a href="https://instagram.com" target="_blank" class="w-inline-block">
            <div  class="network-link">
                <div class="icon-holder">
                <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9fc5e535e72a_instagram.svg" loading="lazy" alt="" class="image">
                </div>
                <h4 id="contactsLabel">Instagram</h4>
            </div>
        </a>

        <a href="https://opensea.io" target="_blank" class="w-inline-block">
            <div class="network-link">
                <div class="icon-holder">
                    <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9f814135e732_opensea.svg" loading="lazy" alt="" class="image">
                </div>
                <h4 id="contactsLabel">Opensea</h4>
            </div>
        </a> 
    </div>
    </div> -->
    <!-- #region main-content -->    

    <div class="header">
        <ul class="Register/Login">
            <li><a href="#" id="cart"><div class="icon-holder" ><img src="Images/cart.ico" loading="lazy" alt="" class="image">
                </div></a>
            
                <div id="tomato"><h4>Logout</h4></div>

                    <div id="cartPopup" class="cart-popup">
                        <div class="cart-content">
                            <span class="close" onclick="toggleCart()">&times;</span>
                            <h2>Your Cart</h2>
                            <?php include 'cart.php'; ?>
                    </div>
                </div>
            </li>

            <li><a href="logout.php" id="Logout">
                <div id="tomato"><h4>Logout</h4></div>
                </a>

                <div id="loginPage" class="modal">
                    <div class="content">

                    <!-- <h2>Login</h2>
                        <form action="login.php" method="post">
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email" required><br><br>
                            <label for="password">Password:</label>
                            <input type="password" id="password" name="password" required><br><br>
                            <button type="submit">Login</button>
                        </form> -->

                        <div class="wrapper">
                            <div class="title">
                                Login Form
                                <a href="#" class="box-close"> × </a>
                            </div>
                            <form action="login.php" method="post">
                                <div class="field">
                                    <input type="text" name="email" type ="email" required>
                                    <label>Email Address</label>
                                </div>

                                <div class="field">
                                    <input type="password" name="password" required="password">
                                    <label>Password</label>
                                </div>

                                <div class="content1">
                                    <!-- <div class="checkbox">
                                        <input type="checkbox" id="remember-me">
                                        <label for="remember-me">Remember me</label>
                                    </div> -->
                                    
                                    <!-- <div class="pass-link">
                                        <a href="#">Forgot password?</a>
                                    </div> -->
                                </div>
                        
                                <div class="field">
                                    <input type="submit" name = "sub" value="Login">
                                </div>
                                
                                <div class="signup-link">
                                    Not a member? <a href="#registerPage"> &emsp; Signup now</a>
                                </div>
                                
                            </form>

                        </div>


                    </div>
                </div>
            </li>
            <!-- <h4>/</h4> -->


            <!-- <li><a href="#registerPage" id="register">
                    <div id="tomato"><h4>Register</h4></div>
                </a>
                <div id="registerPage" class="modal">
                    <div class="content">
                    <h2>Register Form</h2>
                    <script>
                        // Function to get URL parameter by name
                        function getUrlParameter(name) {
                            name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
                            var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
                            var results = regex.exec(location.search);
                            return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
                        }

                        // Check for error parameter in URL and display alert
                        var error = getUrlParameter('error');
                        if (error) {
                            if (error === 'invalid_email_format') {
                                alert('Invalid email format. Please try again.');
                            } else if (error === 'email_exists') {
                                alert('Email already exists. Please try again.');
                            } else if (error === 'registration_failed') {
                                alert('Registration failed. Please try again later.');
                            }
                        }
                    </script>
                    <form action="register.php" method="post">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"><br><br>
                        <label for="password">Password:</label>
                        <input type="password" id="password" name="password" required minlength="6"><br>
                        <small>Password must be at least 6 characters long.</small><br><br>
                        <button type="submit">Register</button>
                    </form>

                </div>
            </li> -->


    </div>
    <div class="col-10"
             id="main-content">
             <div class="box">
                <!-- <form name="search" onsubmit="navigateToHash(); return false;">
                    <input type="text" class="input"  id="searchInput" onmouseout="this.value = ''; this.blur();" onkeyup="checkEnter(event)">
                </form>
                <i class="fas fa-search"></i> -->

                <input type="text" id="searchInput" placeholder="Search...">
                <button onclick="showHideSections()">Search</button>
            </div>
            <section class="showcase-area" id="showcase">
                <div class="showcase-container">
                    <?php 
                    Echo "<h1 class='main-title' id='home'>Hello ".$_SESSION['name']."!</h1>"
                    ?>
                
                    <h1 class="main-title" id="home">Welcome to Papsie Burger</h1>
                    <p style="padding-bottom: 20%;">Experience the taste of Home without piercing your pockets!</p>
                    
                    <div class="food-menu-container container" style="background-color: rgba(250, 235, 215, 0.582); padding: 10px; border-radius: 5%;">
                        <h1 class="main-title" id="home" style="width: 100%; text-align: center; padding-bottom: 20px;">Profile:</h1>
                        <div class="food-menu-item" style="background-color:rgba(255, 255, 255, 0);">
                            <div class="food-img">
                                <img src="img/cat1.jpg"
                                    alt="User Profile" />
                            </div>
                            
                        <?php 
                        Echo
                            "<div class='food-description'>
                                <h2 class='food-titile'>".$_SESSION['name']." ".$_SESSION['lname']."</h2>
                                <p class='food-price'>".$_SESSION['email']."</p><br><br>
                                <p class='food-price'>".$_SESSION['contacts']."</p>
                                <p class='food-price'>".$_SESSION['address']."</p>
                            </div>"
                        ?>

                        </div>
                    </div>
                    <a href="#" id="menu-btn" class="btn btn-primary">Go To Menu</a>
                </div>
            </section>
            
            <section id="about">
                <div class="about-wrapper container">
                    <div class="about-text">
                        <p class="small">About Us</p>
                        <h2>“Masarap na hindi nakakabutas bulsa”</h2>
                        <p>
                            A popular snack shop located in Taytay, Rizal known for its delicious snacks with affordable prices.
                            It’s my uncle’s shop and I want to make a sample site if ever they would want to expand their business in e-commerce.

                        </p>
                    </div>
                    <div class="about-img">
                        <img src="Images/area-pic.jpg" alt="Taytay,Rizal" />
                    </div>
                </div>
            </section>

            <section id="menu">
                <h1>Menu</h1>
                <h2>Categories</h2>
                <div class="food-menu-container container">
                    <div class="food-type fruite">
                        <div class="img-container">
                            <img src="Images/burger.jpg" alt="Burgers" />
                            <div class="img-content">
                                <h3>Burgers</h3>
                                <a href="#"
                                   class="btn btn-primary"
                                   id = "burgers-list">Let's Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-type vegetable">
                        <div class="img-container">
                            <img src="Images/hotdog.jpg" alt="Hotdogs" />
                            <div class="img-content">
                                <h3>Hotdogs</h3>
                                <a href="#"
                                   class="btn btn-primary"
                                   id ="hotdogs-list">Let's Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="food-type grin">
                        <div class="img-container">
                            <img src="Images/French-fries.jpg" alt="Fries" />
                            <div class="img-content">
                                <h3>Snacks</h3>
                                <a href="#"
                                   class="btn btn-primary"
                                   id = "snacks-list">Let's Go</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        <!-- #region Food Menu -->
            <section id="food-menu-burgers">
                <h2 class="food-menu-heading">Burgers</h2>
                <div class="food-menu-container container">
                    <?php
            // database connection code
                        $con = mysqli_connect('localhost', 'root', '', 'papsie_burger');

                        // database insert SQL code
                        $sql = "SELECT * FROM Product_List WHERE Product_Type = 'Burger'";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo
                                '<div class="food-menu-item">' .
                                    '<div class="food-img">' .
                                        '<img src="Images/' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                                    '</div>' .
                                    '<div class="food-description">' .
                                        '<h2 class="food-title">' . $row["Product_Name"] . '</h2>' .
                                        '<p>' .
                                            $row["Description"] .
                                        '</p>' .
                                        '<p class="food-price">Price: PHP ' . $row["Price"] . '</p>' .
                                    '</div>' .
                                '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                    ?>
                </div>
            </section>

            <section id="food-menu-hotdogs">
                <h2 class="food-menu-heading">Hotdogs</h2>
                <div class="food-menu-container container">
                    <?php
                        // database connection code
                        $con = mysqli_connect('localhost', 'root', '', 'papsie_burger');

                        // database insert SQL code
                        $sql = "SELECT * FROM Product_List WHERE Product_Type = 'Hotdog'";
                        $result = $con->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                echo
                                '<div class="food-menu-item">' .
                                    '<div class="food-img">' .
                                        '<img src="Images/' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                                    '</div>' .
                                    '<div class="food-description">' .
                                        '<h2 class="food-title">' . $row["Product_Name"] . '</h2>' .
                                        '<p>' .
                                            $row["Description"] .
                                        '</p>' .
                                        '<p class="food-price">Price: PHP ' . $row["Price"] . '</p>' .
                                    '</div>' .
                                '</div>';
                            }
                        } else {
                            echo "0 results";
                        }
                        $con->close();
                    ?>
                </div>
            </section>

            <section id="food-menu-snacks">
                <h2 class="food-menu-heading">Snacks</h2>
                <div class="food-menu-container container">
                <?php
            // database connection code
            $con = mysqli_connect('localhost', 'root', '', 'papsie_burger');

            // database insert SQL code
            $sql = "SELECT * FROM Product_List WHERE Product_Type = 'Snack'";
            $result = $con->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo
                    '<div class="food-menu-item">' .
                        '<div class="food-img">' .
                            '<img src="Images/' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
                        '</div>' .
                        '<div class="food-description">' .
                            '<h2 class="food-title">' . $row["Product_Name"] . '</h2>' .
                            '<p>' .
                                $row["Description"] .
                            '</p>' .
                            '<p class="food-price">Price: PHP ' . $row["Price"] . '</p>' .
                        '</div>' .
                    '</div>';
                }
            } else {
                echo "0 results";
            }
            $con->close();
?>
                </div>
            </section>

            <section id="contactusPage">
                <div class="contactus container" style="background: rgba(216, 216, 216, 0.801);">
                    <div class="contacts-text">

                        <h2 class="testimonial-title">What Our Customers Say</h2>
                        <div class="testimonial-container container">
                            <div class="testimonial-box">
                                <div class="customer-detail">
                                    <div class="customer-photo">
                                        <img src="img/cat1.jpg" alt="RoseLee" />
                                        <p class="customer-name">Ross Lee</p>
                                    </div>
                                </div>
                                <div class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p class="testimonial-text">
                                    Stupendously delicious! I'll never eat anywhere else except here!
                                </p>

                            </div>

                            <div class="testimonial-box">
                                <div class="customer-detail">
                                    <div class="customer-photo">
                                        <img src="img/cat2.jfif" alt="Amelia Watson" />
                                        <p class="customer-name">Amelia Watson</p>
                                    </div>
                                </div>
                                <div class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p class="testimonial-text">
                                I never knew what real food was. Not until I tasted this one. Everything is up to my taste, from the burgers til the snacks.
                                </p>
                            </div>

                            <div class="testimonial-box">
                                <div class="customer-detail">
                                    <div class="customer-photo">
                                        <img src="img/cat3.jpg" alt="Ben Roy" />
                                        <p class="customer-name">Ben Roy</p>
                                    </div>
                                </div>
                                <div class="star-rating">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                </div>
                                <p class="testimonial-text">
                                Let me tell you about this burger joint – it's the real deal. You walk in and you're hit with the smell of sizzling beef patties, golden fries, and a whole lot of goodness. I'm talking about burgers so juicy, you'll need a napkin for your napkin. And those fries? Crispy on the outside, fluffy on the inside – just the way fries should be. Plus, they've got snacks that'll make your taste buds do a happy dance. Trust me, when it comes to burgers, fries, and snacks, this place is the big guy on the block.
                                </p>

                            </div>
                        </div>

                        <h2 class="testimonial-title" style = "text-align: left">Contact Us</h2>
                        <p>
                            Email: papsie.burger@gmail.com
                        </p>
                        <a href="https://discord.gg" target="_blank" class="w-inline-block">
                            <div class="network-link">
                                <div class="icon-holder">
                                    <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9f0a0f35e733_discord.svg" loading="lazy" alt="" class="image">
                                </div>
                                <h4 id="contactsLabel">Discord</h4>
                            </div>
                        </a>
                        <a href="https://twitter.com" target="_blank" class="w-inline-block">
                            <div class="network-link">
                                <div class="icon-holder">
                                    <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9fb56635e72d_twitter.svg" loading="lazy" alt="" class="image">
                                </div>
                                <h4 id="contactsLabel">Twitter</h4>
                            </div>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="w-inline-block">
                            <div  class="network-link">
                                <div class="icon-holder">
                                <img src="https://assets-global.website-files.com/620d893828af9f33c635e70d/620d893828af9fc5e535e72a_instagram.svg" loading="lazy" alt="" class="image">
                                </div>
                                <h4 id="contactsLabel">Instagram</h4>
                            </div>
                        </a>
                        <a href="https://facebook.com" target="_blank" class="w-inline-block">
                            <div  class="network-link">
                                <div class="icon-holder" >
                                <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTAiIGhlaWdodD0iNTAiIHZpZXdCb3g9IjAsMCwyNTYsMjU2IgpzdHlsZT0iZmlsbDojMDAwMDAwOyI+CjxnIHRyYW5zZm9ybT0idHJhbnNsYXRlKDUxLjIsNTEuMikgc2NhbGUoMC42LDAuNikiPjxnIGZpbGw9IiNmZmZmZmYiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxnIHRyYW5zZm9ybT0ic2NhbGUoNS4xMiw1LjEyKSI+PHBhdGggZD0iTTI1LDNjLTEyLjE1LDAgLTIyLDkuODUgLTIyLDIyYzAsMTEuMDMgOC4xMjUsMjAuMTM3IDE4LjcxMiwyMS43Mjh2LTE1Ljg5N2gtNS40NDN2LTUuNzgzaDUuNDQzdi0zLjg0OGMwLC02LjM3MSAzLjEwNCwtOS4xNjggOC4zOTksLTkuMTY4YzIuNTM2LDAgMy44NzcsMC4xODggNC41MTIsMC4yNzR2NS4wNDhoLTMuNjEyYy0yLjI0OCwwIC0zLjAzMywyLjEzMSAtMy4wMzMsNC41MzN2My4xNjFoNi41ODhsLTAuODk0LDUuNzgzaC01LjY5NHYxNS45NDRjMTAuNzM4LC0xLjQ1NyAxOS4wMjIsLTEwLjYzOCAxOS4wMjIsLTIxLjc3NWMwLC0xMi4xNSAtOS44NSwtMjIgLTIyLC0yMnoiPjwvcGF0aD48L2c+PC9nPjwvZz4KPC9zdmc+" loading="lazy" alt="" class="image">
                                </div>
                                <h4 id="contactsLabel">Facebook</h4>
                            </div>
                        </a>

                        

                        <h2 class="testimonial-title" style = "text-align: left">Physical Location</h2>
                        <p>Taytay, Rizal</p>
                    </div>
                    <div class="about-img">
                        <img src="Images/area-pic.jpg" alt="Taytay,Rizal" />
                    </div>
                </div>
            </section>
        <!-- #endregion Food Menu -->

        <!-- #region Testimonials -->
            <!-- <section id="testimonials">
                <h2 class="testimonial-title">What Our Customers Say</h2>
                <div class="testimonial-container container">
                    <div class="testimonial-box">
                        <div class="customer-detail">
                            <div class="customer-photo">
                                <img src="https://i.postimg.cc/5Nrw360Y/male-photo1.jpg" alt="" />
                                <p class="customer-name">Ross Lee</p>
                            </div>
                        </div>
                        <div class="star-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <p class="testimonial-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                            voluptas cupiditate aspernatur odit doloribus non.
                        </p>

                    </div>
                    <div class="testimonial-box">
                        <div class="customer-detail">
                            <div class="customer-photo">
                                <img src="https://i.postimg.cc/sxd2xCD2/female-photo1.jpg"
                                     alt="" />
                                <p class="customer-name">Amelia Watson</p>
                            </div>
                        </div>
                        <div class="star-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <p class="testimonial-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                            voluptas cupiditate aspernatur odit doloribus non.
                        </p>

                    </div>
                    <div class="testimonial-box">
                        <div class="customer-detail">
                            <div class="customer-photo">
                                <img src="https://i.postimg.cc/fy90qvkV/male-photo3.jpg" alt="" />
                                <p class="customer-name">Ben Roy</p>
                            </div>
                        </div>
                        <div class="star-rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                        </div>
                        <p class="testimonial-text">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Impedit
                            voluptas cupiditate aspernatur odit doloribus non.
                        </p>

                    </div>
                </div>
            </section> -->
        <!-- #endregion Testimonials -->
    </div>
    <!--#endregion -->     

    <!--#region footer-->
    <footer id="footer">
        <h2>PapsieBurger &copy; all rights reserved</h2>
    </footer>
    <!--#endregion -->

</body>
<!--#region JS Code-->
<!-- .................../ JS Code for smooth scrolling /...................... -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.2.min.js"></script>
<script src="wp-finals.js"></script>
<!--#endregion -->

</html>