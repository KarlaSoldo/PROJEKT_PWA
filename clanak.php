<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Clanak</title>
</head>

<body>

<header>
    <h1 class="BZ"> B·Z·</h1>
    <nav>
        <ul>
            <li><a href='index.php'>HOME</a></li>
            <li><a href='kategorija.php?id=sport'>BERLIN-SPORT</a></li>
            <li><a href='kategorija.php?id=kultura'>KULTUR UND SHOW</a></li>
            <li><a href='unos.php'>DODAVANJE ČLANKA</a></li>
            <li><a href='prijava.php' class=''>ADMINISTRACIJA</a></li>
        </ul>
    </nav>
</header>

<?php
      include 'connect.php';

      $id=$_GET["id"];

      $query = "SELECT * FROM clanci WHERE id=$id ";
      $result = mysqli_query($dbc, $query);

      $row = mysqli_fetch_array($result);
?>
<div class="content_skripta">
<section>
            <h1 class="skripta">
                <?php
                    echo $row['naslov'];
                ?>
            </h1>
            
            <div>
                <?php
                    echo "<img src='".$row['slika']."' class='bigpic'>";
                ?>
            </div>

            <p class="bold">
                <?php
                    echo $row['sazetak'];
                ?>
            </p>

            <p class="skripta">
                <?php
                    echo $row['tekst'];
                ?>
            </p>
</section>
</div>

<footer class="e">
        <div class="content_skripta">
            <p>
                Weitere Online-Angebode der Axel pringer SE:>
            </p>
            <div class="prazno_skr"></div>
        </div>
    </footer>
</body>
</html>  
