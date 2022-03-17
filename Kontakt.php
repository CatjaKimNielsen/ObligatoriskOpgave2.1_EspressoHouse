<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> Kontakt - Espresso House </title>
    <meta name="description" content="Vi vil rigtig gerne høre fra dig. Udfyld kontaktformularen, send en mail eller ring i butikkens åbningstider."
    <meta name="robots" content="All">
    <meta name="author" content="Catja Nielsen, Susana Buch & Helene Holm">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Espresso House - Kontakt">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="Vi vil rigtig gerne høre fra dig. Udfyld kontaktformularen, send en mail eller ring i butikkens åbningstider.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/2e00c5b256.js" crossorigin="anonymous"></script>

</head>


<body>


    <?php include "includes/navigation.php"; ?>

    <div class="container-fluid w-100">
        <img src="image/Kontakt_EH.jpg" alt="Hyggelig stemning i Espresso House Café">
    </div>

    <article class="container">
        <h3 class="ms-1 mt-3 me-1 mb-3 text-center">Kontaktformular</h3>
        <p class="mb-3 text-center">Vi bestræber os på den bedst mulige kundeservice og du vil derfor få svar på din
        henvendelse inden for 24 timer.</p>
        <form class="mb-5">
            <div class="mb-3">
                <label for="navn" class="form-label">Dit fulde navn</label>
                <input type="text" class="form-control" id="navn">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Din e-mail</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="besked" class="form-label">Din besked</label>
                <input type="text" class="form-control " id="besked" aria-describedby="email_tekst" style="height: 200px">
                <div id="email_tekst" class="form-text">Bare rolig, vi deler ikke dine oplysninger med nogen.</div>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" >Tjek om alt er udfyldt som det skal</label>
            </div>
            <button type="submit" class="btn btn-light_green w-25">Send besked</button>
        </form>
    </article>

    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>