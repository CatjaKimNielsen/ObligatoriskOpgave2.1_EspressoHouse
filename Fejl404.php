<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Fejl 404 - Espresso House </title>
    <meta name="robots" content="All">
    <meta name="author" content="Catja Nielsen, Susana Buch & Helene Holm">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/2e00c5b256.js" crossorigin="anonymous"></script>



</head>


<body>


    <?php include "includes/navigation.php"; ?>


    <div class="container">
        <h2 class="mt-3 mb-4 d-flex w-100 justify-content-center">Vi beklager - Siden blev desværre ikke fundet</h2>
        <img src="image/Kontakt_Hygge.jpg" class="mb-3" alt="Lækker indretning hos Espresso House">
        <h6 class="mb-3 d-flex w-100 justify-content-center"> Gå tilbage til <a href="index.php" class="ms-1 me-1"> forsiden </a> eller prøv i søgefeltet</h6>
        <div class="mb-5 d-flex w-100 justify-content-center">
            <input type="text" class="form-control" placeholder="Caffe latte ..." style="width: 400px">
            <button type="submit" class="btn btn-light_green w-25 ms-3" style="width: 200px">Søg</button>
        </div>
    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
