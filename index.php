<?php
require_once "conn.php";
$ricercaPerNome = (!empty($_POST["RicercaPerNome"])) ? $_POST["RicercaPerNome"] : "";
$ricercaPerData = (!empty($_POST["data"])) ? $_POST["data"] : "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionale Riparazioni</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>   
<script>
  function Ricerca()
    {
   RicercaPerNome=FormRicerca.textRicercaPerNome.value; 
      if(RicercaPerNome=="")
      {
      alert ("Immetti termine");
      return;
      }
      FormRicerca.submit();
      }

  function RicercaData()
    {
   RicercaPerData = FormData.textData.value; 
      if(RicercaPerData=="")
      {
      alert ("Immetti data");
      return;
      }
      FormData.submit();
      }
  </script>
<!-- NAV MENU -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="assets/img/loScrigno.png" alt="logo"></a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
    <form class="d-flex" role="search" name="FormRicerca" action="" method="post">
      <input class="form-control me-2" id="textRicercaPerNome" name="RicercaPerNome" type="search" placeholder="Cerca riparazione" aria-label="Search">
      <button class="btn btn-sm btn-outline-secondary" onclick="Ricerca()">Cerca</button>
    </form>
    <form action="" name="FormData" method="post">
        <p>Cerca riparazione per data</p>
        <input type="date" id="textData" name="data" >
        <button class="btn btn-sm btn-outline-secondary" onclick="RicercaData()">Cerca</button>
    </form>
    <form action="">
        <a href="form_insert.php"><input class="btn btn-sm btn-outline-secondary" type="button" value="INSERISCI NUOVA"></a>
    </form>
  </div>
</div>
</nav>
<?php


$strSQL = "SELECT * FROM tgestionale  WHERE nomeCognome LIKE '%" . $ricercaPerNome . "%' OR Oggetto LIKE '%" . $ricercaPerNome ."%' OR tipoRiparazione LIKE '%" . $ricercaPerNome ."%' OR chiRipara LIKE '%" . $ricercaPerNome ."%' order by dataConsegna LIMIT 10 ";
  $query = mysqli_query($conn, $strSQL);
  if(!empty($ricercaPerNome)){
  if(mysqli_num_rows($query)==0){
 
    echo("Non esistono articoli che soddisfano la ricerca");
    return;
    }
    ?>
    <table class="table">
  <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome e cognome</th>
                <th scope="col">Oggetto</th>
                <th scope="col">Tipo Riparazione</th>
                <th scope="col">Data Consegna</th>
                <th scope="col">Chi Ripara</th>
                <th scope="col">Note</th>
            </tr>
            </thead>
  <tbody>
 <?php
 while($row = mysqli_fetch_assoc($query))
  {
  ?>
  <tr>
   
   <td> <?php echo $row["id"]; ?></td>
   <td> <?php echo $row["nomeCognome"]; ?></td>
   <td> <?php echo $row["oggetto"]; ?></td>
   <td> <?php echo $row["tipoRiparazione"]; ?></td>
   <td> <?php echo $row["dataConsegna"]; ?></td>
   <td> <?php echo $row["chiRipara"]; ?></td>
   <td> <?php echo $row["note"]; ?></td>
   </tr>
 <?php
 }
 }
 ?>
 </tbody>
</table>
 
<?php
$strSQL1 = "SELECT * FROM tgestionale  WHERE dataConsegna = '".$ricercaPerData."' order by id LIMIT 10 ";
  $query1 = mysqli_query($conn, $strSQL1);
  if(!empty($ricercaPerData)){
  if(mysqli_num_rows($query1)==0){
 
    echo("Non esistono articoli che soddisfano la ricerca");
    return;
    }
    ?>
    <table class="table">
  <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome e cognome</th>
                <th scope="col">Oggetto</th>
                <th scope="col">Tipo Riparazione</th>
                <th scope="col">Data Consegna</th>
                <th scope="col">Chi Ripara</th>
                <th scope="col">Note</th>
            </tr>
            </thead>
  <tbody>
 <?php
 while($row = mysqli_fetch_assoc($query1))
  {
  ?>
  <tr>
   
   <td> <?php echo $row["id"]; ?></td>
   <td> <?php echo $row["nomeCognome"]; ?></td>
   <td> <?php echo $row["oggetto"]; ?></td>
   <td> <?php echo $row["tipoRiparazione"]; ?></td>
   <td> <?php echo $row["dataConsegna"]; ?></td>
   <td> <?php echo $row["chiRipara"]; ?></td>
   <td> <?php echo $row["note"]; ?></td>
</tr>
 <?php
 }
 }
 ?>
 </tbody>
</table>
</body>
</html>


