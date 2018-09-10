<!DOCTYPE html>
<html lang="en">
    
    <head>
        
        <!-- TITLE & AUTHOR -->
        <title>QBE Fashion: Live Life Bold</title>
        
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../img/favicon.ico" />
        <link rel="apple-touch-icon" href="../img/favicon.png" />
        
        <!-- STYLESHEETS -->
        <link href="../css/dreams.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <!-- IMPORTANT JAVASCRIPT -->
        <script src="../js/menu.js" type="text/javascript"></script>
        
    </head>
    
    <body>
        
        <!-- HEADER & NAVIGATION BAR -->
        
        <!-- Mobile Menu -->
        <div class="fsm-container" id="fsm-menu">
            <div class="fsm-padding">
                <!-- Menu Button (Close) -->
                <div class="hb-menu-cl" id="" onclick="javascript:closeMenu()">
                    <i class="fas fa-times"></i>
                </div>

                <!-- Logo -->
                <a href="#"><img src="../img/logo.png" alt="Dreams Framework" class="logo"></a>

                <!-- Shopping Cart -->
                <div class="cart-icon-cl" id="" onclick="javascript:openCart()">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <!-- Menu Items -->
                <ul class="fsm-nav">
                    <li class="shrink"><a class="pointer" onclick="javascript:openUser()"><i class="fas fa-user-circle"></i></a></li>
                    <li class="shrink"><a class="pointer" onclick="javascript:closeMenu()">Home</a></li>
                    <li class="shrink"><a href="#">Apparel</a></li>
                    <li class="shrink"><a href="#">Footwear</a></li>
                    <li class="shrink"><a href="#">Accessories</a></li>
                    <li class="shrink"><a href="#">Bags</a></li>
                    <li class="shrink"><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Cart Menu -->
        <div class="fsm-container" id="fsm-cart">
            <div class="fsm-padding">
                <!-- Menu Button -->
                <div class="hb-menu-cl" id="" onclick="javascript:openMenu()">
                    <i class="fas fa-bars"></i>
                </div>

                <!-- Logo -->
                <a href="#"><img src="../img/logo-alt.png" alt="Dreams Framework" class="logo"></a>

                <!-- Shopping Cart (Close) -->
                <div class="cart-icon-cl" id="cart-special" onclick="javascript:closeCart()">
                    <i class="fas fa-times"></i>
                </div>

                <!-- Menu Items -->
                <h3 class="header-text space-md">Your Cart is Currently Empty</h3>
                <a class="btn-sm btn-dark pointer" onclick="javascript:closeCart()">Back</a>
            </div>
        </div>
        
        <!-- Mobile User Menu -->
        <div class="fsm-container" id="fsm-user">
            <div class="fsm-padding">
                <!-- Menu Button (close) -->
                <div class="hb-menu-cl" id="" onclick="javascript:closeUser()">
                    <i class="fas fa-arrow-left"></i>
                </div>

                <!-- Logo -->
                <a href="#"><img src="../img/logo-alt.png" alt="Dreams Framework" class="logo"></a>

                <!-- Shopping Cart -->
                <div class="cart-icon-cl" id="cart-special" onclick="javascript:closeUser()">
                    <i class="fas fa-shopping-cart"></i>
                </div>

                <!-- Menu Items -->
                <div class="fsm-padding">
                    <i class="fas fa-user-circle upfile"></i>
                    <h3 class="uppercase wt-rg">Guest Of Honor</h3>
                    <ul class="unstyled-list">
                        <li><a href="blank/index.html" class="btn-sm btn-dark">Sign In</a></li>
                        <li><a href="blank/index.html" class="btn-sm btn-dark">Create Account</a></li>
                        <li><a class="btn-sm btn-dark pointer" onclick="javascript:closeUser()">Back</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        <!-- Desktop Cart -->
        <div class="hsm-container" id="hsm-cart">
            <div class="hsm-panel-cl" onclick="javascript:closePanel()"></div>
            <div class="hsm-panel">
                <h3 class="header-text">Your Cart is Currently Empty</h3>
                <a class="btn-sm btn-dark pointer" onclick="javascript:toggleDeskCart()">Back</a>
            </div>
        </div>
        
        <!-- Desktop User Profile -->
        <div class="hsm-container" id="hsm-profile">
            <div class="hsm-panel-cl" onclick="javascript:closePanel()"></div>
            <div class="hsm-panel">
                <i class="fas fa-user-circle"></i>
                <h3 class="uppercase wt-rg">Guest Of Honor</h3>
                <ul class="unstyled-list">
                    <li><a href="blank/index.html" class="btn-sm btn-dark">Sign In</a></li>
                    <li><a href="blank/index.html" class="btn-sm btn-dark">Create Account</a></li>
                    <li><a class="btn-sm btn-dark pointer" onclick="javascript:toggleUserProfile()">Back</a></li>
                </ul>
            </div>
        </div>
        
        <!-- Desktop Menu -->
        <header class="fixed">  
            <!-- Menu Button (Hidden) -->
            <div class="hb-menu" id="hb" onclick="javascript:openMenu()">
                <i class="fas fa-bars"></i>
            </div>
            
            <!-- Logo -->
            <a href="../index.html" ><img src="../img/logo.png" alt="Dreams Framework" class="logo shrink"></a>
            
            <!-- Shopping Cart (Hidden) -->
            <div class="cart-icon" id="cart" onclick="javascript:openCart()">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <nav>
                <ul>
                    <li class="padfix"><a href="../index.html">Home</a></li>
                    <li class="padfix"><a href="#">Apparel</a></li>
                    <li class="padfix"><a href="#">Footwear</a></li>
                    <li class="padfix"><a href="#">Accessories</a></li>
                    <li class="padfix"><a href="#">Bags</a></li>
                    <li class="padfix"><a href="#">Contact</a></li>
                    <li><a id="odp" class="pointer" onclick="javascript:toggleUserProfile()"><i class="fas fa-user-circle"></i></a></li>
                    <li><a id="odc" class="pointer" onclick="javascript:toggleDeskCart()"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </nav>  
        </header>
        
        
        <!-- HERO SECTION -->
        <section class="hero-section-blank">
            <div class="container">
                <h1 class="title-text white">Functionality Coming Soon</h1>
                <h2 class="sub-title-text white space-md">this feature is not yet available</h2>
                <a href="../index.html" class="btn-lg btn-color-primary">Back Home</a>
            </div>
        </section>
        
        
        
        
        <!-- PHP MAIL SCRIPT -->
        <?php
            $name = $_POST['name'];
            $to = $_POST['email'];
            $message = $_POST['message'];
            $human = $_POST['human'];
            $from = 'From: contact@clienttest.n3xtweb.com';  
            $subject = 'Potential Client';
            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
        ?>
        
        <!-- CONTACT FORM SECTION -->
        <section class="contact-form-container">
            <div class="col-3">
                <div class="contact-form">
                    <h1 class="header-text main-color">Send us a message</h1>
                    <form method="post" action="index.php">
                        <input class="form-field" name="name" placeholder="Name">
                        <input class="form-field" name="email" type="email" placeholder="Email Address">
                        <textarea class="form-field" name="message" placeholder="Message"></textarea>
                        <input id="submit" class="main-color" name="submit" type="submit" value="Submit">
                    </form>
                    <?php
                        if ($_POST['submit'])  {
                            if ($human == '') {
                                echo '<p class="wt-hvy red">Please answer the anti spam question correctly.</p>';
                            }
                            if ($to == '') {
                                echo '<p class="wt-hvy red">Please enter a valid email address.</p>';
                            }
                            if ($message == '') {
                                echo '<p class="wt-hvy red">Please type a message.</p>';
                            }
                            if ($name == '') {
                                echo '<p class="wt-hvy red">Please enter your name.</p>';
                            }
                            if ($human == '6' && $to != '' && $message != '' && $name != '') {
                                if (mail ($to, $subject, $body, $from)) { 
                                    echo '<p class="wt-hvy green">Your message has been sent!</p>';
                                } 
                                else { 
                                    echo '<p class="wt-hvy red">Something went wrong, go back and try again!</p>'; 
                                }  
                            }
                            else {
                                echo '<p class="wt-hvy red">Please try again.</p>';
                            }
                        }
                    ?>
                </div>
            </div>
        </section>
        
        <! --FOOTER SECTION -->
        <footer class="clearfix">
            <div class="container">
                <div class="col-3">
                    <p>
                        Thank you for visiting the QBE store. We hope that you had a satisfactory experience using our website. If you are having any issues, or have any questions about our store, please <a href="contact/index.php"><strong>contact our support team</strong></a> so that they may resolve your issues and answer your questions.
                        <br>
                        <br>
                        &copy; Copyright QBE 2018 
                    </p>
                </div>

                <!-- List 01 -->
                <div class="col-1">
                    <ul class="unstyled-list">
                        <li><a href="#"><strong>Top of Page</strong></a></li>
                        <li><a href="apparel/index.html">Apparel</a></li>
                        <li><a href="footwear/index.html">Footwear</a></li>
                        <li><a href="accessories/index.html">Accessories</a></li>
                        <li><a href="bags/index.html">Bags</a></li>
                    </ul>
                </div>

                <!-- List 02 -->
                <div class="col-1">
                    <ul class="unstyled-list">
                        <li><a href="contact/index.php"><strong>Support</strong></a></li>
                        <li><a href="blank/index.html">Students</a></li>
                        <li><a href="blank/index.html">Military</a></li>
                        <li><a href="blank/index.html">Shipping</a></li>
                        <li><a href="blank/index.html">Returns</a></li>
                    </ul>
                </div>

                <!-- List 03 -->
                <div class="col-1">
                    <ul class="unstyled-list">
                        <li><strong><a href="blank/index.html">About</a></strong></li>
                        <li><a href="blank/index.html">Vendors</a></li>
                        <li><a href="blank/index.html">Brands</a></li>
                        <li><a href="blank/index.html">Fulfillment</a></li>
                        <li><a href="blank/index.html">License</a></li>
                    </ul>
                </div>
            </div>
            
        </footer>
        
    </body>
    
</html>