<!DOCTYPE html>
<html>
  <head>
    <title>Formulaire d'ajout du patient</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 50px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      legend {
      padding: 10px;      
      font-family: Roboto, Arial, sans-serif;
      font-size: 18px;
      color: #fff;
      background-color: #13C5DD;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px #13C5DD; 
      }
      .banner {
      position: relative;
      height: 250px;
      background-image: url("/uploads/media/default/0001/02/b23a2c8c49b8e43249487140e4c2e22a63bd7cb8.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.4); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #13C5DD;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #13C5DD;
      color: #13C5DD;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color: #00b33c;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .week {
      display:flex;
      justify-content:space-between;
      }
      .columns {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .columns div {
      width:48%;
      }
      [type="date"]::-webkit-calendar-picker-indicator {
      right: 1%;
      z-index: 2;
      opacity: 0;
      cursor: pointer;
      }
      input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #13C5DD;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #13C5DD;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .btn-block {
      margin-top: 10px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #13C5DD;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background:  #13C5DD;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
      nav {
  background-color: #13C5DD;
  overflow: hidden;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  text-align: center;
}

nav li {
  display: inline-block;
}

nav a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
nav a:hover {
  background-color: #ddd;
  color: black;
}
    </style>
     </head>
  <body>
    <div class="testbox">
    <form method="POST" action="affichage.php" name="form"> 
      <div class="banner">
    <?php
include("connect.php");
$bdd =maConnexion();
if (isset($_REQUEST['nom']) && !empty($_REQUEST['nom']))
$nom=$bdd->quote($_REQUEST['nom']);
else die ("<p>Nom non defini ou saisi</p>");

if (isset($_REQUEST['prenom']) && !empty($_REQUEST['prenom']))
$prenom=$bdd->quote($_REQUEST['prenom']);
else die ("<p>Prenom non defini ou saisi</p>");

if (isset($_REQUEST['email']) && !empty($_REQUEST['email']))
$email=$bdd->quote($_REQUEST['email']);
else die ("<p>Email non defini ou non saisi</p>");
$arobase = strpos($email, '@');
$point = strpos($email, '.');

if( ($arobase < 3) || ( ($point + 2)> strlen($email) ) )
die ("<p>Email non correctement saisi</p>");
if (isset($_REQUEST['adresse']) && !empty($_REQUEST['adresse']))
$adresse=$bdd->quote($_REQUEST['adresse']);
$sql="INSERT INTO mal Values (NULL, $nom,$prenom,$email,$adresse)";
$nblignes=$bdd->exec($sql);
if ($nblignes!=1)
  die ("<p>Impossible d'effectuer la requete!".$bdd->errorInfo()[2]." </p>");
else 
{
  ?> <p class='temps'>Enregistrement ajoute! <br>
<?php
echo "Votre numero d'identifiant est:" .$bdd->lastInsertId();
}?> </p>
<?php $bdd=null;?>



</div>
      <br/>
      
      <nav>
  <ul>
    <li><a href="affichage.php">Afficher le malade</a></li>
    <li><a href="maj.html">Modifier le malade</a></li>
    <li><a href="supprimer.php">Supprimer le malade</a></li>
    
  </ul>
</nav>
        </div>
    </div>
  </body>
</html>