<?php
<<<<<<< HEAD:eventpage.php
include('DB/DataBase_connection.php');

$eventsql = "SELECT evenementen.artiest_id,	evenementen.datum, artiesten.naam FROM evenementen LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id ORDER BY evenementen.datum ASC LIMIT 3;";
$events3 = $conn->query($eventsql);
=======
// include('DB/DataBase_connection.php');

// $eventsql = "SELECT evenementen.artiest_id,	evenementen.datum, artiesten.naam FROM evenementen LEFT JOIN artiesten ON evenementen.artiest_id = artiesten.artiest_id ORDER BY evenementen.datum ASC LIMIT 3;";
// $events3 = $conn->query($eventsql);
>>>>>>> b27289eb45eec09ca9f975223953380cca96509a:Details.php
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <meta name="description" content="eventpage plant-boost">
    <meta name="author" content="Tyler">
    <meta name="keywords" content='plant-boost'>
    <title>Home</title>

<<<<<<< HEAD:eventpage.php
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/eventpage.css">
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/details.css">
>>>>>>> b27289eb45eec09ca9f975223953380cca96509a:Details.php
</head>

<body>

    <header class="container-fluid">
        <section class="row">
            <img id="image-logo" class=" col-md-1 col-lg-1" src="IMG/logo-with-tekst.png" alt="plant boost logo">
            <nav id="left" class="col col-md-7 col-lg-5 row">
                <a class="col-md-2 col-2" href="homepage.php">Home</a>
                <a class="col-md-3 col-3" href="eventpage.php">Evenementen</a>
                <a class="col-md-2 col-2" href="">Product</a>
                <a class="col-md-1 col-1" href="">Zoek</a>
                <a class="col-md-2 col-2" href="">Contacten</a>
                <a class="col-md-2 col-1" href="">Inloggen</a>
            </nav>
        </section>
    </header>
    <main class="container-fluid">
        <section id="first-box"></section>
        <section>
            <article id="second-box"></article>

<<<<<<< HEAD:eventpage.php
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
            </article> <br>

            <?php
            }

            ?>

=======
            <article id="third-box"></article>
        </section>
>>>>>>> b27289eb45eec09ca9f975223953380cca96509a:Details.php
    </main>
    <footer>

    </footer>



<<<<<<< HEAD:eventpage.php
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
=======
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
>>>>>>> b27289eb45eec09ca9f975223953380cca96509a:Details.php
    </script>

</body>

</html>