<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Registracija</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <style>
        form .error {
            color: #ff0000;
        }
    </style>
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
<div class="content">
<?php
session_start();

    if(isset($_POST['gumb'])){

        include 'connect.php';

        $user = $_POST['username'];
        $lozinka = $_POST['password'];

        $query = "SELECT * FROM korisnik";
        $result = mysqli_query($dbc, $query) or die('Error querying database.');
        $temp = 0;

        
        if($result) {
            while($row = mysqli_fetch_array($result))
            {
                $tempIme = $row['username'];
                $hash_lozinka = $row['password'];

                if($user == $tempIme){
                    if(password_verify($lozinka, $hash_lozinka)){
                        $temp = 1;
                        $_SESSION['admin'] = $row['admin'];
                        $_SESSION['ime'] = $row['ime'];
                        $_SESSION['prezime'] = $row['prezime'];
                        $_SESSION['username'] = $row['username'];
                    } 
                }
            }
        }

        if($temp == 1){
            if($_SESSION['admin'] == 1){
              echo "<script>
              location.href = 'administrator.php?id=1';
              </script>";
            } 
            else{                
              echo"<br/>";
              echo"<br/>";
              echo  '<p>Bok ' . $_SESSION['ime'] . '! Uspješno ste prijavljeni, ali niste administrator i nemate pravo pristupa ovoj stranici.</p>';
              ;
            }
        } 
        else
        {
            echo"<br/>";
            echo"<br/>";
            echo "<p>Krivi username ili password.</p>";
        }

        mysqli_close($dbc);
    }
    ?>
</div>
<div class="content">
    <form enctype="multipart/form-data" action="" name="prijava" method="POST">
    <br/>
    <br/>
    <p> Molimo, prijavite se u sustav:
    <br/>
    <br/>
        <label for="username">Username:</label>
        <br/>
        <input type="text" name="username" id="username"/>
        <span id="porukaUsename" class="error"></span>
        <br/>
        <label for="password">Lozinka:</label>
        <br/>
        <input type="password" name="password" id="password"/>
        <span id="porukaPassword" class="error"></span>
        <br/>
        <br/>
        <button type="submit" id="gumb" name="gumb">Prijavi me</button> 
        <br/>
        <br/>  
        <p>
            Nemate račun? Registrirati se možete na <a href='registracija.php'>ovom linku</a>
        </p>
    </form>      
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



