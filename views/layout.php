<!DOCTYPE html>
<html>
<head>
  <title>Voedingscentrum</title>
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
<!--           Navigatiebalk              -->
<ul>
  <li><a href="#home"><b>Home</b></a></li>
  <li><a href="#news">About</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Informatie</a>
    <div class="dropdown-content">
      <a href="#">Gezondheid</a>
      <a href="#">Dieet</a>
      <a href="#">Milieu</a>
    </div>
  </li>
</ul>
<!--                               Header               -->
<div class="jumbotron text-center">
<h1>&nbspVoedingscentrum</h1>
  <p>&nbsp&nbsp &nbsp  IT-lympics 
  <i><b><h4>&nbsp &nbsp &nbsp Romario, Silvère, Robert en Amine</h4></b></i></p> 
</div>
<!--                    Columns regelen            -->
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3><b>Locatie</b></h3>
      <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.999942072759!2d5.2199753156190445!3d52.370421055056276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c616e13959b029%3A0xe04f21626e2f3f0e!2sWindesheim+Flevoland!5e0!3m2!1sen!2snl!4v1517398779934" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></p>
    </div>
    <div class="col-sm-4">
    </div>
    <div class="col-sm-4">
      <h3><b>About</b></h3>        
      <p></p>
    </div>
  </div>
</div>
</body>
</html>