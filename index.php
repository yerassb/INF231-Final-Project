<?php 
    require_once 'php/connect.php';

    session_start();
?>
<html>
<head>
    <title>lab5</title>
    <link rel="stylesheet" href="mainpage.css" />
    <link rel="stylesheet" href="css/header.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <section class="firstpage">
        <div class="container first">
            <div class="row">
                <!-- <div class="logo">
                    <p id="dmhome" onclick="window.location.reload()">DMHOME</p>
                </div>
                <div class="header">
                    <a href="categories.php"><div id="categories" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Categories</div></a>
                    <div id="brands" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Brands</div>
                   <a href="catalogue.html"><div id="catalogue" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Catalogue</div></a>
                    <a href="about.html"><div id="about" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">About</div></a>
                    <div id="news & events" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Library</div>
                </div>
                <div class="logo">
                    <a href="login.html" id="login">Log In</a>
                </div> -->
                <?php include('header.php'); ?>
            </div>
            <h3 class="main_header"> The finest in every sense</h3>
        </div>
    </section>

    <section class="person_content">
        <div class="container">
            <div class="person_content-main">
                <div class="all1">
                    <div class="person_content-header">
                        <div class="hd">
                            <h1 class="person_content_hd">Our expertise is to cater every bit of fulfillment and to create sumptuous delights to your luxury home living.</h1>
                        </div>
                    </div>
                    <div class="pcol1">
                        <img src="img/man.jpg" />
                    </div>
                </div>

                <div class="pcol2">
                    <div class="pcol1">
                        <img src="img/two.jpg" />
                    </div>
                    <h4 class="purified">Purified</h4>
                    <p>Hundreds of choices filtered down for the best of the best. For the purest of dream and function - and for an intensity of comfort and beauty.</p>
                    <br />
                    <a href="register.html"><h4 class="start">Get started!</h4></a>
                </div>
            </div>
            <div class="person_content-info">
                <div class="icon1">
                    <img src="img/one.png" />
                    <br />
                    <h5>LUXE</h5>
                    <p>Luxury living starts here. Wondroud collections of spectacular hand-made and one-off products acquired from the world's best designer brand.'</p>
                </div>
                <div class="icon2">
                    <img src="img/two.png" />
                    <br />
                    <h5>advice&selection</h5>
                    <p>From a client???s need as our priority comes bespoke selections of furnishing pieces. Expect only the top-of-the-range specifications, from interior design to full turn-key services.</p>
                </div>
                <div class="icon3">
                    <img src="img/three.png" />
                    <br />
                    <h5>Inventory</h5>
                    <p>A true treasure trove of eclectic and unique design goods. A trip worthy of a visit, for those in search for best finds.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="marketing">
        <div class="container">
            <div class="mark">
                <p class="lineUp">About DMHOME</p>
            </div>
            <div class="video">
                <video width="700" height="500" controls >
                    <source src="video/marketing.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </section>
    
     <section class="fourthpage">
        <div class="container">
            <div class="intro">
                <h2 class="projects">Recent projects</h2>
                <p>Enjoy our highlights of recent finished projects here.</p>
            </div>
            <div class="scrolling-wrapper">
                <div class="card"><img src="img/card1.jpg" /></div>
                <div class="card"><img src="img/card2.jpg" /></div>
                <div class="card"><img src="img/card3.jpg" /></div>
                <div class="card"><img src="img/card4.jpg" /></div>
                <div class="card"><img src="img/card6.jpg" /></div>
                <div class="card"><img src="img/card7.jpg" /></div>
                <div class="card"><img src="img/card8.jpg" /></div>
                <div class="card"><img src="img/card9.jpg" /></div>
                <div class="card"><img src="img/card10.jpg" /></div>
            </div>
        </div>
    </section>
    
     <!--the end section-->

    <!-- <section class="end">
        <div class="hhhd">
            <h3>subscribe to get <br/> our latest updates</h3>
        </div>
        <div class="privacy">
            <div class="navigations">
                <h5>DMHOME</h5>
                <p style="padding-bottom:9em;">Join us for better experience and start making your home with DMHOME</p>
                <br />
                <p>?? 2022 DMHOME - All rights Reserved</p>
            </div>
            <div class="nnav">
                <div class="nnav1">
                    <h5>Navigations</h5>
                    <p>Portfolio</p>
                    <p>Services</p>
                    <p>About Me</p>
                    <p>Reviews</p>
                    <p style="padding-bottom:6em;">Contacts</p>
                    <p>Privacy</p>
                </div>
                <div class="contacts">
                    <h5>Contacts</h5>
                    <p>Tilda experts</p>
                    <p>Telegram</p>
                    <p>Whatsapp</p>
                    <p style="padding-bottom:8em;">Mail</p>
                    <p>Cookies</p>

                </div>
            </div>
        </div>
    </section> -->
    <?php include('footer.php') ?>
    <script src="mainpage.js"></script>
</body>
</html>
