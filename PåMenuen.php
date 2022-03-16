<!DOCTYPE html>
<html lang="da">

<head>

    <meta charset="utf-8">

    <title> På Menuen - Espresso House </title>
    <meta name="description" content="Hos Espresso House betyder kaffe rigtig meget. Men det er ikke alt - vores hjerter brænder også for andre varme og kolde drikke, hjemmelavet bagværk, hjemmelavet sandwich og salater."
    <meta name="robots" content="All">
    <meta name="author" content="Catja Nielsen, Susana Buch & Helene Holm">
    <meta name="copyright" content="Information om copyright">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta property="og:title" content="Espresso House - På menuen">
    <meta property="og:type" content="website">
    <meta property="og:url" content="...">
    <meta property="og:image" content="...">
    <meta property="og:description" content="Hos Espresso House betyder kaffe rigtig meget. Men det er ikke alt - vores hjerter brænder også for andre varme og kolde drikke, hjemmelavet bagværk, hjemmelavet sandwich og salater.">
    <meta property="og:locale" content="da.DK">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <script src="https://kit.fontawesome.com/2e00c5b256.js" crossorigin="anonymous"></script>

</head>


<body>


    <?php include "includes/navigation.php"; ?>

    <div class="container">

        <h3 class="ms-1 mt-3 me-1 mb-4 text-center"> Klik gennem Espresso House's lækre menu og find dine favoritter. <h2>

        <img src="image/PåMenuen_KaffeCrossiant.jpg" class="w-100 mb-4" alt="Lækker hjemmebag med kaffe og smoothie">

        <div class="collapse1_VarmeDrikke mb-3">
            <div>
                <p>
                    <a class="btn btn-light_green w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Varme drikke
                    </a>
                </p>
                <div class="collapse" id="collapse1">
                    <div class="card card-body">
                        <div class="card" style="width: 14rem;">
                            <img src="image/Menu_VarmDrik.jpg" class="card-img-top" alt="Lækker Americano i kaffekop">
                            <div class="card-body">
                                <p class="card-title">Americano</p>
                            </div>
                        </div>
                        <div class="card" style="width: 14rem;">
                            <img src="image/Menu_VarmDrik.jpg" class="card-img-top" alt="Lækker Caffe Latte i kaffekop">
                            <div class="card-body">
                                <p class="card-title">Caffe Latte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse2_KoldeDrikke mb-3">
            <div>
                <p>
                    <a class="btn btn-light_green w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Kolde drikke
                    </a>
                </p>
                <div class="collapse" id="collapse2">
                    <div class="card card-body">
                        ...
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse3_Sandwiches mb-3">
            <div>
                <p>
                    <a class="btn btn-light_green w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Sandwiches
                    </a>
                </p>
                <div class="collapse" id="collapse3">
                    <div class="card card-body">
                        ...
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse4_Salater mb-3">
            <div>
                <p>
                    <a class="btn btn-light_green w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapse4" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Salater
                    </a>
                </p>
                <div class="collapse" id="collapse4">
                    <div class="card card-body">
                        ...
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse5_Bagværk mb-5">
            <div>
                <p>
                    <a class="btn btn-light_green w-100 dropdown-toggle" data-bs-toggle="collapse" href="#collapse5" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Hjemmelavet bagværk
                    </a>
                </p>
                <div class="collapse" id="collapse5">
                    <div class="card card-body">
                        ...
                    </div>
                </div>
            </div>
        </div>

    </div>


    <?php include "includes/footer.php"; ?>


    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>