<?php 
    require_once 'php/connect.php';

    session_start();
?>

<html>
<head>
    <title>News & Events </title>
    <link rel="stylesheet" href="catlogue.css" />
    <link rel="stylesheet" href="css/mainfont.css">
</head>
<body>
    <section class="firstpage">
        <div class="container first">
            <!-- <div class="row">
                <div class="logo">
                    <a href="final.html"><p id="dmhome" onclick="window.location.reload()">DMHOME</p></a>
                </div>
                <div class="header">
                    <div id="categories" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Categories</div>
                    <div id="brands" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Brands</div>
                    <a href="catalogue.html"><div id="catalogue" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Catalogue</div></a>
                    <a href="about.html"><div id="about" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">About</div></a>
                    <div id="news & events" onclick="change(this)" onmouseover="big(this)" onmouseout="normal(this)">Library</div>
                </div>
                <div class="logo">
                    <a href="register.html" id="login">Log In</a>
                </div>
            </div> -->
            <?php include('header.php'); ?>
        </div>
    </section>

    <section class="articles">
        <div class="container">
            <div class="wrapper">
                <div class="columnone">
                    <div class="card">
                        <img src="img/sale1.jpg" />
                        <a href="https://www.dm-home.com/news-events/dmhome-inventory-sale-27-30-october-2022"  target="_blank">
                            <div class="description">
                                <h4>  DMHOME INVENTORY SALE 27 TO 30 OCTOBER 2022</h4>
                                <p>For 4 days only, shop a wide range of imported unique design furniture, lighting fixtures, home accessories, and…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale2.jpg" />
                        <a href="https://www.dm-home.com/news-events/dm-home-luxury-bathroom"  target="_blank">
                            <div class="description">
                                <h4>MINIMALIST BATHROOM <br />DESIGN BY AGAPE</h4>
                                <p>Agape offers complete and timeless solutions for the most intimate<br /> bathroom environment by the best minimalist bathroom…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale3.jpg" />
                        <a href="https://www.dm-home.com/news-events/SieMatic-SLX-Pure"  target="_blank">
                            <div class="description">
                                <h4> RALPH LAUREN HOME| <br />fASHION FURNITURE 12-31 AUGUST 2022</h4>
                                <p>Elevate your home with the highest level of fashion furniture and home accessories from the world's leading designer…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale4.jpg" />
                        <a href="https://www.dm-home.com/news-events/how-to-select-luxurious-scented-candle"  target="_blank">
                            <div class="description">
                                <h4> How to Match Your Room with Luxurious Scented Candles</h4>
                                <p>Learn how to match your room with Ralph Lauren Home candles, which are distinctive and ideal to any home environment.</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale5.png" />
                        <a href="https://www.dm-home.com/news-events/bottega-veneta-home-2022"  target="_blank">
                            <div class="description">
                                <h4>Bottega Veneta Home| <br />fASHION FURNITURE 12-31 AUGUST 2022</h4>
                                <p>Elevate your home with the highest level of fashion furniture and home accessories from the world's leading designer…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale6.jpg" />
                        <a href="https://www.dm-home.com/news-events/dmhome-inventory-sale-80-18-30-november-2021"  target="_blank">
                            <div class="description">
                                <h4> DMHOME INVENTORY Sale up to 80% from 18 - 30 November 2021</h4>
                                <p>
                                    ON-TOP PROMOTION AND SPECIAL PRIVILEGES FROM SELECTED CREDIT CARD PARTNERS
                                    For purchase between 300,000 - 599,999 Baht,…
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale7.jpg" />
                        <a href="https://www.dm-home.com/news-events/Ralph-Lauren-Home-Penthouse"  target="_blank">
                            <div class="description">
                                <h4> Timeless Style &amp; Design: Ralph Lauren Home Modern Penthouse</h4>
                                <p>Inspired by classic and modern luxury, Ralph Lauren Home has crafted a timeless masterpiece from Ralph Lauren’s Fifth…</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columntwo">
                    <div class="card">
                        <img src="img/sale8.jpg" />
                        <a href="https://www.dm-home.com/news-events/dmhome-display-sale-fashion-furniture-12-31-august-2022"  target="_blank">
                            <div class="description">
                                <h4> DMHOME DISPLAY SALE | FASHION FURNITURE 12 &ndash; 31 AUGUST 2022</h4>
                                <p>Elevate your home with the highest level of fashion furniture and home accessories from the world's leading designer……</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale9.jpg" />
                        <a href="https://www.dm-home.com/news-events/agape-minimalist-bathroom"  target="_blank">
                            <div class="description">
                                <h4>Minimalist Bathroom Design By Agape</h4>
                                <p>Agape offers complete and timeless solutions for the most intimate bathroom environment by the best minimalist bathroom…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale10.jpg" />
                        <a href="https://www.dm-home.com/news-events/ralph-lauren-home-modern-penthouse-collection"  target="_blank">
                            <div class="description">
                                <h4> DMHOME DISPLAY SALE| <br />fASHION FURNITURE 12-31 AUGUST 2022</h4>
                                <p>Elevate your home with the highest level of fashion furniture and home accessories from the world's leading designer…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale11.png" />
                        <a href="https://www.dm-home.com/news-events/siematic-kitchen-interior-design-timeless-elegance"  target="_blank">
                            <div class="description">
                                <h4> SieMatic Kitchen Interior Design of Timeless Elegance</h4>
                                <p>SieMatic creates high-quality kitchens for individual living spaces. Its design and quality are not subject to…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale12.png" />
                        <a href="https://www.dm-home.com/news-events/roberto-cavalli-home-interior-2022"  target="_blank">
                            <div class="description">
                                <h4> DMHOME DISPLAY SALE| <br />fASHION FURNITURE 12-31 AUGUST 2022</h4>
                                <p>Elevate your home with the highest level of fashion furniture and home accessories from the world's leading designer…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale13.jpg" />
                        <a href="https://www.dm-home.com/news-events/SLX-PURE-Luxury-Kitchen"  target="_blank">
                            <div class="description">
                                <h4> SieMatic SLX PURE - Beyond the Beauty of Luxury Kitchen</h4>
                                <p>Introducing SieMatic SLX PURE - The Handleless Kitchen with simplicity and flexibility which redefined Modern Luxury…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale14.jpg" />
                        <a href="https://www.dm-home.com/news-events/inspried-guides-making-home-beautiful-home-accessories"  target="_blank">
                            <div class="description">
                                <h4> 3 Inspired Guides that making your home more beautiful with Home Accessories</h4>
                                <p>One of the simplest ways to add some sparkle to your home is to experiment with Home Accessories. Decorative items can…</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="columnthree">
                    <div class="card">
                        <img src="img/sale15.jpg" />
                        <a href="https://www.dm-home.com/news-events/dmhome-display-sale-world-class-bathroom-brands-12-31-august-2022" target="_blank">
                            <div class="description">
                                <h4> DMHOME DISPLAY SALE | WORLD CLASS BATHROOM BRANDS 12 &ndash; 31 AUGUST 2022</h4>
                                <p>Discover imported bathroom fixtures and sanitary wares from the world's class-leading brands, where technology and…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale16.jpg" />
                        <a href="https://www.dm-home.com/news-events/dmhome-inventory-sale-31-march-3-april-2022"  target="_blank">
                            <div class="description">
                                <h4> DMHOME INVENTORY SALE 31 MARCH TO 3 APRIL 2022</h4>
                                <p>
                                    A trip worthy of a visit, for those in search for best finds.

                                    For 4 days only, discover a true treasure trove of…
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale17.jpg" />
                        <a href="https://www.dm-home.com/news-events/LAUFEN-Swissness-bathroom-solution"  target="_blank">
                            <div class="description">
                                <h4> LAUFEN, Swissness quality and design, offering complete bathroom solution</h4>
                                <p>Introducing LAUFEN, Swiss-design and Swiss-quality bathroom sanitaryware and furnishing products - exclusively available…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale18.png" />
                        <a href="https://www.dm-home.com/news-events/Ralph-Lauren-Home-Gifts"  target="_blank">
                            <div class="description">
                                <h4>Ralph Lauren Home: Timeless Gifts for Your Loved Ones</h4>
                                <p>Sophisticatedly designed, Ralph Lauren Home’s products are perfect gifts for your loved ones. Explore your choice here…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale19.jpg" />
                        <a href="https://www.dm-home.com/news-events/shop-win-hansgrohe"  target="_blank">
                            <div class="description">
                                <h4> Shop &amp; Win with hansgrohe! From 01 December 2021 &ndash; 31 January 2022.</h4>
                                <p>
                                    Celebrate the holiday season with up to 70% off and take part in our lucky draw.
                                    – For every 10,000 Baht purchase, get
                                </p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale20.jpg" />
                        <a href="https://www.dm-home.com/news-events/finding-luxury-furniture-in-Bangkok"  target="_blank">
                            <div class="description">
                                <h4> Finding Luxury Furniture in Bangkok</h4>
                                <p>A Guide on Buying Luxury Furniture in Bangkok - What to Concern on? Where to find it? And why would you choose DMHOME as…</p>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <img src="img/sale21.jpg" />
                        <a href="https://www.dm-home.com/news-events/interiors-design-ideas-roberto-cavalli-home-interiors"  target="_blank">
                            <div class="description">
                                <h4> Interiors design ideas with Roberto Cavalli Home Interiors</h4>
                                <p>Interior Design Ideas with Roberto Cavalli Home Interiors, Italian Luxury Furniture and Accessories with Roberto Cavalli…</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--the end section-->

    <section class="end">
        <div class="hhhd">
            <h3>subscribe to get <br /> our latest updates</h3>
        </div>
        <div class="privacy">
            <div class="navigations">
                <h5>DMHOME</h5>
                <p style="padding-bottom:9em;">Join us for better experience and start making your home with DMHOME</p>
                <br />
                <p>© 2022 DMHOME - All rights Reserved</p>
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
    </section>
    <script src="mainpage.js"></script>
</body>
</html>