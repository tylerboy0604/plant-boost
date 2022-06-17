<?php
include('DB/DataBase_connection.php');

$eventsql = "SELECT evenement_id, datum FROM evenementen LIMIT 3";
$events3 = $conn->query($eventsql);

$artiestsql = "SELECT artiest_id ,artiesten.naam
FROM artiesten;";    

$artiest1 = $conn->query($artiestsql);

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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="CSS/overzicht.css">
</head>

<body>

    <header class="container-fluid">
        <section class="row">
            <img id="image-logo" class=" col-md-1 col-lg-1" src="IMG/logo-with-tekst.png" alt="plant boost logo">
            <nav id="left" class="col col-md-7 col-lg-5 row">
                <a class="col-md-2 col-2" href="homepage.php">Home</a>
                <a class="col-md-3 col-3" href="">Evenementen</a>
                <a class="col-md-2 col-2" href="">Product</a>
                <a class="col-md-1 col-1" href="">Zoek</a>
                <a class="col-md-2 col-2" href="">Contacten</a>
                <a class="col-md-2 col-1" href="">Inloggen</a>
            </nav>
        </section>
    </header>
    <main class="container-fluid">
    <form>
     <select class="form-control select-box" name="">
                 <option value="make-any">Make (Any)</option>
                 <?php while($make = $filterres->fetch(PDO::FETCH_OBJ))
                 {
                 echo '
                 <option value="">'.$make->make.'</option>
                 ';
                 } ?>
     </select>
     <button href="#" class="btn btn-block car-search-button btn-lg btn-success"><span class="glyphicon car-search-g glyphicon-search"></span> Search cars 
     </button>
     </form>

    <section id="goup" class="row">



            <?php
            while ($artiest = $artiest1->fetch_assoc()) {
            ?>
                <article class="col-1 col-md-1 col-lg-4">
                    <p>
                        <?php echo $artiest['artiest_id'] . "<br>" . '<a href="Details.php">' . $artiest['naam'] . '</a>';?>
                    </p>
                    <br>
                    <img id="image-event" src="artiesten/<?php echo $artiest['artiest_id'] ?>.png">
                </article>
            <?php
            }
            ?>
            
            <?php
            while ($evenement = $events3->fetch_assoc()) {
            ?>
                <article class="col-1 col-md-1 col-lg-4">
                <p>
                    <?php echo $evenement['datum']?> <br> 
                    <a href="eventdetails.php?id=<?php echo $evenement['evenement_id'];?>"><?php echo $evenement['evenement_id'];?></a>
                </p>
                <br>
                <img id="image-event" src="EVENT/<?php echo  $evenement['evenement_id'] ?>.png">
            </article>

            <?php
            }

            ?></section>
    </main>
    <footer>

    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>