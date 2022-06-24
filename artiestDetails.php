<?php
include('DB/DataBase_connection.php');

$artiestsql = "SELECT artiest_id, naam, statement FROM artiesten;";
$artiest1 = $conn->query($artiestsql);

$eventsql = "SELECT evenement_id, datum FROM evenementen;";
$event1 = $conn->query($eventsql);
$id= $_GET['id'];


?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="language" content="NL">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="eventpage plant-boost">
    <meta name="author" content="Tyler And Jilvano">
    <meta name="keywords" content='plant-boost'>
    <title>Home</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="CSS/artiestdetails.css">
   
</head>

<body>

    <header class="container-fluid">
        <section class="row">
            <img id="image-logo" class=" col-md-1 col-lg-1" src="IMG/logo-with-tekst.png" alt="plant boost logo">
            <nav id="left" class="col col-md-7 col-lg-5 row">
                <a class="col-md-2 col-2" href="homepage.php">Home</a>
                <a class="col-md-2 col-2" href="product.php">Product</a>
                <a class="col-md-1 col-1" href="overzicht.php">overzicht</a>
                <a class="col-md-2 col-2" href="contact.php">Contacten</a>
                <a class="col-md-2 col-1" href=login.php">Inloggen</a>
            </nav>
        </section>
    </header>
    <main class="container-fluid">
        <section id="first-box">
        <img id="artiest" src="artiesten/<?php echo  $_GET['id'] ?>.png"> 
        </section>
        
        <section>
        <?php
            $artiest = $artiest1->fetch_assoc()
            ?>
            <article class="artiest-box" id="second-box">deze artiest speelt bij:</article>

            <article class="artiest-box" id="third-box"> meest bekende statement van dit persoon: <?php echo $artiest['statement'] ?></article>

        </section>
    </main>
    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous">
    </script>

</body>

</html>