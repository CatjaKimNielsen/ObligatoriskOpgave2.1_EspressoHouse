<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Espresso House </title>
    <meta name="description" content="Espresso House er nordens førende og hurtigst voksende coffee shop-kæde med coffee shops fordelt i Danmark, Sverige, Norge og Finland."
    <meta name="robots" content="All">
    <meta name="author" content="Catja Nielsen, Susana Buch & Helene Holm">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Espresso House">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="Espresso House er nordens førende og hurtigst voksende coffee shop-kæde med coffee shops fordelt i Danmark, Sverige, Norge og Finland.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/2e00c5b256.js" crossorigin="anonymous"></script>



</head>


<body>


    <?php include "includes/navigation.php"; ?>


    <div id="carouselExampleCaptions" class="carousel carousel-fade slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/Forside_Slider1.jpg" class="d-block w-100" alt="Espresso House abonnement med Espresso House app'en">
                <div class="carousel-caption">
                    <h5>BÆREDYGTIGHED OG GRØNT MILJØ</h5>
                    <p>100% god smag - Plantebaseret er dit valg!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="image/Forside_Slider2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption">
                    <h5>BESTIL OG FÅ LEVERET TIL DØREN</h5>
                    <p>Espresso House findes nu også på Wolt!</p>
                </div>
            </div>
            <div class="carousel-item carousel-dark">
                <img src="image/Forside_Slider3.jpg" class="d-block w-100" alt="Lækker mad fra Espresso House kan nu bestilles via Wolt">
                <div class="carousel-caption">
                    <h5>ESPRESSO HOUSE ABONNEMENT</h5>
                    <p>Download app'en -> Find din favoritkaffe</p>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>



    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <img src="image/espressoh1a.jpg" alt="espresso1" class="img-fluid m-1">
                <div class="overlay">
                </div>
                <button type="button" class="btn btn-light_green btn-lg">Large button</button>

            </div>

            <div class="col-md-6 col-sm-12">
                <img src="image/espressoh2a.jpg" alt="espresso2" class="img-fluid m-1">
                <div class="overlay">
                </div>
                <button type="button" class="btn btn-light_green btn-lg">Large button</button>

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="image/espresso3a.png" alt="espresso3" class="img-fluid m-2">
                <div class="overlay">
                </div>
                <button type="button" class="btn btn-light_green btn-lg">Large button</button>

            </div>
            <div class="col-md-6 col-sm-12">
                <img src="image/espressoh4a.jpg" alt="espresso1" class="img-fluid m-2">
                <div class="overlay">
                </div>
                <button type="button" class="btn btn-light_green btn-lg">Large button</button>

            </div>

        </div>
    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
