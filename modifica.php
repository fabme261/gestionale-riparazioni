<?php
require_once "conn.php";
$id = (!empty($_GET["id"])) ? $_GET["id"] : "";
$data = (!empty($_GET["data"])) ? $_GET["data"] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizza singolo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
<div class="container-fluid">
  <a class="navbar-brand" href="index.php"><img src="assets/img/loScrigno.png" alt="logo"></a>
  </button>
    
    
  </div>
</div>
</nav>
<body>
    <style>
        table {
            text-align: left;
        }

        img {
            width: 60%;
        }

        .all {
            padding: 20px;
        }
    </style>
    <script>
        
    $("#dataRitiro").submit();

    </script>
    <?php

    $strSQL = "SELECT * FROM tgestionale WHERE id = $id";
    $query = mysqli_query($conn, $strSQL);
    $row = mysqli_fetch_assoc($query)

    ?>
    <div class="all">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome e cognome</th>
                    <th scope="col">Oggetto</th>
                    <th scope="col">Tipo Riparazione</th>
                    <th scope="col">Data Consegna</th>
                    <th scope="col">Data ritiro</th>
                    <th scope="col">Chi Ripara</th>
                    <th scope="col">Note</th>
                </tr>
            </thead>
            <tbody>
                <tr>


                    <td> <?php echo $row["id"]; ?></td>
                    <td> <?php echo $row["nomeCognome"]; ?></td>
                    <td> <?php echo $row["oggetto"]; ?></td>
                    <td> <?php echo $row["tipoRiparazione"]; ?></td>
                    <td> <?php echo $row["dataConsegna"]; ?></td>
                    <td> <?php echo $row["dataRitiro"]; ?></td>
                    <td> <?php echo $row["chiRipara"]; ?></td>
                    <td> <?php echo $row["note"]; ?></td>
                </tr>
            </tbody>
        </table>

        <form action="" name="FormData" method="get" id="dataRitiro">
            <p>Inserisci data ritiro</p>
            <input type="date" id="textData" name="data">
            <button class="btn btn-sm btn-outline-secondary" value="submit">Inserisci</button>
        </form>
    </div>
    <?php
$strSQL1="UPDATE tgestionale SET dataRitiro = '$data' WHERE id = $id";
echo $strSQL1;
/*$query1 = mysqli_query($conn, $strSQL1);
if(mysqli_num_rows($query)==0){
    echo "update fallito!";
  }else{
    echo "update completato!";
  }*/
?>
</body>

</html>