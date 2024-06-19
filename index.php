<?php
session_start();
// include 'listings/properties.php';

// if(!isset($_SESSION['properties'])) {
//     $_SESSION['properties'] = $properties;
// }
require_once __DIR__ . "/listings/bdo.php";

$houseQuery = "SELECT * FROM annonces WHERE category ='House'";

$apartmentQuery = "SELECT * FROM annonces WHERE category ='Apartment'";

$stmt = $pdo->query($houseQuery);
$houses = $stmt->fetchAll();

$stmt = $pdo->query($apartmentQuery);
$apartment = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\assets\style\style.css">
    <!-- <link rel="stylesheet" href="iphone.css"> -->
    <!-- <link rel="stylesheet" href="carousel.css"> -->
    <title>143 AGENCY</title>
    
     
</head>

<body>
    <!-- START HEADER -->
    <?php include './_partials/_header.php'; ?>
    <!-- END HEADER -->

    <!-- START ASIDE -->
    <aside>


        <div class="img-1">
            <!-- <p>green</p> -->
            <img src="./assets/images/immobilier-relation-1200x640.jpg" alt="" class="img-1">
        </div>

        <div class="img-2">
            <!-- <p>blue</p> -->
            <img src="./assets/images/image-location-maison-piscine-privee.jpg" alt="" class="img-2">
        </div>
        <div class="img-3">
            <!-- <p>red</p> -->
            <img src="./assets/images/maison 2.jpg" alt="" class="img-3">
        </div>



    </aside>
    <!-- END ASIDE -->


    <!-- START MAIN -->
    <main>



        <div class="separation-1">

            <div class="title-1">
                <p id="appartment">Our Apartment</p>
            </div>
            <div class="center">PROPERTY AGENCY</div>
        </div>

        <!-- START BLOC-APPARTMENT -->
        <div class="bloc-appartment">

            <div id="carouselExampleIndicators" class="carousel_slide">

                <div class="carousel-inner">
                    
                    <?php
                    foreach ($apartment  as $property) {
                        require '_partials/listings/_card.php';
                    }
                    ?>

                </div>
                <div class="boutton">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <!-- <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="carousel-item">
                        <img src="./images/annonce appartement 1.webp">
                    </div>
                    <div class="mot">gergdfgdsf</div>
                    <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="./images/annonce appartement 4.webp">
                    </div>
                    <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
                    <div class="carousel-item">
                        <img src="http://fakeimg.pl/2000x800/F90/fff/?text=Carousel">
                    </div>
                    <label for="carousel-3" class="carousel-control prev control-1">‹</label>
                    <label for="carousel-2" class="carousel-control next control-1">›</label>
                    <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                    <label for="carousel-3" class="carousel-control next control-2">›</label>
                    <label for="carousel-2" class="carousel-control prev control-3">‹</label>
                    <label for="carousel-1" class="carousel-control next control-3">›</label>
                    <ol class="carousel-indicators">
                        <li>
                            <label for="carousel-1" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-2" class="carousel-bullet">•</label>
                        </li>
                        <li>
                            <label for="carousel-3" class="carousel-bullet">•</label>
                        </li>
                    </ol>
                </div>
            </div>

 -->



        </div>
        <!-- END BLOC-APPARTMENT -->

        <div class="separation-2">

            <div class="title-2">
                <p id="house">Our House</p>
            </div>

        </div>

        <!-- START BLOC-HOUSE -->
        <div class="bloc-house">

            <div id="carouselExampleIndicators" class="carousel_slide">

                <div class="carousel-inner">
                <?php
                    foreach ($houses  as $property) {
                        require '_partials/listings/_card.php';
                    }
                    ?>

                    
                </div>
                <div class="boutton">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>



        </div>
        <!-- END BLOC-HOUSE -->

        <div class="separation-3">

            <div class="title-3">
                <p id="favorite">My Favorites</p>
            </div>
        </div>

        <!-- START BLOC-FAVORITE -->
        <div class="bloc-favorite">


            <div id="carouselExampleIndicators" class="carousel_slide">

                <div class="carousel-inner">
                    <div class="volvic">
                        <div class="cool">
                            <div class="carousel-item">
                                <img src="./assets/images/annonce aprtement 2.webp" class="d-block-w-100" alt="...">
                            </div>
                            <div class="lala">
                                <a href="">
                                    <img src="./assets/images/299063_heart_icon.png" alt="" class="hearth-red">
                                </a>
                                <ul>
                                    <li>5 room</li>
                                    <li>4 bedroom</li>
                                    <li>76m²</li>
                                    <li>300 000$</li>
                                    <li>Créteil (94000)</li>
                                </ul>
                            </div>
                        </div>

                        <div class="base">

                            <div class="para">
                                <p> Apartment</p>
                            </div>
                            <div class="sale">FOR SALE</div>
                            <div class="gt">
                                <a href="">
                                    <img src="./assets/images/134224_add_plus_new_icon.png" alt="" class="icone-1">
                                </a>
                                <a href="">
                                    <img src="./assets/images/2849834_message_letter_multimedia_mail_communication_icon.png"
                                        alt="" class="letter">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="volvic">
                        <div class="cool">
                            <div class="carousel-item">
                                <img src="./assets/images/annonce maison 1.webp" class="d-block-w-100" alt="...">
                            </div>
                            <div class="lala">
                                <a href="">
                                    <img src="./assets/images/299063_heart_icon.png" alt="" class=" hearth-red">
                                </a>
                                <ul>
                                    <li>5 room</li>
                                    <li>4 bedroom</li>
                                    <li>96m²</li>
                                    <li>1200$</li>
                                    <li>Evry (91000)</li>
                                </ul>
                            </div>
                        </div>
                        <div class="base">
                            <div class="para">
                                <p> House</p>
                            </div>
                            <div class="rent">FOR RENT</div>
                            <div class="gt">
                                <a href="">
                                    <img src="./assets/images/134224_add_plus_new_icon.png" alt="" class="icone-1">
                                </a>
                                <a href="">
                                    <img src="./assets/images/2849834_message_letter_multimedia_mail_communication_icon.png"
                                        alt="" class="letter">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="./images/annonce maison 2.webp" class="d-block-w-100" alt="...">
                    </div> -->
                </div>
                <div class="boutton">
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>



            </div>
            <!-- END BLOC-FAVORITE -->

    </main>
    <!-- END MAIN -->


    <!-- START FOOTER -->
    <?php include './_partials/_footer.php'; ?>
    <!-- <END FOOTER -->

    <div class="bonnenuit">
        <span id="underline"> All rights reserved</span>
        <span id="underline">Translation powered by Google</span>
        <span id="underline">Our fees</span>
        <span id="underline">Site map</span>
        <span id="underline">LegAdminPartners</span>
        <span id="underline">GDPR Policy</span>
        <span id="underline">Cookies</span>
    </div>

    <div class="end">
        <span id="underline">143 Agency 1992 - 2024</span>
    </div>
<!--     
    <div class="form">
      <h2>Formulaire de Recherche Immobilière</h2>
      <form action="./_partials/login.php" method="POST">

       <label for="type_transaction">Type de transaction :</label><br>
        <select id="type_transaction" name="type_transaction">
            <option value="sale">sale</option>
            <option value="rent">rent</option>
        </select><br>

       <label for="type_logement">Type de logement :</label><br>
        <select id="type_logement" name="type_logement">
            <option value="apartment">Apartment</option>
            <option value="house">House</option>
        </select><br>

        <label for="rooms">Number rooms :</label><br>
        <input type="number" id="rooms" name="rooms" required><br>

        <label for="bedrooms">Number bedrooms :</label><br>
        <input type="number" id="bedrooms" name="bedrooms" required><br>

        <label for="surface">Surface (m²) :</label><br>
        <input type="number" id="surface" name="surface" required><br>

        <label for="city">City :</label><br>
        <input type="text" id="city" name="city" required><br>

        <label for="price">Price ($) :</label><br>
        <input type="number" id="price" name="price" required><br>

        <input class ="send" type="submit" value="Send" >
       </form>
    </div> -->
</body>

</html>