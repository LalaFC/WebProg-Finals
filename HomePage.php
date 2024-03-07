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
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="roundslidermin.css" />
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
                <li><a href="#" id="contactus">                
                    <div id="lettuce"><h4>Contact Us</h4></div>
                </a></li>
                <li><a href="#" id="aboutme">                
                    <div id="cheese"><h4>About</h4></div>
                </a></li>
                <li><a href="#" id="product-menu">
                    <div id="beef"><h4>Menu</h4></div>
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
            <li><a href="#" id="cart"><div class="icon-holder" ><img src="Images/cart.ico" loading="lazy" alt="" class="image"></div></a></li>
            <li><a href="#loginPage" id="Login">
                <div id="tomato"><h4>Login</h4></div>
                </a>
                <div id="loginPage" class="modal">
                    <div class="content">
                        <h3>Login Form</h3>
                        <form action="/action_page.php">
                  
                          <table>
                              <tr>
                                  <td>
                                      <b><label for="username">Username:</label></b>
                                  </td>
                                  <td>
                                      <input type="text" id="username2" name="username" pattern="(_).{6,}" title = "Must have atleast 6 or more characters and without special charaters except underscore" required>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <b><label for="psw">Password:</label></b>
                                  </td>
                                  <td>
                                      <input type="password" id="psw2" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                              </tr>
                              <tr>
                                  <td>
                                  </td>
                                  <td>
                                      <input type="button" id = "validateButton" value = "Login">
                                  </td>
                              </tr>
                          </table>
                          <a href="#" class="box-close">
                            ×
                        </a>
                        </form>
                    </div>
                </div>
            </li>
            <h4>/</h4>
            <li><a href="#registerPage" id="register">
                    <div id="tomato"><h4>Register</h4></div>
                </a>
                <div id="registerPage" class="modal">
                    <div class="content">
                        <h3>Register Form</h3>
                        <form action="/action_page.php">
                  
                          <table>
                              <tr>
                                  <td>
                                      <b><label for="username">Username:</label></b>
                                  </td>
                                  <td>
                                      <input type="text" id="username" name="username" pattern="(_).{6,}" title = "Must have atleast 6 or more characters and without special charaters except underscore" required>
                                  </td>
                              </tr>
                              <tr>
                                  <td>
                                      <b><label for="psw">Password:</label></b>
                                  </td>
                                  <td>
                                      <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                              </tr>
                              <tr>
                                  <td>
                                  </td>
                                  <td>
                                    <input type="button" id = "addButton"      value = "Sign Up">
                                    <input type="button" id = "clearButton"    value = "CLEAR">                                  </td>
                              </tr>
                          </table>
                          <a href="#" class="box-close">
                            ×
                        </a>
                        </form>
                        <div id="message">
                            <h3>Password must contain the following:</h3>
                            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                            <p id="number" class="invalid">A <b>number</b></p>
                            <p id="special" class="invalid">A <b>special character</b></p>
                            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                          </div>
                      
                        <div id="uMessage">
                            <h3>Username must contain the following:</h3>
                            <p id="uLength" class="invalid">Minimum <b>6 characters</b></p>
                            <p id="noSpecial" class="invalid"><b>No special character</b> except <b>underscore</b>.</p>
                        </div>
                    </div>
                </div>
        </li>


    </div>
    <div class="col-10"
             id="main-content">

            <section class="showcase-area" id="showcase">
                <div class="showcase-container">
                    <h1 class="main-title" id="home">Feel at Home with Papsie Burger</h1>
                    <p style="padding-bottom: 20%;">Experience the taste of Home without piercing your pockets!</p>
                    
                    <div class="food-menu-container container" style="background-color: rgba(250, 235, 215, 0.582); padding: 10px; border-radius: 5%;">
                        <h1 class="main-title" id="home" style="width: 100%; text-align: center; padding-bottom: 20px;">PapSulit Meals:</h1>
                        <div class="food-menu-item" style="background-color:rgba(255, 255, 255, 0);">
                            <div class="food-img">
                                <img src="Images/burger.jpg"
                                    alt="burger" />
                            </div>
                            <div class="food-description">
                                <h2 class="food-titile">Original Burger</h2>
                                <p class="food-price">Price: 15 PHP</p>
                            </div>
                            <div class="food-img">
                                <img src="Images/hotdog.jpg"
                                    alt="half-long" />
                            </div>
                            <div class="food-description">
                                <h2 class="food-titile">Half-long</h2>
                                <p class="food-price">Price: 15 PHP</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" id="menu-btn" class="btn btn-primary">Order Now</a>
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
                                        '<img src="' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
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
                                        '<img src="' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
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
                            '<img src="' . $row["Image"] . '" alt="' . $row["Image"] . '" />' .
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
                        <h2>Contact Us</h2>
                        <p>
                            Email:
                            Twitter:
                            Facebook:
                            Instagram:
                        </p>
                        <h2>Physical Location</h2>
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