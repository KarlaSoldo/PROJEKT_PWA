<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Vijest</title>
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

    <div class="content_skripta">
        <?php

        include 'connect.php';

        $naslov=$_POST['title'];
        
        $opis=$_POST['about'];
        

        
        $sadrzaj=$_POST['content'];

        if(isset($_POST['staraSlika']))
        {
            $slika=$_POST['staraSlika'];
        }

        if(!empty($_FILES['foto']['name'])){
                $fileExtensionsAllowed = ['jpeg','jpg','png'];
        
                $fileName = $_FILES['foto']['name'];
                $fileSize = $_FILES['foto']['size'];
                $fileTmpName  = $_FILES['foto']['tmp_name'];
                $fileType = $_FILES['foto']['type'];
                
                $slika =basename($fileName);
            }
                
        $kategorija=$_POST['category'];
        
        if(isset($_POST['archive'])){
            $archive=1;
           }
        else{
            $archive=0;
           }
        
        ?>

        <section>
            <h1 class="skripta">
                <?php
                    echo $naslov;
                ?>
            </h1>
            
            <div>
                <?php
                    echo "<img src='$slika' class='bigpic'";
                ?>
            </div>

            <p class="bold">
                <?php
                    echo $opis;
                ?>
            </p>

            <p class="skripta">
                <?php
                    echo $sadrzaj;
                ?>
            </p>
        </section>
    </div>

    <?php
        $title=$_POST['title'];
        $about=$_POST['about'];
        $content=$_POST['content'];
        $category=$_POST['category'];
        $date=date('d.m.Y.');
        
        if(isset($_POST['archive'])){
         $archive=1;
        }else{
         $archive=0;
        }

        $ide=$_POST['ide'];

        if($ide==0)
        {
            $query = "INSERT INTO clanci (datum, naslov, sazetak, tekst, slika, kategorija, 
            arhiva ) VALUES ('$date', '$title', '$about', '$content', '$slika', 
            '$category', '$archive')";
            $result = mysqli_query($dbc, $query) or die('Error querying databese.');
            mysqli_close($dbc);
        }
        else{
            $query = "UPDATE clanci 
                      SET datum='$date', naslov='$title', sazetak='$about', tekst='$content', slika='$slika', kategorija='$category', arhiva=$archive WHERE id=$ide;";
            $result = mysqli_query($dbc, $query) or die('Error querying databese.');
            mysqli_close($dbc);
        }
      
    ?>

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
