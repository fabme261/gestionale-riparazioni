<?php
require_once "conn.php";

$name = (!empty($_POST["name"])) ? $_POST["name"] : "";
$select1 =(!empty($_REQUEST["selectType"])) ? $_REQUEST["selectType"] : "";
$tipologia =(!empty($_REQUEST["tipologiaR"])) ? $_REQUEST["tipologiaR"] : "";
$dataConsegna=(!empty($_POST["dataConsegna"])) ? $_POST["dataConsegna"] : "";
$select2 = (!empty($_REQUEST["select2"])) ? $_REQUEST["select2"] : "";
$note = (!empty($_REQUEST["note"])) ? $_REQUEST["note"] : "";

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
<script>
    $("#nuovaRiparazione").submit();
</script>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="assets/img/loScrigno.png" alt="logo"></a>
            </button>


        </div>
        </div>
    </nav>
    <!--FINE NAV -->

    <div class="inserimento">
        <div class="titolo">
            <h3>Inserimento nuova riparazione</h3>
        </div>
        <form action="" method="post" name="nuovaRiparazione" id="nuovaRiparazione">
            <div class="prima">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nome</span>
                    <input type="text" name="name" class="form-control" placeholder="Nome e Cognome" aria-label="Nome e Cognome" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <select name="selectType" id="selectType" class="form-select" aria-label="Default select example">
                        <option selected>Seleziona oggetto</option>
                        <option value="Anello">Anello</option>
                        <option value="Bracciale">Bracciale</option>
                        <option value="Catenina">Catenina</option>
                        <option value="Ciondolo">Ciondolo</option>
                        <option value="Orecchini">Orecchini</option>
                        <option value="Orologio">Orologio</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-text">Tipologia riparazione</span>
                <textarea class="form-control" name="tipologiaR" aria-label="Tipologia riparazione"></textarea>
            </div>

            <div class="seconda">
                <div class="input-group mb-3 maremma">
                    <div>
                        <p>Data consegna</p>
                    </div>
                    <div><input type="date" name ="dataConsegna" class="form-control"></div>
                </div>
                <div class="input-group mb-3">
                    <select class="form-select"  name="select2" aria-label="Default select example">
                        <option selected>Consegnare a </option>
                        <option value="Angelo">Angelo</option>
                        <option value="Tari">Tarì</option>
                        <option value="Orologiaio">Orologiaio</option>
                    </select>
                </div>

            </div>

            <div class="input-group">
                <span class="input-group-text" >Note</span>
                <textarea class="form-control" name="note" aria-label="Note"></textarea>
            </div>

            <button class="btn btn-sm btn-outline-secondary" value="submit"> INSERISCI</button>
        </form>
    </div>
    <?php
    
    $strSQL= "INSERT INTO `tgestionale` (`nomeCognome`, `oggetto`, `tipoRiparazione`, `dataConsegna`, `dataRitiro`, `chiRipara`, `note`) VALUES ('$name', '$select1', '$tipologia', '$dataConsegna', '', '$select2', '$note')";
    //echo $strSQL;
    
    $query = mysqli_query($conn, $strSQL);
    
    ?>
</body>

</html>