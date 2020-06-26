<?php
include 'staal.css';
include 'connection.php';
include 'process_inloggen.php';
include 'process_bekijken.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Sjoerd Verhelst</title>
</head>
<body>
    

<header>
  <section id="section-0">
    <div class="text-block"><h1>Portfolio</h1></div>
    <div class="text-block2"><h1>Sjoerd Verhelst</h1></div> <br>
    <button class="button1" type="button" onclick="smoothScroll(document.getElementById('section-1'))">voor Info over deze website klik hier!!</button><br>
  </section>
</header>

<nav>
  <ul>
    <li><a href="#section-0">home</a></li>
    <li><a href="#section-1">Over Sjoerd Verhelst</a></li>
    <li><a href="#section-2">hobby's</a></li>
    <li><a href="#section-3">Werkervaring</a></li>
    <li><a href="#section-4">Gemaakte projecten</a></li>
    <li><a href="#section-5">Contact Gegevens</a></li>
    <li><a href="#section-6">Inloggen</a></li>
  </ul>
</nav>

<main>
  <section id="section-1">
    <div class="section1">
      <br>
      <center><h1>Over Sjoerd Verhelst</h1></center>
      <img align="right"src="20170910 Sjoerd.png" alt="Foto Sjoerd" height="250" width="170" >
      <br>
      <br>
      <p>Hallo ik ben Sjoerd Verhelst! Hier onder vertel ik een stukje <br> over mij en laat ik zien wat ik graag doe en wat ik leuk vind.</p>
      <br>
      <br>
      <img align="left" src="sjoerdberg.JPEG" alt="sjoerdberg" height="250" width="360" > <br> <br> <br><br> <br> <br><br> <br> <br><br> <br> <br>
      <img align="left" src="sjoerdfiets.JPG" alt="sjoerdfiets" height="250" width="360" >
      <p align="right">  Wat ik het liefst in mijn vrijetijd doe is lekker buiten sporten. <br>
                    ik sport veel Atletiek elke dindsdag,donderdag en zaterdag <br>
                    maar ik doe ook nog Mountainbike voor me zelf ga ik vaak tochten fietsen <br>
                    tussen de 40 en de 60 km. ik heb zelf ook nog een kleine fiets lijkt op een <br>
                    mountainbike en een bmx zit er tussen. Daarmee ga ik vaak naar Limburg toe <br>
                    of naar een skatepark.</p>
    </div>
  </section>

  <section id="section-2">
    <div class="section2">
      <h1 align="right" >Hobby's</h1>
      <p align="right" > Mijn hobby's zijn: Scouting Atletiek en mountainbike. <br>
      <br>
      Het leukste wat ik vind is mountainbike! lekker lange routes <br> rijden in de bossen en helemaal vies worden! <br>
      Maar het aller leukste vind ik bmx rijden op een soort mountainbike. <br>
      Je kan grote jumps nemen trucjes doen hard gaan over een pumptrack. <br>
      Een pumptrack is een baan van asfalt met <br> heuveltjes waarmee je door middel van duwen en trekken naarvoren komt. <br>
      Ik ben vaak naar bikeparks! of naar grote jumps in limburg die zijn van zand <br>
      <br>
      Met scouting gaan we vaak hiken met een grote rugzag <br>
      samen met al je bepakking  en maten een mooie route lopen. <br>
      <br>
      Of met atletiek vaak samen trainen voor een wedstrijd! <br>
      nieuwe persenol records neer zetten of met de club zo hoog mogelijk eindigen! </p>
      <br>
      <br>
      <br>
      <img align="right" src="Foto1.JPG" alt="sjoerd1" height="250" width="360" >
      <img align="right" src="Foto2.JPG" alt="sjoerd2" height="250" width="200" >
      <img align="right" src="Foto3.JPG" alt="sjoerd3" height="250" width="360" >
    </div>
  </section>

  <section id="section-3">
    <div class="section3">
        <center><h1>Werkervaring</h1></center>
        <br>
        <br>
        <div class="box1">
          <h3>Opleiding</h3>
          <table class="white"> 
            <tr>
              <th>2005-2014</th>
              <td>OBS De Rietgoor Roosendaal</td>
            </tr>
            <tr>
              <th>2014-2018</th>
              <td>VMBO DavinciCollege (Techniek) Roosendaal</td>
            </tr>
            <tr>
              <th>2018-Heden</th>
              <td>MBO Zoomvliet Applicatie en Mediaontwikkelaar nv4</td>
            </tr>
          </table>
        </div>

        <div class="box2">
          <h3>Stage</h3>
          <table class="white"> 
            <tr>
              <th>2015-2016</th>
              <td>Elcor Electro Techniek</td>
            </tr>
            <tr>
              <th>2016-2017</th>
              <td>Enexis Roosendaal</td>
            </tr>
          </table>
        </div>
          
        <div class="box3">
          <h3>Werk</h3>
          <table class="white"> 
            <tr>
              <th>2017-Heden </th>
              <td>Ochtend krant BM De Stem</td>
            </tr>
          </table>
        </div>


      </div>  
  </section>

  <section id="section-4">
    <div class="section4">
      <center><h1>Gemaakte Projecten</h1>
      <h3>hier het project van mijn dierentuin website</h3>
      <iframe src="http://ceto/dierentuin/home.php" height="700" width="1300"></iframe>
      <br>
      <br>
      <iframe src="http://ceto/dancefestival/Home.php" height="700" width="1300"></iframe>
      <br>
      <br>
      <form method="POST">
      <button class="button2" type="submit" name="btndierentuin">code van de dierentuin</button><br>
      <button class="button2" type="submit" name="btnvliegen">code van de vliegtuigen</button><br>
      </form>

      </center>
      <div class="cardinfoBIG">
        <div class="container">

      <?php
if (isset($_POST['btndierentuin']))
{
$query = "SELECT * FROM projecten WHERE projectnaam = 'dierentuin' ";
$stm = $con->prepare($query);
if($stm->execute())
{
  $result = $stm->fetchAll (PDO::FETCH_OBJ);
  foreach($result as $code1)
  {
    echo highlight_string ("$code1->code");
  }
}
}

if (isset($_POST['btnvliegen']))
{
$query = "SELECT * FROM projecten WHERE projectnaam = 'vliegtuigen' ";
$stm = $con->prepare($query);
if($stm->execute())
{
  $resultt = $stm->fetchAll (PDO::FETCH_OBJ);
  foreach($resultt as $code)
  {
    echo highlight_string ("$code->code");
  }
}
}
?>

        </div>
      </div>
    </div>
  </section>

  <section id="section-5">
    <div class="section5">
      <center><h1>Contact gegevens</h1>
      <br>
      <br>
      <table cellspacing="15px" >
        <tr>
          <th>Voornaam:</th>
          <td >Sjoerd</td>
        </tr>
        <tr>
          <th>Achternaam:</th>
          <td>Verhelst</td>
        </tr>
        <tr>
          <th>Woonplaats:</th>
          <td>Roosendaal</td>
        </tr>
        <tr>
          <th>Adres:</th>
          <td>Elzenberg 48</td>
        </tr>
        <tr>
          <th>Postcode:</th>
          <td>4708ES Roosendaal</td>
        </tr>
        <tr>
          <th>Telefoonnummer:</th>
          <td>0641286739</td>
        </tr>
        <tr>
          <th>Geboortedatum:</th>
          <td>21-10-2001</td>
        </tr>
      </table>
      </center>
    </div>    
  </section>

  <section id="section-6">
    <div class="section6">
      <center><h1>Inloggen</h1>
      <form action="process_inloggen.php" method="post">
        <table>
          <tr>
            <th><label for="txtnaam">Gebruikers naam:</label></th>
            <td><input type="text" name="txtnaam"></td>
          </tr>
          <tr>
            <th><label for="txtwachtwoord">Wachtwoord:</label></th>
            <td><input type="password" name="txtwachtwoord" ></td>
          </tr>
          <tr>
            <th></th>
            <td><button type="butten" name="btnInloggen"> Inloggen</button></td>
          </tr>
        </table>
        <?php
          if (@$_GET['Empty']==true)
          {
            echo $_GET['Empty'];
          }
          ?>
          <?php
            if (@$_GET['Invalid']==true)
            {
              echo $_GET['Invalid'];
            }
            ?>
        </form>
        </center>
    </div>
  </section>

</main>
<!-- 
<footer>
  &copy; Footer
</footer> -->




</body>
</html>


<script>


let mainNavLinks = document.querySelectorAll("nav ul li a");
let mainSections = document.querySelectorAll("main section");

let lastId;
let cur = [];

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});

</script>




<script>
        window.smoothScroll = function(target) {
    var scrollContainer = target;
    do { //find scroll container
        scrollContainer = scrollContainer.parentNode;
        if (!scrollContainer) return;
        scrollContainer.scrollTop += 1;
    } while (scrollContainer.scrollTop == 0);

    var targetY = 0;
    do { //find the top of target relatively to the container
        if (target == scrollContainer) break;
        targetY += target.offsetTop;
    } while (target = target.offsetParent);

    scroll = function(c, a, b, i) {
        i++; if (i > 30) return;
        c.scrollTop = a + (b - a) / 30 * i;
        setTimeout(function(){ scroll(c, a, b, i); }, 2);
    }
    // start scrolling
    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
}
    </script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.18.1/styles/gradient-dark.min.css">
    <script>hljs.initHighlightingOnLoad();</script>