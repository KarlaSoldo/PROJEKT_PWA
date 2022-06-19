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
if(isset($_POST['gumb'])){
    $ime = $_POST['name'];
    $prezime = $_POST['surname'];
    $user = $_POST['username'];
    $lozinka = $_POST['password'];
    $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH);

    include 'connect.php';

    $query = "SELECT * FROM korisnik";
    $result = mysqli_query($dbc, $query) or die('Error querying database.');

    $temp = 0;

    if($result) {
        while($row = mysqli_fetch_array($result))
        {
            $tempIme = $row['username'];

            if($user == $tempIme){
                $temp = 1;
            }
        }
    }

    if($temp == 0){
      $sql="INSERT INTO korisnik (ime, prezime, username, password) values (?, ?, ?, ?)";
      $stmt = mysqli_stmt_init($dbc);

      if (mysqli_stmt_prepare($stmt, $sql)){
          mysqli_stmt_bind_param($stmt,'ssss', $ime, $prezime, $user, $hashed_password);
          mysqli_stmt_execute($stmt);
      } 
      echo "<p>Registracija uspješna!</p> <br/>";
    } 
    else
    {
        echo "<p>Korisničko ime se već korsti!</p>";
    }
  }
?>
</div>
<div class="content">
    <form enctype="multipart/form-data" action="" name="prijava" method="POST">
        <label for="name">Ime:</label>
        <br/>
        <input type="text" name="name" id="name"/>
        <span id="porukaName" class="error"></span>
        <br/>
        <label for="surname">Prezime:</label>
        <br/>
        <input type="text" name="surname" id="surname"/>
        <span id="porukaSurname" class="error"></span>
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
        <label for="password1">Ponovite lozinku:</label>
        <br/>
        <input type="password" name="password1" id="password1"/>
        <span id="porukaPassword" class="error"></span>
        <br/>
        <br/>
        <button type="submit" id="gumb" name="gumb">Registriraj me</button>    
    </form>      
</div>

<script>
      $(function() {
          $("form[name='prijava']").validate({
            rules: {
              name: {
                  required: true,
              },
              surname: {
                  required: true,
              },
              username: {
                  required: true,
                  minlength: 4,
                  maxlength: 15,
              },
              password: {
                  required: true,
              },
              password1:{
                  required: true,
                  equalTo: "#password",
              }
            },

            messages: {
              name: {
                required: "Ime ne smije biti prazno",
              },
              surname: {
                required: "Prezime ne smije biti prazno",
              },
              username: {
                required: "Username ne smije biti prazan",
                minlength: "Username mora imati barem 4 znaka",
                maxlength: "Username može imati najviše 15 znakova"
              },
              password: {
                required: "Password ne smije biti prazan",
              },
              password1: {
                required: "Password ne smije biti prazan",
                equalTo: "Obje lozinke moraju biti iste",
              },
          },

            submitHandler: function(form) {
              form.submit();
            }
          });
        });
      </script>


<!-- <script type="text/javascript">

document.getElementById("gumb").onclick = function(event)
{
    var slanjeForme = true;


    var poljeIme = document.getElementById("name");
 var ime = document.getElementById("name").value;
 if (ime.length == 0) {
 slanjeForme = false;
 poljeIme.style.border="1px dashed red";
 document.getElementById("porukaName").innerHTML="<br>Unesite ime!<br>";
 } 
 else
 {
 poljeIme.style.border="1px solid green";
 document.getElementById("porukaName").innerHTML="";
 }


 var poljePrezime = document.getElementById("surname");
 var prezime = document.getElementById("surname").value;
 if (prezime.length == 0) {
 slanjeForme = false;
 poljePrezime.style.border="1px dashed red";
 
document.getElementById("porukaSurname").innerHTML="<br>Unesite Prezime!<br>";
 } else {
 poljePrezime.style.border="1px solid green";
 document.getElementById("porukaSurname").innerHTML="";
 }
 

 var poljeUsername = document.getElementById("username");
 var username = document.getElementById("username").value;
 if (username.length == 0) {
 slanjeForme = false;
 poljeUsername.style.border="1px dashed red";
 
document.getElementById("porukaUsername").innerHTML="<br>Unesite korisničko ime!<br>";
 }
 else 
 {
 poljeUsername.style.border="1px solid green";
 document.getElementById("porukaUsername").innerHTML="";
 }
 

 var poljePass = document.getElementById("password");
 var pass = document.getElementById("password").value;
 var poljePassRep = document.getElementById("password1");
 var passRep = document.getElementById("password1").value;
 if (pass.length == 0 || passRep.length == 0 || pass != passRep) {
 slanjeForme = false;
 poljePass.style.border="1px dashed red";
 poljePassRep.style.border="1px dashed red";
 document.getElementById("porukaPassword").innerHTML="<br>Lozinke nisu iste!<br>";
 } else {
 poljePass.style.border="1px solid green";
 poljePassRep.style.border="1px solid green";
 document.getElementById("porukaPassword").innerHTML="";
 }
  return false;

 if (slanjeForme != true) {
 event.preventDefault();
 }
 
 }
 
 </script> -->

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