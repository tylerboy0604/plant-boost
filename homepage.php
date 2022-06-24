<?php
include('DB/DataBase_connection.php');


$aanbiedingsql = "SELECT titel, begindatum, einddatum, omschrijving, afbeelding
FROM aanbiedingen
WHERE begindatum <= NOW() AND einddatum >= NOW()
ORDER BY begindatum ASC
LIMIT 1;";
$aanbied1 = $conn->query($aanbiedingsql);


$eventsql = "SELECT evenementen.artiest_id,	evenementen.datum, artiesten.naam 
FROM evenementen 
LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id 
WHERE evenementen.datum >= NOW() AND evenementen.datum <= DATE_ADD(NOW(), INTERVAL 7 DAY)
ORDER BY evenementen.datum;";
$events3 = $conn->query($eventsql);
?>










<!-- Basispagina HTML -->
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="homepage plant-boost">
    <meta name="author" content="Tyler">
    <meta name="keywords" content='plant-boost'>
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/homepage.css">
</head>

<body>

    <header class="container-fluid">
        <section class="row">
            <img id="image-logo" class="col-md-1 col-lg-1" src="IMG/logo-with-tekst.png" alt="plant boost logo">
            <nav id="left" class="col col-md-7 col-lg-5 row">
                <a class="col-md-2 col-2" href="homepage.php">Home</a>
                <a class="col-md-2 col-2" href="product.php">Product</a>
                <a class="col-md-1 col-1" href="overzicht.php">overzicht</a>
                <a class="col-md-2 col-2" href="contact.php">Contacten</a>
                <a class="col-md-2 col-1" href=logIn.php">Inloggen</a>
            </nav>
        </section>
    </header>
    <main class="container-fluid">
        <?php while($aanbieding = $aanbied1->fetch_assoc()){
            ?>
        <section id="banner">
            <img id="bannerimg" src="aanbiedingen/<?php echo $aanbieding['afbeelding']?>">

        </section>
        <?php 
        }
?>


        <section id="goup" class="row">
            <?php
            while ($evenement = $events3->fetch_assoc()) {
            ?>
            <article class="col-1 col-md-1 col-lg-4">
                <p>
                    <?php echo $evenement['datum'] . "<br>" . $evenement['naam']; ?>
                </p>
                <br>
                <img id="image-event" src="artiesten/<?php echo $evenement['artiest_id'] ?>.png">
            </article>

            <?php
            }

            ?>

        </section>
    </main>
    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</body>

</html>