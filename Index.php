<?php
$nome= (isset($_POST["nome"])) ? $_POST["nome"] : "";
print $nome;
$cognome= (isset($_POST["cognome"])) ? $_POST["cognome"] : "";
print $cognome;
$Indirizzo= (isset($_POST["Indirizzo"])) ? $_POST["Indirizzo"] : "";
print $Indirizzo;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    <title>My form</title>

 </head>
  <body>

    <div class="container">
      <h1>Inserisci i tuoi dati</h1>
     <div class="alert alert-primary" role="alert">
      <?php
        foreach($_POST as $key => $value) {
          print $key . ': ' . $value  . '<li>';
        }
      ?>
      </div>
      <form action="Index.php" method="post">
        <div class="form-group">
          <label for="name">Nome:</label>
          <input type="text" class="form-control" name="nome" id="nome"  aria-describedby="nameHelp" placeholder="Il tuo nome">
        <small id="nameHelp" class="form-text text-muted">Inserisci il tuo nome</small>
        </div>
        <div class="form-group">
    <label for="Surname">Cognome:</label>
    <input type="text" class="form-control" name="cognome" id="cognome" placeholder="Il tuo cognome">
    <small id="surnameHelp" class="form-text text-muted">Inserisci il tuo cognome</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">E-mail </label>
    <input type="email" class="form-control" name="Indirizzo" id="Indirizzo" aria-describedby="emailHelp" placeholder="Inserisci la tua e-mail">
    <small id="emailHelp" class="form-text text-muted">Inserisci l'indirizzo e-mail</small>
  </div>
  <button type="submit" class="btn btn-primary">Invia</button>
        </form>
        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js" ></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>