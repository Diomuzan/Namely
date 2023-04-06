<?php
session_start();
$name = "";
$lastName=  "";
$age = "";
$genderSelection = "";
if(isset($_POST['subButton'])) {
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = "Vul een naam in alstublieft!";
    }
    if (isset($_POST['lastName'])) {
        $lastName = $_POST['lastName'];
    } else {
        $lastName = "Vul een achternaam in alstublieft!";
    }
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
    } else {
        $age = "Vul een leeftijd in alstublieft!";
    }
    if (isset($_POST['genderSelection'])) {
        $genderSelection = $_POST['genderSelection'];
    } else {
        $genderSelection = "Kies een geslacht alstublieft!";
    }
}

?>

<!DOCTYPE HTML>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>
            <h1 class= "position-relative" style="display: inline-block; top: 10px; left: 10px;">Namely</h1>

            <form class= "position-relative" style= "width: 1250px; top: 20px; left: 10px;>
                <div class="mb-3" method= "post" >
                    <label class="form-label">Naam</label>
                    <input type="text" class="form-control" name= "name">
                </div>
                <div class="mb-3 position-relative" style= "top: 6px;">
                    <label class="form-label">Achternaam</label>
                    <input type="text" class="form-control" name= "lastName">
                </div>
                <div class="mb-3 position-relative" style= "top: 0px;">
                    <label class="form-label">Leeftijd</label>
                    <input type="text" class="form-control" name= "age">
                </div>
                <div class="mb-3">
                    <input type="radio" name= "genderSelection" value= "Man">
                    <label>Man</label>
                </div>
                <div class="mb-3 position-relative" style= "top: -10px;">
                    <input type="radio" name= "genderSelection" value="Vrouw">
                    <label>Vrouw</label>
                </div>
                <button type="submit" class="btn btn-primary" name= "subButton">Verzenden</button>
            </form>

            <p class= "position-relative" style= "display: inline-block; top: 50px; left: 10px;">Resultaat van formulier:<br>
                Voornaam: <?php echo $name; ?> <br>
               Achternaam: <?php echo  $lastName; ?> <br>
               Leeftijd: <?php echo $age; ?> <br>
               Geslacht: <?php echo $genderSelection; ?> <br>
            </p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>

