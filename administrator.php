<!DOCTYPE html>
<html lang='de'>
<head>
    <meta charset='UTF-8'>
    <link rel='stylesheet' type='text/css' href='style.css'>
    <title>B·Z·</title>
</head>

<body>

<header>
    <h1 class='BZ'> B·Z·</h1>
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

<div class='content'>
    <?php
            include 'connect.php';

            if(isset($_GET['id'])){
                $id=$_GET['id'];
                
                $query = "DELETE FROM clanci WHERE id=$id";
                $result = mysqli_query($dbc, $query);
            }

            $query = "SELECT * FROM clanci WHERE kategorija='sport' ORDER BY id DESC";
            $result = mysqli_query($dbc, $query);

echo"<section class='indeks'>
        <h2 class='nar'>
            BERLIN-SPORT >
        </h2>";

        if($result)
        {
        while($row = mysqli_fetch_array($result)) 
        {
            echo"
                <article>
                    <img src='".$row['slika']."' alt='prva' class='img_ind'>
                    <div>
                        <h3 class='n'>".$row['naslov']."</h3>
                        <p>
                            ".$row['sazetak']."     
                       </p>
                       <a class='gumb' href='unos.php?id=".$row['id']."'>UREDI ČLANAK</a>
                       <a class='gumb' href='administrator.php?id=".$row['id']."'>OBRIŠI ČLANAK</a>
                    </div>
                </article>";
        }
     echo"</section>";
    }


    $query = "SELECT * FROM clanci WHERE kategorija='kultura' ORDER BY id DESC";
            $result = mysqli_query($dbc, $query);

echo"<section class='indeks'>
        <h2 class='crv'>
            KULTUR UND SHOW >
        </h2>";

        if($result)
        {
        while($row = mysqli_fetch_array($result)) 
        {
            echo"
                <article>
                    <img src='".$row['slika']."' alt='prva' class='img_ind'>
                    <div>
                        <h3 class='n'>".$row['naslov']."</h3>
                        <p>
                            ".$row['sazetak']."     
                       </p>
                       <a class='gumb' href='unos.php?id=".$row['id']."'>UREDI ČLANAK</a>
                       <a class='gumb' href='administrator.php?id=".$row['id']."'>OBRIŠI ČLANAK</a>
                    </div>
                </article>";
        }
    echo"</section>";

    }
?>
</div>

<footer>
    <div class='content'>
        <p>
            Weitere Online-Angebode der Axel pringer SE:>
        </p>
        <div class='prazno'></div>
    </div>
</footer>
</body>
</html>  
    