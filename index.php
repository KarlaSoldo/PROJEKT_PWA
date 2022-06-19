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

            $query = "SELECT * FROM clanci WHERE arhiva=0 AND kategorija='sport' ORDER BY id DESC LIMIT 3";
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
                       <a class='gumb' href='clanak.php?id=".$row['id']."'>Pročitaj više</a>
                    </div>
                </article>";
        }
     echo"</section>";
    }


    $query = "SELECT * FROM clanci WHERE arhiva=0 AND kategorija='kultura' ORDER BY id DESC LIMIT 3";
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
                       <a class='gumb' href='clanak.php?id=".$row['id']."'>Pročitaj više</a>
                    </div>
                </article>";
        }
    echo"</section>";

    }
?>

    
        <!-- <article>
            <img src='BZ_berlin/cetvrta.png' alt='cetvrta' class='img_ind'>
            <div>
                <h3 class='c'>Sie hasst est, shoppen zu gehen</h3>
                <p>
                    In Sachen Mode hat bei Sandra Maischberger ihr Mann die Hosen an!
                </p>
            </div>
        </article>

        <article>
            <img src='BZ_berlin/peta.png' alt='peta' class='img_ind'>
            <div>
                <h3 class='c'>Fans schauen in die Rohre</h3>
                <p>
                    ARD verschiebt Film uber Harald Juhnke
                </p>
            </div>
        </article>
        
        <article>
            <img src='BZ_berlin/sesta.jpg' alt='sesta' class='img_ind'>
            <div>
                <h3 class='c'>TV-Sar Mariella Ahrens</h3>
                <p>
                    ,,Meine Tochter sollen wie ich unabhangig durchs Leben gehen!''
                </p>
            </div>
        </article>
    </section> -->
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
    