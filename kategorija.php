<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Kategorija</title>
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
// define('UPLPATH', 'img/');

$kategorija=$_GET["id"];
?>

<div class="content">
<?php
$query = "SELECT * FROM clanci WHERE arhiva=0 AND kategorija='$kategorija' ORDER BY id DESC";
$result = mysqli_query($dbc, $query);

 while($row = mysqli_fetch_array($result)) {
    echo '<section class="indeks_k">';
    echo '<article class="odmak">';
    echo '<div>';
    echo '<img src="' . $row['slika'] . '" class="img_ind">';
    echo '<h3>';
    echo '<a class="naslKat" href="clanak.php?id='.$row['id'].'">';
    echo $row['naslov'];
    echo '</a></h3>';
    echo '<p>';
    echo $row['sazetak'];     
    echo '</p>';
    echo '</div>';
    echo '</article>';
    echo '</section>';
 }
 ?> 
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
