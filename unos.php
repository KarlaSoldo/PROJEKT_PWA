<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Unos</title>
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
            <li><a href='prijava.php'>ADMINISTRACIJA</a></li>
        </ul>
    </nav>
</header>

<div class="content">
  <?php
              
  include 'connect.php';

  if(isset($_GET['id']))
  {
    $id=$_GET['id'];

    $query="SELECT * FROM clanci WHERE id=$id ";
    $result = mysqli_query($dbc, $query);

    $row = mysqli_fetch_array($result);

    echo'<form class="forma" enctype="multipart/form-data" action="skripta.php" method="POST">
        <div>
            <input type="hidden"  id="ide" name="ide" value="'.$row['id'].'">
        </div>

        <div class="form-item">
          <span id="porukaTitle" class="bojaPoruke"></span>
            <label for="title">Naslov vijesti</label>
            
            <div class="form-field">            
                <input id="title" type="text" name="title" value="'.$row['naslov'].'">
            </div>
        </div>

        <div class="form-item">
          <span id="porukaAbout" class="bojaPoruke"></span>
            <label for="about">Kratki sadržaj vijesti (do 50 znakova)</label>

            <div class="form-field">
                <textarea id="about" name="about" cols="30" rows="10"> '.$row['sazetak'].'</textarea>
            </div>
        </div>
        
        <div class="form-item">
          <span id="porukaContent" class="bojaPoruke"></span>
            <label for="content">Sadržaj vijesti</label>

            <div class="form-field">
                <textarea id="content" name="content" cols="30" rows="25">'.$row['tekst'].'</textarea>
            </div>
        </div>
        
        <div class="form-item">
          <span id="porukaSlika" class="bojaPoruke"></span>
            <label for="foto">Slika: </label>
            
            <div class="form-field">
                <input id="foto" type="file" accept="image/jpg,image/gif" name="foto"/>
                <input type="hidden" id="staraSlika" name="staraSlika" value="'.$row['slika'].'">
                <br/>
                <img src="'.$row['slika'].'" width=200px>
                </div>
        </div>
        
        <div class="form-item">
          <span id="porukaKategorija" class="bojaPoruke"></span>
            <label for="category">Kategorija vijesti</label>
           
            <div class="form-field">
                <select id="category" name="category" >
                    <option value="'.$row['kategorija'].'" selected hidden>'.$row['kategorija'].'</option>
                    <option value="sport">Sport</option>
                    <option value="kultura">Kultura</option>
                </select>
            </div>
        </div>';
        
        if($row['arhiva']==0)
        {
        echo'<div class="form-item">
            <label for="archive">Spremiti u arhivu: 
                <div class="form-field">
                    <input id="archive" type="checkbox" name="archive">
                </div>
            </label>
        </div>';
        }
        else{
            echo'<div class="form-item">
            <label for="archive">Spremiti u arhivu: 
                <div class="form-field">
                    <input id="archive" type="checkbox" name="archive" checked>
                </div>
            </label>
        </div>';
        }
        
        echo'<div class="form-item">
            <button type="reset" value="Poništi">Poništi</button>
            <button id="slanje" type="submit" value="Prihvati">Prihvati</button>
        </div>
</form>';
  }
  else{
    echo'<form class="forma" enctype="multipart/form-data" action="skripta.php" method="POST">
        <div>
            <input type="hidden"  id="ide" name="ide" value="0">
        </div>

        <div class="form-item">
          <span id="porukaTitle" class="bojaPoruke"></span>
            <label for="title">Naslov vijesti</label>
            
            <div class="form-field">            
                <input id="title" type="text" name="title">
            </div>
        </div>

        <div class="form-item">
          <span id="porukaAbout" class="bojaPoruke"></span>
            <label for="about">Kratki sadržaj vijesti (do 50 znakova)</label>

            <div class="form-field">
                <textarea id="about" name="about" cols="30" rows="10"></textarea>
            </div>
        </div>
        
        <div class="form-item">
          <span id="porukaContent" class="bojaPoruke"></span>
            <label for="content">Sadržaj vijesti</label>

            <div class="form-field">
                <textarea id="content" name="content" cols="30" rows="25"></textarea>
            </div>
        </div>
        
        <div class="form-item">
          <span id="porukaSlika" class="bojaPoruke"></span>
            <label for="foto">Slika: </label>
            
            <div class="form-field">
                <input id="foto" type="file" accept="image/jpg,image/gif" name="foto"/>
            </div>
        </div>
        
        <div class="form-item">
          <span id="porukaKategorija" class="bojaPoruke"></span>
            <label for="category">Kategorija vijesti</label>
           
            <div class="form-field">
                <select id="category" name="category">
                    <option value="" disabled selected>Odabir kategorije</option>
                    <option value="sport">Sport</option>
                    <option value="kultura">Kultura</option>
                </select>
            </div>
        </div>
        
        <div class="form-item">
            <label for="archive">Spremiti u arhivu: 
                <div class="form-field">
                    <input id="archive" type="checkbox" name="archive">
                </div>
            </label>
        </div>
        
        <div class="form-item">
            <button type="reset" value="Poništi">Poništi</button>
            <button id="slanje" type="submit" value="Prihvati">Prihvati</button>
        </div>
</form>';
}
?>
        <script type="text/javascript">

 document.getElementById("slanje").onclick = function(event) {
 
 var slanjeForme = true;
 
 // Naslov vjesti (5-30 znakova)
 var poljeTitle = document.getElementById("title");
 var title = document.getElementById("title").value;

 if (title.length < 5 || title.length > 30) {
 slanjeForme = false;
 poljeTitle.style.border="1px dashed red";
 document.getElementById("porukaTitle").innerHTML="Naslov vjesti mora imati između 5 i 30 znakova!<br>";
 document.getElementById('porukaTitle').style.color = 'red';

 } 
 else 
 {
 poljeTitle.style.border="1px solid green";
 document.getElementById("porukaTitle").innerHTML="";
 }
 
 // Kratki sadržaj (10-100 znakova)
 var poljeAbout = document.getElementById("about");
 var about = document.getElementById("about").value;
 if (about.length < 10 || about.length > 100) {
 slanjeForme = false;
 poljeAbout.style.border="1px dashed red";
 document.getElementById("porukaAbout").innerHTML="Kratki sadržaj mora imati između 10 i 100 znakova!<br>";
 document.getElementById('porukaAbout').style.color = 'red';
 } 
 else
 {
 poljeAbout.style.border="1px solid green";
 document.getElementById("porukaAbout").innerHTML="";
 }
 // Sadržaj mora biti unesen
 var poljeContent = document.getElementById("content");
 var content = document.getElementById("content").value;
 if (content.length == 0) {
 slanjeForme = false;
 poljeContent.style.border="1px dashed red";
 document.getElementById("porukaContent").innerHTML="Sadržaj mora biti unesen!<br>";
 document.getElementById('porukaContent').style.color = 'red';
 } 
 else
 {
 poljeContent.style.border="1px solid green";
10
 document.getElementById("porukaContent").innerHTML="";
 }
 // Slika mora biti unesena
 var poljeSlika = document.getElementById("foto");
 var pphoto = document.getElementById("foto").value;
 var ide = document.getElementById('ide').value;

 if (pphoto.length == 0 && ide==0) {
 slanjeForme = false;
 poljeSlika.style.border="1px dashed red";
 document.getElementById("porukaSlika").innerHTML="Slika mora biti unesena!<br>";
 document.getElementById('porukaSlika').style.color = 'red';
 } 
 else
 {
 poljeSlika.style.border="1px solid green";
 document.getElementById("porukaSlika").innerHTML="";
 }
 // Kategorija mora biti odabrana
 var poljeCategory = document.getElementById("category");
 if(document.getElementById("category").selectedIndex == 0 && ide==0) {
 slanjeForme = false;
 poljeCategory.style.border="1px dashed red";
 
document.getElementById("porukaKategorija").innerHTML="Kategorija mora biti odabrana!<br>";
document.getElementById('porukaKategorija').style.color = 'red';
 }
else
{
 poljeCategory.style.border="1px solid green";
 document.getElementById("porukaKategorija").innerHTML="";
 }


 
 if (slanjeForme != true) {
 event.preventDefault();
 }
 
 }
 </script>    
</div>

<footer>
    <div class="content">
        <p>
            Weitere Online-Angebode der Axel pringer SE:>
        </p>
        <div class="prazno"></div>
    </div>
</footer>
</body>
</html>  
    