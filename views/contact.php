<!DOCTYPE html>
<html>
<head>
<title>Contactform</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>

</head>
<body>

<h3><center><b>Contactform</b></center></h3>
<!--- Contactform -->
<div class="container">
  <form action="verstuurd.php">
    <label for="fname">Naam</label>
    <input type="text" id="fname" name="firstname" placeholder="Vul hier uw volledige naam in">

    <label for="lname">E-mail</label>
    <input type="text" id="lname" name="lastname" placeholder="Uw mailadres">

    <label for="functie">Functie</label>
    <select id="functie" name="functie">
      <option value="student">Student</option>
      <option value="docent">Docent</option>
      <option value="anders">Anders</option>
    </select>
    <label for="subject">Vul hier uw opmerking in:</label>
    <textarea id="subject" name="subject" placeholder="Schrijf hier uw opmerking..." style="height:200px"></textarea>
    <input type="submit" value="Submit">
  </form>
</div>
</body>
</html>
