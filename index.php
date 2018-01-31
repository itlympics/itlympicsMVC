<!DOCTYPE html>
<html>
<head>
  <title>IT-Lympics</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!--Styling:-->
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover, .dropdown:hover .dropbtn {
    background-color: #ADFF2F;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body>
<!--               Navigatiebalk              -->
<ul>
  <li><a href=""><b>Home</b></a></li>
  <li><a href="views/contact.php">Contact Us</a></li>
  <li><a href="views/informatie.php">Informatie</a></li>
    </div>
  </li>
</ul> 


<!--                               Header               -->
<div class="jumbotron text-center">
<p style="font-size:100px;">De IT-Lympics</p>
  <p>&nbsp&nbsp &nbsp  Team CLI<i><b><h4>&nbsp &nbsp &nbsp Romario, Silvère, Robert en Amine</h4></b></i></p> 
  <img src="images/windesheim-flevoland.png" width="25%">
</div>

<!--                          Info onder header -->
<center><h2><b>De IT-Lympics</b></h2></center>
<p style="font-size:23px;">In de week van maandag 29 januari 2018 organiseert Windesheim Flevoland, samen met het Almeerse
bedrijfsleven, de IT-Lympics 2018. De IT-Lympics is een sportevenement voor eerstejaars Windesheimstudenten HBO-ICT en Associate Degree Software Development.
Teams van 4 personen zullen met elkaar de strijd aangaan in diverse ICT-gerelateerde sportieve evenementen.
Ook strijden de teams om de prijs voor de beste app en de beste video van het evenement.</p><br>


<!--                        Columns            -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2><b>Locatie</b></h2>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.999942072759!2d5.2199753156190445!3d52.370421055056276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c616e13959b029%3A0xe04f21626e2f3f0e!2sWindesheim+Flevoland!5e0!3m2!1sen!2snl!4v1517398779934" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <h2><b>About</b></h2>        
      <p style="font-size:25px;">Windesheim Flevoland<br>
        Hospitaaldreef 5 <br>
        1315 RC Almere<br>
        Tel. 088 - 469 88 88</p>        
        <a href="views\contact.php"><b><h3>Contact us</h3></b></a>
    </div>
  </div>
</div>
</body>
<footer>
  <p><b>&nbspIT-lympics:&nbsp©</b> Team CLI &nbsp </p>
</footer>
</html>