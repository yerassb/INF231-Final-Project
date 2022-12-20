<?php 
    require_once 'php/connect.php';

    session_start();
?>

<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="about.css" />
    <link rel="stylesheet" href="css/mainfont.css">
</head>
<body>
    <section class="firstpage">
        <div class="container first">
            <?php include('header.php'); ?>
            <img src="img/about.jpg" />
        </div>
    </section>

    <section class="about">
        <div class="container">
            <div class="all">
                <div class="text">
                    <h3>At The Heart</h3>
                    From urban sleek metropolitan penthouse apartment to rustic, warm rustic luxury second home in the country, DMHOME is your go to leading and integrated design firm for all your design solutions.
                </div>
                <div class="longhd">
                    <h3>
                        “Our expertise is to cater every bit of fulfilment
                        and to create sumptuous delights to your home living.”
                    </h3>
                </div>
                <div class="continue">
                    <p>A keen-eye procurer of ultra luxury and premier lifestyle products, DMHOME is constantly expanding and upgrading its collections that feature pieces which become core to an interior display, completing any home décor—both practically and aesthetically. DMHOME customers include highly qualified individual home owners and the complete circle of people in the design industry, from individual home owners to architects, designers and realestate developers. As the leading design and lifestyle brand for nearly three decades, we are at the forefront of the industry for style, design and luxury lifestyle in Thailand and surrounding regions. Our brand ethos showcases our wide range of services and collections of products that we have acquired over time from the world-leading designers and manufacturers, each of which DMHOME takes pride in providing to its excellent customers. </p>
                </div>
                <p class="bigg"><span>29</span>    years    <span>30+</span>    brands   </p>
            </div>
        </div>
    </section>

    <section class="pictures">
        <div class="container">
            <div class="all2">
                <div class="text">
                    <h2>DMHOME</h2>
                    <h4>The finest in every sense</h4>
                </div>
                <div class="continue">
                    <p>Humans have five basic senses: touch, sight, taste, smell and hearing. The sensing organs associated with each sense send information to the brain to help us understand and perceive the world around us. </p>
                </div>
                <div class="header second">
                    <p id="touch" onclick="change(this)">Touch</p>
                    <p id="sight" onclick="change(this)">Sight</p>
                    <p id="taste" onclick="change(this)">Taste</p>
                    <p id="smell" onclick="change(this)">Smell</p>
                    <p id="hearing" onclick="change(this)">Hearing</p>
                </div>
                <div class="secondcontent">
                    <div class="minimg">
                        <img id="minimg" src="img/minimg1.jpg" />
                    </div>
                    <div class="parag">
                        <p id="paragraph">
                            This sense works via the complex labyrinth that is the human ear. Sound is funnelled through the external ear and piped into the external auditory canal. Then, sound waves reach the tympanic membrane, or eardrum.

                            This is a thin sheet of connective tissue that vibrates when sound waves strike it.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="foundation">
        <div class="container">
            <div class="brand">
                <div class="imgs">
                    <div class="hori">
                        <img id="im1" src="img/hori1.jpg" />
                        <img id="im2" src="img/hori2.jpg" />
                    </div>
                    <div class="veri">
                        <img id="im3" src="img/veri1.jpg" />
                        <img id="im4" src="img/veri2.jpg" />
                    </div>
                </div>
                <div class="bfound">
                    <h5>Brand Foundations</h5>
                    <p>
                        The go-to living & design centre for imported products by world-class leading designers & the bespoke of the top-of-the range specifications. Design is central to DMHOME, the procurer of premier luxury and refined home décor, which boasts such names: Bottega Veneta, Fendi Casa, Kartell, Missoni Home, Ralph Lauren Home, Trussardi Casa, Roberto Cavalli Home, EtroHome, Gianfranco Ferre Home, Siematic, Binova, Duravit, Kallista, Lefroy Brooks, Agape, Kohler, Axor, Hansgrohe andmany more. The firm specialises in luxury, high-end pieces that can convey befittingly to both sense and sensibility of the homeowner, bridging the gap between a vague, dream-like inspiration and a true revelation. DMHOME strives for excellence in sourcing a series of exclusive, high-end designer products to architects, designers as well as real-estate developers.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!--the end section-->

    <?php include('footer.php'); ?>


    <script src="mainpage.js"></script>
</body>
</html>
